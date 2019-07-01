@extends('frontend.layout') 
  
@section('content')
<section class="col-sm-8 col-xs-12 block-sitemain">
<article class="block-breadcrumb-page">
    <ul class="breadcrumb"> 
        <li><a href="{{ route('home') }}" title="Trở về trang chủ">Trang chủ</a></li>            
        <li class="active">{{ $cateDetail->name }}</li>
    </ul>
</article>
        

    <article class="block block-article-list clearfix">
      <div class="col-sm-12 col-xs-12">
        <div class="row">
          <div class="block-contents">
            <ul class="article-list-news">
              @foreach( $articlesArr as $articles )
              <li class="article-news-item">
                <div class="article-news-item-head">
                  <a id="" href="{{ route('news-detail', ['cate_id' => $articles->cate_id, 'id' => $articles->id]) }}"><img title="{!! $articles->title !!}" src="{!!asset('uploads/duan/'.$articles->image)!!}" alt="{!! $articles->title !!}"></a>
                </div>
                <div class="article-news-item-description">
                  <a href="{{ route('news-detail', ['cate_id' => $articles->cate_id, 'id' => $articles->id]) }}" title="{!! $articles->title !!}">{!! $articles->title !!}</a>
                  <div class="nd-time"> <small></small></div>
                  <p></p>
                </div>
              </li>
              @endforeach
             
            </ul>
            <div style="text-align:center">
            
            </div>
            </nav>
          </div>
        </div>
      </div>
    </article><!-- /block-news-new -->

  </section><!-- /block-site-left -->
@endsection
  @section('javascript_page')
  
@endsection