@extends('frontend.layout')
@section('content')
<section class="col-sm-8 col-xs-12 block-sitemain">
<article class="block-breadcrumb-page">
	<ul class="breadcrumb">	
		<li><a href="{{ route('home') }}" title="Trở về trang chủ">Trang chủ</a></li>
		<li>
			@if($rs->type == 1)			
			<a href="">BĐS Bán</a>
			@else
			<a href="">BĐS Cho thuê</a>
			@endif
		</li>
		<li class="active">{{ $rs->name }}</li>
	</ul>
</article>
	<article class="block block-news-new block-news-cate clearfix">
		<div class="block-cate-title"><h1>{!! $rs->name !!} tại Việt Nam</h1></div>
		
		<div class="block-searchresult">
			<h2>Tìm kiếm theo các tiêu chí: <b style="color: #37a344;">{!! $rs->name !!}</b></h2>
			<span class="block-countresult">Có <b>{{ number_format(count($productList)) }}</b> bất động sản</span>
		</div>
		<div class="col-sm-12 col-xs-12">
			<div class="row">
				<div class="block-title block-title-catenews">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-tabs-cus" role="tablist">
						<li role="presentation" class="active"><a href="#dsrt" aria-controls="dsrt" role="tab" data-toggle="tab"><i class="fa fa-list"></i> Danh sách tin rao</a></li>
						
					</ul>
				</div>
				<div class="block-contents">
					<!-- Tab panes -->
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="home">
						@if(!empty( (array) $productList ))
							<ul>
								@foreach( $productList as $product )
								<li class="news-new-item">                      
                      <div class="col-sm-4" >
                        <a  href="{{ route('chi-tiet', [$product->estate_type_id, $product->id]) }}"><img  title="" src="{!!asset('uploads/duan/'.$product->image)!!}" alt="" style="width: 182px; height:125px"> 
                        
                        
                      </div>
                      <div class="col-sm-8" >
                        <h4>
                        <a class="description-title vip1" href="{{ route('chi-tiet', [$product->estate_type_id, $product->id]) }}">
                        <img class="img-hot" src="{{ URL::asset('backend/dist/img/star.png')}}" alt="Nổi bật" title="Nổi bật" />
                        {!! $product->title !!}</a></h4>
                            <div class="description-info">
                              <div class="id-post"><i class="fa fa-rebel" aria-hidden="true"></i> <label>Mã tin<span>:</span></label>{{ $product->id }}</div>
                              <div class="price"><label>Giá<span>:</span></label>{{ $product->amount }} {{ Helper::getName($product->amount_unit_id, 'unit')}}
                              </div>
                                <div class="area"><label>Diện tích<span>:</span></label>{!! $product->area !!} m<sup>2</sup></div>
                                <div class="location"><label>Vị trí<span>:</span></label>{!! Helper::getName($product->district_id, 'district') !!} - {!! Helper::getName($product->city_id, 'city') !!}</div>
                            </div>
                            <span class="date"></span>
                      </div>
                    </li>	
								@endforeach
								
							</ul>
							@endif
							<div style="text-align:center">
				            {{ $productList->links() }}
				            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</article><!-- /block-news-new -->
</section><!-- /block-site-left -->
@endsection