@extends('frontend.layout')
@section('content')
<article class="block-breadcrumb-page">
	<ul class="breadcrumb">	
		<li><a href="{{ route('home') }}" title="Trở về trang chủ">Trang chủ</a></li>		
		<li class="active">Tìm kiếm</li>
	</ul>
</article>
<section class="col-sm-8 col-xs-12 block-sitemain">
	<article class="block block-news-new block-news-cate clearfix">
		<div class="block-cate-title"><h1>Kết quả tìm kiếm</h1></div>
		<div class="block-searchresult">			
			<span class="block-countresult">Có <b>{{ number_format(count($productList)) }}</b> bất động sản</span>
		</div>
		<div class="col-sm-12 col-xs-12">
			<div class="row">
				<div class="block-title block-title-catenews">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs nav-tabs-cus" role="tablist">
						<li role="presentation" class="active"><a href="#dsrt" aria-controls="dsrt" role="tab" data-toggle="tab"><i class="fa fa-list"></i> Danh sách kết quả</a></li>
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
									<div class="col-sm-4"><a href="{{ route('chi-tiet', [$product->estate_type_id, $product->id]) }}"><img title="{{ $product->title }}" src="{!!asset('uploads/duan/'.$product->image)!!}" alt="{!! $product->title !!}"></a></div>
									<div class="col-sm-8">
										<h4>
											<a class="description-title vip1" title="{{ $product->title }}" href="{{ route('chi-tiet', [$product->estate_type_id, $product->id]) }}"><i class="vipdb fa fa-star"></i> {!! $product->title !!}
						                  <img src="{{ URL::asset('backend/dist/img/star.png')}}" alt="Nổi bật" title="Nổi bật" />
						                  </a>
											
											</h4>
                						<div class="description-info">
                							<div class="id-post"><i class="fa fa-rebel" aria-hidden="true"></i><label>Mã tin<span>:</span></label>{{ $product->id }}</div>
                							<div class="price"><label>Giá<span>:</span></label>{{ $product->amount }} {!! Helper::getName($product->amount_unit_id, 'unit') !!}</div>
				                            <div class="area"><label>Diện tích<span>:</span></label>{!! $product->area !!} m<sup>2</sup></div>
				                            <div class="location"><label>Vị trí<span>:</span></label>{!! Helper::getName($product->district_id, 'district') !!} - {!! Helper::getName($product->city_id, 'city') !!}</div>
                						</div>
                						
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