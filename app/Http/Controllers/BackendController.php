<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Articles;
use App\ArticlesCate;
use App\LandingProjects;
use App\User;
use App\Product;
use App\EstateType;
use App\City;
use App\District;
use App\Direction;
use App\Unit;
use App\CustomLink;
use App\Contact;
use App\Price;
use App\Area;
use App\ProductImage;
use Helper, File, Session, Auth, Hash, URL;
class BackendController extends Controller
{
    public function loginForm()
    {    
        return view('backend.login');
    }
    public function checkLogin(Request $request)
    {
        $dataArr = $request->all();
        
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required'
        ],
        [
            'email.required' => 'Bạn chưa nhập email',
            'password.required' => 'Bạn chưa nhập mật khẩu'            
        ]);
        $dataArr = [
            'email' => $request->email,
            'password' => $request->password,
            'usertype_id' =>1
        ];
        if (Auth::validate($dataArr)) {
            if (Auth::attempt($dataArr)) {
              
                return redirect()->route('dashboard.index');
              
            }
        }else {
            // if any error send back with message.
            Session::flash('error', 'Email hoặc mật khẩu không đúng.'); 
            return redirect()->route('backend.login-form');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('backend.login-form');
    }
    public function dashboard(Request $request)
    {              
    	if(isset(Auth::user()->usertype_id) && Auth::user()->usertype_id==1){
        	return view('backend.dashboard.index');
        }
        return redirect()->route('backend.login-form');
    }
    public function productIndex(Request $request)
    {        
        $type = $request->type ? $request->type : null;
        $estate_type_id = isset($request->estate_type_id) ? $request->estate_type_id : null;
        $city_id = isset($request->city_id) ? $request->city_id : 1;
        $district_id = isset($request->district_id) ? $request->district_id : null;
        $name = isset($request->name) && trim($request->name) != '' ? trim($request->name) : '';
        $status = $request->status ? $request->status : null;
        if(isset($type)){
        	$estateTypeArr = EstateType::where('type', $type)->get();
        }else{
        	$estateTypeArr = [];
        }
        $query = Product::whereRaw('1');
        if( $type ){
            $query->where('type', $type);
        }
        if( $status ){
            $query->where('status', $status);
        }
        if( $estate_type_id ){
            $query->where('estate_type_id', $estate_type_id);
        }
        if( $district_id ){
            $query->where('district_id', $district_id);
        }
        if( $name != ''){
            $query->where('title', 'LIKE', '%'.$name.'%');            
        }
        $items = $query->orderBy('id', 'desc')->paginate(10);
        $cityList = City::all();
        $districtList = District::where('city_id', $city_id)->get();
        $priceUnitList = Unit::where('type', 'amount')->get();
        $directionArr = Direction::all();
        return view('backend.product.index', compact( 'items','type', 'estate_type_id','city_id','district_id', 'cityList', 'estateTypeArr', 'districtList', 'name', 'status'));        
    }
    public function productCreate(Request $request)
    {
        $type = $request->type ? $request->type : 1;
        $estate_type_id = isset($request->estate_type_id) ? $request->estate_type_id : null;
        $city_id = $request->city_id ? $request->city_id : 1;
        $district_id = isset($request->district_id) ? $request->district_id : 260;
        if(isset($type)){
            $estateTypeArr = EstateType::where('type', $type)->get();
        }else{
            $estateTypeArr = [];
        }
        if(isset($city_id)){
            $districtList = District::where('city_id', $city_id)->get();
        }else{
            $districtList = District::where('city_id', 1)->get();
        }
       
        $cityList = City::all();        
        $priceUnitList = Unit::where('type', 'amount')->get();
        $directionArr = Direction::all();
        return view('backend.product.create', compact('estateTypeArr','estate_type_id','type','cityList','districtList', 'city_id','district_id','priceUnitList','directionArr','type'));
    }
    public function productEdit($id)
    {        
        $hinhArr = (object) [];
        $detail = Product::find($id);
       // var_dump($detail->type);die;
        $hinhArr = ProductImage::where('product_id', $id)->get();     
        $estateTypeArr = EstateType::where('type', $detail->type)->get();
        $priceList = Price::where('id', $detail->price_id)->get();
        $estate_type_id = $detail->estate_type_id;             
        $detailEstate = EstateType::find($estate_type_id);             
        $priceUnitList = Unit::where('type', 'amount')->get();
        $districtList = District::where('city_id', $detail->city_id)->get();
       // var_dump($detail->district_id);die;
        $directionArr = Direction::all();
        $areaList = Area::all();
        return view('backend.product.edit', compact( 'detail', 'hinhArr', 'estateTypeArr', 'priceUnitList', 'districtList','detailEstate', 'directionArr', 'areaList'));
    }
    public function productStore(Request $request){
        $this->validate($request,[
            'type' => 'required',
            'estate_type_id' => 'required',
            'district_id' => 'required',
            'title' => 'required',
            'price' => 'required|numeric',
            'amount_unit_id' => 'required',
            'area' => 'required|numeric',
        ],
        [            
            'estate_type_id.required' => 'Bạn chưa chọn loại bất động sản',
            'district_id.required' => 'Bạn chưa chọn quận',
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'price.required' => 'Bạn chưa nhập giá',
            'price.numeric' => 'Bạn nhập giá không hợp lệ',
            'amount_unit_id.required' => 'Bạn chưa chọn đơn vị giá',            
            'area.required' => 'Bạn chưa nhập diện tích',
        ]);
        $filename = $request->file('file-image')->getClientOriginalName();
        $product = new Product();
        $product->title = $request->title;
        $product->description = $request->description;
        $product->type = $request->type;
        $product->estate_type_id = $request->estate_type_id;
        $product->city_id = $request->city_id;
        $product->district_id = $request->district_id;
        $product->direction_id = $request->direction_id;
        $product->area = $request->area;
        $product->area_unit_id = 1;
        $product->amount_unit_id = $request->amount_unit_id;
        $product->amount = $request->price;   
        $product->image = $filename;
        $product->user_id = Auth::user()->id;
        $product->status = $request->status;
        $product->lt = $request->latt;
        $product->lg = $request->longt;
        if($request->price>0 && $request->price<300000000){
            $product->price_id = 1;
        }
        if($request->price>=300000000 && $request->price<500000000){
            $product->price_id = 2;
        }
        if($request->price>=500000000 && $request->price<1000000000){
            $product->price_id = 3;
        }
        if($request->price>=1000000000){
            $product->price_id = 4;
        }
        $request->file('file-image')->move(public_path('uploads/duan/'),$filename);
        $product->save();
        $product_id = $product->id;
        if(Input::hasFile('file-images')){
            foreach(Input::file('file-images') as $file){
                $product_img = new ProductImage();
                if(isset($file)){
                    $product_img->filename = $file->getClientOriginalName();
                    $product_img->product_id = $product_id;
                    $file->move(public_path('uploads/duan/'),$file->getClientOriginalName());
                    $product_img->save();
                }
            }
        }
        Session::flash('message', 'Tạo mới tin thành công');

        return redirect()->route('product.index');
    }
    public function productUpdate(Request $request){
        $this->validate($request,[
            'type' => 'required',
            'estate_type_id' => 'required',
            'district_id' => 'required',
            'title' => 'required',
            'price' => 'required|numeric',
            'amount_unit_id' => 'required',
            'area' => 'required|numeric',
        ],
        [            
            'estate_type_id.required' => 'Bạn chưa chọn loại bất động sản',
            'district_id.required' => 'Bạn chưa chọn quận',
            'title.required' => 'Bạn chưa nhập tiêu đề',
            'price.required' => 'Bạn chưa nhập giá',
            'price.numeric' => 'Bạn nhập giá không hợp lệ',
            'amount_unit_id.required' => 'Bạn chưa chọn đơn vị giá',            
            'area.required' => 'Bạn chưa nhập diện tích',
        ]);
        // file-image la caig i ?

        //dd($request->input());
        //dd($request->file('file-image'));
        $filename = null;
        if($request->file('file-image')){
            $filename = $request->file('file-image')->getClientOriginalName();    
        }        
        $product = Product::find($request->id);
        $product->title = $request->title;
        $product->description = $request->description;
        $product->type = $request->type;
        $product->estate_type_id = $request->estate_type_id;
        $product->city_id = $request->city_id;
        $product->district_id = $request->district_id;
        $product->direction_id = $request->direction_id;
        $product->area = $request->area;
        $product->area_unit_id = 1;
        $product->amount_unit_id = $request->amount_unit_id;
        $product->amount = $request->price;   
        if($filename){
            $product->image = $filename;
        }
        $product->status = $request->status;
        $product->lt = $request->latt;
        $product->lg = $request->longt;
        if($request->price>0 && $request->price<300000000){
            $product->price_id = 1;
        }
        if($request->price>=300000000 && $request->price<500000000){
            $product->price_id = 2;
        }
        if($request->price>=500000000 && $request->price<1000000000){
            $product->price_id = 3;
        }
        if($request->price>=1000000000){
            $product->price_id = 4;
        }
        if($filename){
            $request->file('file-image')->move(public_path('uploads/duan/'),$filename);    
        }        
        $product->update();
        $product_id = $product->id;
        
        if(Input::hasFile('file-images')){
            foreach(Input::file('file-images') as $image_id => $file){               
                $product_img = ProductImage::find($image_id);                
                $product_img->filename = $file->getClientOriginalName();
                $file->move(public_path('uploads/duan/'),$file->getClientOriginalName());
                $product_img->update();
                
            }
        }
        if(Input::hasFile('file_images_new')){
            foreach(Input::file('file_images_new') as $file){
                $product_img = new ProductImage();
                if(isset($file)){
                    $product_img->filename = $file->getClientOriginalName();
                    $product_img->product_id = $product_id;
                    $file->move(public_path('uploads/duan/'),$file->getClientOriginalName());
                    $product_img->save();
                }
            }
        }
        Session::flash('message', 'Cập nhật tin thành công');

        return redirect()->route('product.index');
    }
    public function productDestroy($id)
    {
        $model = Product::find($id);        
        $model->delete();
        Session::flash('message', 'Xóa tin thành công');
        return redirect(URL::previous());    
    }
    public function productCheck($id)
    {
        $model = Product::find($id);
        $model->status = 1;       
        $model->update();
        Session::flash('message', 'Duyệt tin thành công');
        return redirect()->route('product.index');    
    }
    //Danh mục
     public function estateIndex(Request $request)
    {
        $type = $request->type ? $request->type : 1;
        $items = EstateType::where('type', $type)->get();
        return view('backend.estate-type.index', compact( 'items', 'type'));
    }
    public function estateDestroy($id)
    {
        $model = EstateType::find($id);
        $model->delete();
        Session::flash('message', 'Xóa danh mục thành công');
        return redirect()->route('estate-type.index');
    }
    public function estateCreate(Request $request)
    {
        $type = $request->type ? $request->type : 1; 
        return view('backend.estate-type.create', compact('type'));
    }
    public function estateStore(Request $request)
    {        
        $this->validate($request,[
            'name' => 'required',           
        ],
        [
            'name.required' => 'Bạn chưa nhập tên danh mục',   
        ]);
        $estate = new EstateType();
        $estate->type = $request->type;
        $estate->name = $request->name;
        $estate->save();
        Session::flash('message', 'Tạo mới danh mục thành công');
        return redirect()->route('estate-type.index');
    }
    public function estateEdit($id)
    {
        $detail = EstateType::find($id);
        return view('backend.estate-type.edit',compact('detail'));
    }
    public function estateUpdate(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',          
        ],
        [
            'name.required' => 'Bạn chưa nhập tên danh mục',         
        ]);
        $model = EstateType::find($request->id);
        $model->type = $request->type;
        $model->name = $request->name;
        $model->update();
        Session::flash('message', 'Cập nhật danh mục thành công');

        return redirect()->route('estate-type.index');
    }
    //End Danh mục
    //Dự Án
    public function projectIndex(Request $request)
    {

        $name = isset($request->name) && $request->name != '' ? $request->name : '';
        $query = LandingProjects::whereRaw('1');
        if( $name != ''){
            $query->where('name', 'LIKE', '%'.$name.'%');
        }
        $items = $query->orderBy('id', 'desc')->paginate(20);
        
        return view('backend.projects.index', compact( 'items' , 'name' ));
    }
    public function projectCreate(Request $request)
    {
        return view('backend.projects.create');
    }
    public function projectStore(Request $request)
    {   
        $this->validate($request,[                        
            'name' => 'required',            
        ],
        [         
            'name.required' => 'Bạn chưa nhập tên dự án',
        ]);
        $projects = new LandingProjects();
        $projects->name = $request->name;
        $projects->description = $request->description;
        if($request->hasfile('file')){
        $file = $request->file;
        $extension = $file->getClientOriginalExtension();
        $filename = time(). '.' . $extension;
        $projects->image = $filename;
        $file->move(public_path('uploads/duan/'), $filename);
    	}else{
    	return $request;
    	$projects->image='';
    	}
        $projects->save();
        Session::flash('message', 'Tạo mới danh mục thành công');
        return redirect()->route('projects.index');
    }  
    public function projectUpdate(Request $request)
    {   
        $this->validate($request,[                        
            'name' => 'required',            
        ],
        [         
            'name.required' => 'Bạn chưa nhập tên dự án',
        ]);
        $model = LandingProjects::find($request->id);
        $model->description = $request->description;
        $model->name = $request->name;
        if($request->hasfile('file')){
        $file = $request->file;
        $extension = $file->getClientOriginalExtension();
        $filename = time(). '.' . $extension;
        $model->image = $filename;
        $file->move(public_path('uploads/duan/'), $filename);
    	}else{
    	//return $request;
    	//$model->image='';
    	}
        $model->update();
        Session::flash('message', 'Tạo mới danh mục thành công');
        return redirect()->route('projects.index');
    }   
    public function projectEdit($id)
    {
        $detail = LandingProjects::find($id);      
        return view('backend.projects.edit', compact('detail'));
    }
    public function projectDestroy($id)
    {
        $model = LandingProjects::find($id);
        $model->delete();
        Session::flash('message', 'Xóa dự án thành công');
        return redirect()->route('projects.index');
    }
    //End Dự Án
    //Loại Bài Viết
     public function article_cate_Index(Request $request)
    {
        $items = ArticlesCate::all();
        return view('backend.articles-cate.index', compact( 'items' ));
    }
    public function article_cate_Create()
    {
        return view('backend.articles-cate.create');
    }
    public function article_cate_Store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ],
        [
            'name.required' => 'Bạn chưa nhập tên danh mục',
        ]);
        $model = new ArticlesCate();
        $model->status = $request->status;
        $model->name = $request->name;
        $model->save();
        Session::flash('message', 'Tạo mới danh mục thành công');
        return redirect()->route('articles-cate.index');
    }
    public function article_cate_Edit($id)
    {
        $detail = ArticlesCate::find($id);
        return view('backend.articles-cate.edit',compact('detail'));
    }
    public function article_cate_Update(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',          
        ],
        [
            'name.required' => 'Bạn chưa nhập tên danh mục',         
        ]);
        $model = ArticlesCate::find($request->id);
        $model->status = $request->status;
        $model->name = $request->name;
        $model->update();
        Session::flash('message', 'Cập nhật danh mục thành công');
        return redirect()->route('articles-cate.index');
    }
    public function article_cate_Destroy($id)
    {
        $model = ArticlesCate::find($id);
        $model->delete();
        Session::flash('message', 'Xóa danh mục thành công');
        return redirect()->route('articles-cate.index');
    }
    //End Loại Bài Viết
    //Bài Viết
    public function article_Index(Request $request)
    {
        $cate_id = isset($request->cate_id) ? $request->cate_id : 1;

        $title = isset($request->title) && $request->title != '' ? $request->title : '';
        
        $query = Articles::whereRaw('1');

        if( $cate_id > 0){
            $query->where('cate_id', $cate_id);
        }
		$query->where('cate_id','<', 999);
        if( $title != ''){
            $query->where('title', 'LIKE', '%'.$title.'%');
        }

        $items = $query->orderBy('id', 'desc')->paginate(20);
        
        $cateArr = ArticlesCate::all();
        
        return view('backend.articles.index', compact( 'items', 'cateArr' , 'title', 'cate_id' ));
    }
    public function article_Create(Request $request)
    {
        $cateArr = ArticlesCate::all();
        
        $cate_id = $request->cate_id;

        return view('backend.articles.create', compact('cateArr', 'cate_id'));
    }
    public function article_Store(Request $request)
    {
        $this->validate($request,[            
            'cate_id' => 'required',            
            'title' => 'required',            
        ],
        [            
            'cate_id.required' => 'Bạn chưa chọn danh mục',            
            'title.required' => 'Bạn chưa nhập tiêu đề',
        ]);
        $articles = new Articles();
        $articles->cate_id = $request->cate_id;
        $articles->title = $request->title;
        $articles->description = $request->description;
        if($request->hasfile('file')){
        $file = $request->file;
        $extension = $file->getClientOriginalExtension();
        $filename = time(). '.' . $extension;
        $articles->image = $filename;
        $file->move(public_path('uploads/duan/'), $filename);
    	}else{
    	return $request;
    	$articles->image='';
    	}
        $articles->save();
        Session::flash('message', 'Tạo mới bài viết thành công');
        return redirect()->route('articles.index');
    }
    public function article_Edit($id)
    {
        $detail = Articles::find($id);
        $cateArr = ArticlesCate::all();    
        return view('backend.articles.edit', compact('detail','cateArr'));
    }
    public function article_Update(Request $request)
    {   
        $this->validate($request,[            
            'cate_id' => 'required',            
            'title' => 'required',            
        ],
        [            
            'cate_id.required' => 'Bạn chưa chọn danh mục',            
            'title.required' => 'Bạn chưa nhập tiêu đề',
        ]);
        $model = Articles::find($request->id);
        $model->cate_id = $request->cate_id;
        $model->description = $request->description;
        $model->title = $request->title;
        if($request->hasfile('file')){
        $file = $request->file;
        $extension = $file->getClientOriginalExtension();
        $filename = time(). '.' . $extension;
        $model->image = $filename;
        $file->move(public_path('uploads/duan/'), $filename);
    	}else{
    	//return $request;
    	//$model->image='';
    	}
        $model->update();
        Session::flash('message', 'Cập nhật bài viết thành công');
        return redirect()->route('articles.index');
    }
    public function article_Destroy($id)
    {
        $model = Articles::find($id);
        $model->delete();
        Session::flash('message', 'Xóa bài viết thành công');
        return redirect()->route('articles.index');
    }
    //End Bài Viết
    //User
    public function acc_Index(Request $request)
    {      
    	$role = $request->role ? $request->role : 1;   
        $query = User::whereRaw('1');
        if( $role > 0){
            $query->where('usertype_id', $role);
        }
		$query->where('usertype_id','<', 999);
        $items = $query->orderBy('id', 'desc')->paginate(20);
        return view('backend.account.index', compact('items', 'role'));
    }
    public function acc_Create()
    {        
        return view('backend.account.create');
    }
    public function acc_Store(Request $request)
    {
       
        $this->validate($request,[
            'email'=> 'required|email|unique:user,email',
            'password'=> 'required|min:5|max:10',
            'name'=> 'required',
            'confirm'=> 'required|same:password',
            'phone'=> 'required|min:10||max:11',
        ],
        [
            'email.required'=> 'Vui lòng nhập email',
            'email.email'=> 'Không đúng định dạng emal',
            'email.unique'=>'Email đã có người sử dụng',
            'name.required'=> 'Vui lòng nhập tên',
            'password.required'=> 'Vui lòng nhập mật khẩu',
            'confirm.same'=> 'Mật khẩu không giống nhau',
            'confirm.required'=> 'Vui lòng không để trống ô nhập lại mật khẩu',
            'password.min'=> 'Mật khẩu có ít nhất 5 ký tự',
            'password.max'=> 'Mật khẩu nhỏ hơn 10 ký tự',
            'phone.min'=> 'Số điện thoại có ít nhất 10 số',
            'phone.required'=> 'Chưa nhập số điện thoại',
            'phone.max'=> 'Số điện thoại có nhiều nhất 11 số',
        ]);
        $user = new User();
        $user->usertype_id = $request->role ;
        $user->name = $request->name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();
        Session::flash('message', 'Tạo mới tài khoản thành công.');

        return redirect()->route('account.index');
    }
    public function acc_Edit($id)
    {
        $detail = User::find($id); 
        return view('backend.account.edit', compact( 'detail'));
    }
     public function acc_Update(Request $request)
    {
       
        $this->validate($request,[
            'name'=> 'required',
            'phone'=> 'required|min:10||max:11',
        ],
        [
            'name.required'=> 'Vui lòng nhập tên',
            'phone.min'=> 'Số điện thoại có ít nhất 10 số',
            'phone.required'=> 'Chưa nhập số điện thoại',
            'phone.max'=> 'Số điện thoại có nhiều nhất 11 số',
        ]);
        $user = User::find($request->id);
        $user->usertype_id = $request->role ;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->update();
        Session::flash('message', 'Cập nhật mới tài khoản thành công.');
        return redirect()->route('account.index');
    }
    public function acc_Destroy($id)
    {
    	$model = User::find($id);
        if($model->usertype_id == 1){
            return redirect()->route('dashboard.index');
        }else{
        	$model->delete();
    	}
    	Session::flash('message', 'Xóa tài khoản thành công');
        return redirect()->route('account.index');
    }
    //End User
    //Custom-link
    public function link_Index(Request $request)
    {
        $query = CustomLink::whereRaw('1');
        $items = $query->orderBy('id', 'asc')->paginate(100);
        return view('backend.custom-link.index', compact( 'items' ));
    }
    public function link_Create(Request $request)
    {
        return view('backend.custom-link.create');
    }
    public function link_Store(Request $request)
    {
        $this->validate($request,[            
            'link_text' => 'required',            
            'link_url' => 'required'            
        ],
        [            
            'link_text.required' => 'Bạn chưa nhập text hiển thị',            
            'link_url.required' => 'Bạn chưa nhập URL'
        ]);   
        $model = new CustomLink();
        $model->link_text = $request->link_text ;
        $model->link_url = $request->link_url;
        $model->save();
        Session::flash('message', 'Tạo mới link thành công');
        return redirect()->route('custom-link.index');
    }
    public function link_Edit($id)
    {
        $detail = CustomLink::find($id);
        return view('backend.custom-link.edit', compact('detail'));
    }
    public function link_Update(Request $request)
    {
        $this->validate($request,[            
            'link_text' => 'required',            
            'link_url' => 'required'            
        ],
        [            
            'link_text.required' => 'Bạn chưa nhập text hiển thị',            
            'link_url.required' => 'Bạn chưa nhập URL'
        ]);       
        $model = CustomLink::find($request->id);
        $model->link_text = $request->link_text ;
        $model->link_url = $request->link_url;
        $model->update();
        Session::flash('message', 'Cập nhật link thành công');        

        return redirect()->route('custom-link.index');
    }
    public function link_Destroy($id)
    {
        $model = CustomLink::find($id);
        $model->delete();
        Session::flash('message', 'Xóa link thành công');
        return redirect()->route('custom-link.index');
    }
    //End Custom Link
    //Contact
    public function contact_Index(Request $request)
    {
        $email = isset($request->email) && $request->email != '' ? $request->email : '';
        $phone = isset($request->phone) && $request->phone != '' ? $request->phone : '';
        $query = Contact::whereRaw('1')->orderBy('id', 'DESC');
        if( $email != ''){
            $query->where('email', 'LIKE', '%'.$email.'%');
        }
        if( $phone != ''){
            $query->where('phone', 'LIKE', '%'.$phone.'%');
        }
        $items = $query->orderBy('id', 'desc')->paginate(20);
        
        return view('backend.contact.index', compact( 'items', 'email', 'phone' ));
    }
    public function contact_Destroy($id)
    {
        $model = Contact::find($id);
        $model->delete();
        Session::flash('message', 'Xóa contact thành công');
        return redirect()->route('contact.index');
    }
    //End Contact
}
