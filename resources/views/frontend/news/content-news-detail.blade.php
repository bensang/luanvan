@include('frontend.partials.meta')
@section('content')
<section class="col-sm-8 col-xs-12 block-sitemain">
<article class="block-breadcrumb-page">
    <ul class="breadcrumb"> 
        <li><a href="{{ route('home') }}" title="Trở về trang chủ">Trang chủ</a></li>  
        <li>
            <a href="">{{ $cateDetail->name }}</a>
        </li>    
        <li class="active">{{ $detail->title }}</li>
    </ul>
</article>

    <article class="block block-cate-news-detail block-news-new-detail">
        <h1>{{ $detail->title }}</h1>
        <div class="nd-time"></div>
        <!--<div class="block-news-new-related">
            <p>Cùng chủ đề : <b><a href="#" title="">Thị trường BDS 2017</a></b></p>
            <ul>
                <li><a href="#" title="">Cần có “hàng rào” pháp lý để sàng lọc dự án condotel</a></li>
                <li><a href="#" title="">Nguy cơ “mất cả chì lẫn chài” vì ăn theo hạ tầng</a></li>
                <li><a href="#" title="">Bất động sản giá rẻ trở thành "vùng trũng" hút dòng tiền đầu tư mạnh mẽ</a></li>
            </ul>
        </div><!-- /block-news-new-related -->
        <h2></h2>
        <div class="block-news-new-content">
            <?php echo preg_replace('/(\<img[^>]+)(style\=\"[^\"]+\")([^>]+)(>)/', '${1}${3}${4}', $detail->description);  ?>
        </div><!-- /block-news-new-content -->
        
    </article><!-- /block-news-new-detail -->
    
    <article class="block block-all-news-new">
        <div class="block-title block-title-common">
            <h3><span class="icon-tile"><i class="fa fa-th-list"></i></span> Các tin mới nhất</h3>
        </div>
        <div class="block-contents">
            <div class="all-news-new-list">
                <div class="row">
                    
                    @foreach( $otherArr as $articles)
                    <div class="col-sm-6 col-xs-12">
                        <div class="all-news-new-item clearfix">
                            <div class="all-news-new-img">
                                <a href="{{ route('news-detail', ['cate_id' => $articles->cate_id, 'id' => $articles->id]) }}" title="">
                                    <img  src="{!!asset('uploads/duan/'.$articles->image)!!}" style="height:80px !important; width:120px !important; "> 
                                </a>
                            </div>
                            <div class="all-news-new-info" style="height:77px !important">
                                <a href="{{ route('news-detail', ['cate_id' => $articles->cate_id, 'id' => $articles->id]) }}" title="">
                                    {!! $articles->title !!}
                                </a>
                            </div>
                        </div>
                    </div><!-- /col-sm-6 col-xs-12 --> 
                    @endforeach
                    
                </div>                
            </div>
        </div>
    </article><!-- /block-news-with-region -->

</section><!-- /block-site-left -->

@endsection