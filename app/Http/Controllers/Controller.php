<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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
use App\Contact;
use App\ProductImage;
use Helper, File, Session, Auth, Hash;
use Mail;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index(Request $request)
    {
    	$hotProduct = Product::where('type', 1)->limit(10)->get();
    	$hotProduct2 = Product::where('type', 2)->limit(10)->get();
    	$tinThiTruong = Articles::where('cate_id', 1)->limit(6)->get()->toArray();
    	$luat = Articles::where('cate_id', 2)->orderBy('id', 'desc')->limit(6)->get()->toArray();
    	$tuvan = Articles::where('cate_id', 3)->orderBy('id', 'desc')->limit(6)->get()->toArray();
    	return view('frontend.home.index', compact('tinThiTruong','luat','tuvan','hotProduct', 'hotProduct2'));
    }
    public function about(){
        return view('frontend.about');
    }
    public function getChild(Request $request){
        $module = $request->mod;
        $id = $request->id;
        $column = $request->col;
        return Helper::getChild($module, $column, $id);
    }
    public function cate(Request $request)
    {
         $productArr = [];
        $id = $request->id;
        $rs = EstateType::where('id', $id)->first();        
        if($rs){//danh muc cha
            $estate_type_id = $rs->id;
            
            $query = Product::where('estate_type_id', $estate_type_id)->where('status',1);              
                $productList  = $query->paginate(10);
                $productArr = $productList->toArray();            
            $type = $rs->type;                                     
            return view('frontend.cate.parent', compact('productList','productArr', 'rs', 'type', 'estate_type_id'));
        }
    }
    public function newsList(Request $request)
    {
        $cate_id = $request->cate_id;
        $cateDetail = ArticlesCate::where('id' , $cate_id)->first();
        $articlesArr = Articles::where('cate_id', $cate_id)->orderBy('id', 'desc')->paginate(10);
        return view('frontend.news.index', compact('articlesArr','cateDetail'));
    }
    public function newsDetail(Request $request)
    { 
        $id = $request->id;
        $cate_id = $request->cate_id;
        $detail = Articles::where( 'id', $id )
                ->select('id', 'title', 'description', 'image', 'cate_id')
                ->first();
        $otherArr = Articles::where('cate_id', $cate_id)->where('id', '<>', $id)->orderBy('id', 'desc')->limit(4)->get(); 
        if( $detail ){         
            $cateDetail = ArticlesCate::find($detail->cate_id);          
            return view('frontend.news.news-detail', compact('detail', 'cateDetail', 'otherArr'));
        }else{
            return view('erros.404');
        }
    }
    public function duan(Request $request)
    {   
        $projectList = LandingProjects::orderBy('id', 'desc')->get();
        return view('frontend.duan.index', compact('projectList'));
    }
    public function detail(Request $request){

        $id = $request->id;        
        $detail = LandingProjects::where('id', $id)->first();
        return view('frontend.duan.detail', compact('detail'));
    }
    public function chitiet(Request $request)
    {   
        $spThuocTinhArr = $productArr = [];
        $id = $request->id;
        $id_cate = $request->id_cate;
        $detail = Product::where('estate_type_id', $id_cate)->where('id', $id)->where('estate_type_id', '>', 0)->first();
        if(!$detail){
            return redirect()->route('home');
        }
        $otherList = Product::where('id', '<>', $detail->id)
                    ->where('type', $detail->type)
                    ->where('estate_type_id', $detail->estate_type_id)
                    ->limit(6)->get();
        $rsLoai = EstateType::find( $detail->estate_type_id );
        $district_id = $detail->district_id;
        $type = $detail->type;
        $estate_type_id = $detail->estate_type_id;
        $street_id = $detail->street_id;
        $district_id = $detail->district_id;
        $direction_id = $detail->direction_id;
        $city_id = $detail->city_id;
        return view('frontend.product.index', compact('detail', 'rsLoai', 'productArr','otherList', 'type','estate_type_id','street_id','district_id','direction_id','city_id'             
        ));
    }
    public function login()
    {
        return view('frontend.home.login');
    }
    public function postLogin(Request $req)
    {
        $this->validate($req,[
            'password'=> 'required|min:5|max:10',
            'email'=> 'required|email'

        ],
        [
            'email.required'=> 'Vui lòng nhập email',
            'email.email'=> 'Không đúng định dạng emal',
            'password.required'=> 'Nhập lại mật khẩu',
            'password.min'=> 'Mật khẩu có ít nhất 5 ký tự',
            'password.max'=> 'Mật khẩu nhỏ hơn 10 ký tự'
        ]);
        $arr = array('email'=>$req->email,'password'=>$req->password);
        if(Auth::attempt($arr)){
        	$req->session()->put('login',$arr);
            return redirect()->route('home');
        }else return redirect()->back()->with(['thongbao'=>'Đăng nhập thất bại']);
    }
    public function getLogout(Request $req)
    {
        
        $req->session()->put('login',null);
        Auth::logout();        
        return redirect()->route('home');
    }
    public function register()
    {
        return view('frontend.home.register');
    }
    public function postRegister(Request $req)
    {
        $this->validate($req,[
            'email'=> 'required|email|unique:user,email',
            'password'=> 'required|min:5|max:10',
            'name'=> 'required',
            'confirm'=> 'required|same:password',
            'telephone'=> 'required|min:10||max:11',
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
            'telephone.min'=> 'Số điện thoại có ít nhất 10 số',
            'telephone.required'=> 'Chưa nhập số điện thoại',
            'telephone.max'=> 'Số điện thoại có nhiều nhất 11 số',
        ]);
        $user = new User();
        $user->usertype_id = 2;
        $user->name = $req->name;
        $user->password = Hash::make($req->password);
        $user->email = $req->email;
        $user->phone = $req->telephone;
        $user->save();
        return redirect()->route('dang-nhap');
    }
    public function contact(Request $request){        
        return view('frontend.contact.index');
    }
    public function postContact(Request $request){        
        $this->validate($request,[                       
            'email' => 'email|required',
            'name' => 'required',
            'content' => 'required',
            'phone' => 'required'         
        ],
        [            
            'name.required' => 'Bạn chưa nhập họ và tên.',
            'email.required' => 'Bạn chưa nhập email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'phone.required' => 'Bạn chưa nhập số điện thoại.',
            'content.required' => 'Bạn chưa nhập nội dung.'            
        ]);               
        $input = $request->all();
        $contact = new Contact();
        $contact->name = $input["name"];
        $contact->email = $input["email"];
        $contact->phone = $input["phone"];
        $contact->content = $input["content"];
        $contact->save();
        $mailto = $request->email;
        Mail::send('frontend.contact.email', array('name'=>$input["name"],'email'=>$input["email"], 'content'=>$input['content'], 'phone'=>$input['phone']), function($message) use ($mailto) {
            $message->to($mailto)->subject('Khách hàng liên hệ!');
        });
        Session::flash('message', 'Gửi liên hệ thành công.');
        return redirect()->route('contact');
    }
    public function dangtin(Request $request)
    {
        if(Auth::check()){
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
        	return view('frontend.product.dangtin', compact('estateTypeArr','estate_type_id','type','cityList','districtList', 'city_id','district_id','priceUnitList','directionArr','type'));
        }
        return redirect()->route('dang-nhap');
    }
    public function store(Request $request)
    {
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
        $product->status = 0;
        $product->lt = $request->longt;
        $product->lg = $request->latt;
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

        return redirect()->route('dang-tin');
    }
    public function search(Request $request)
    {
        $productArr = [];
        $city_id = $request->city_id;
        $estate_type_id = $request->estate_type_id;
        $type = $request->type;
        $district_id = $request->district_id;
        $price_id = $request->price_id;
        $area_id = $request->area_id;
        $query = Product::where('estate_type_id', $estate_type_id)->where('status', 1)->where('type', $type);
        if($city_id){
            $query->where('city_id', $city_id);
        }
        if($district_id){
            $query->where('district_id', $district_id);
        }
        if($price_id){
            $query->where('price_id', $price_id);
        }
        if($area_id){
            $query->where('area_id', $area_id);
        }
        $productList  = $query->paginate(10);
        $productArr = $productList->toArray();
            
        return view('frontend.product.search', compact('productList','productArr','estate_type_id','district_id','area_id','price_id','city_id','type'));
    }
}
