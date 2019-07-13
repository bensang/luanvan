<!DOCTYPE html>
<!--[if lt IE 7 ]><html dir="ltr" lang="en-US" class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html dir="ltr" lang="en-US" class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en-US" class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en-US" class="no-js ie ie9 lte9"><![endif]-->
<!--[if IE 10 ]><html dir="ltr" lang="en-US" class="no-js ie ie10 lte10"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="vi">
<!--<![endif]-->
<head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K6NPFDM');</script>
<!-- End Google Tag Manager -->
	<title>Batdongsan.com.vn</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    
    <meta name="robots" content="noindex"/>
       
    <meta name="robots" content="index,follow"/>
    
    <meta http-equiv="content-language" content="vi"/>
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
    <link rel="canonical" href=""/>        
    <meta property="og:locale" content="vi_VN" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="batdongsan.com.vn" />
    
    <meta property="og:image" content="" />
    <meta property="og:image:width" content="1010" />
	<meta property="og:image:height" content="668" />

    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="" />
    <meta name="twitter:title" content="" />        
    <meta name="twitter:image" content="" />
	<link rel="icon" href="{{ URL::asset('assets/images/favicon.ico') }}" type="image/x-icon">
	<!-- ===== Style CSS Common ===== -->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/style.css') }}">
	<!-- ===== Responsive CSS ===== -->
    <link href="{{ URL::asset('assets/css/responsive.css') }}" rel="stylesheet">
      <link rel="stylesheet" href="{{ URL::asset('backend/dist/css/sweetalert2.min.css') }}">  
    <link rel="stylesheet" type="text/css" href="{{url('admin/css/stylesheet.css')}}" />
<link rel="stylesheet" type="text/css" href="{{url('admin/css/slideshow.css')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{url('admin/css/colorbox.html')}}" media="screen" />
<link rel="stylesheet" type="text/css" href="{{url('admin/css/carousel.css')}}" media="screen" />
<link rel="stylesheet" href="{{ URL::asset('backend/dist/css/select2.min.css') }}">

    <!-- HTML5 Shim and Respond.js') }} IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js') }} doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<link href='{{ URL::asset('assets/css/animations-ie-fix.css') }}' rel='stylesheet'>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js') }}"></script>
		<script src="https://oss.maxcdn.com/libs/respond.{{ URL::asset('assets/js/1.4.2/respond.min.js') }}"></script>
	<![endif]-->
	<style type="text/css">
		.bootstrap-select>.dropdown-toggle.bs-placeholder, .bootstrap-select>.dropdown-toggle.bs-placeholder:active, .bootstrap-select>.dropdown-toggle.bs-placeholder:focus, .bootstrap-select>.dropdown-toggle.bs-placeholder:hover{
		color:#444 !important;
	}
		.upload-btn-wrapper1 {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn1 {
  border: 2px solid gray;
  color: gray;
  background-color: white;
  padding: 8px 20px;
  border-radius: 8px;
  font-size: 20px;
  font-weight: bold;
}

.upload-btn-wrapper1 input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
	</style>
	

</head>

<body >	

	<nav id="mainNav" class="navbar navbar-default navbar-custom fix-header">
        <div class="container" id="main-menu">
        	<!-- Brand and toggle get grouped for better mobile display -->
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	              <span class="sr-only">Toggle navigation</span><i class="fa fa-bars"></i>
	            </button>
			</div>

			@include('frontend.partials.home-menu')
        </div>
	</nav><!-- /navigation -->
	
	@yield('slider')
	
	
	

	<section class="main" id="site-main">
		<section class="container">
			<section class="row">
				
				@yield('content')
				
				<section class="col-sm-4 col-xs-12 block-sitebar">
					
					<article class="block block-box-search">
						<div class="block-title">
						<?php $type = isset($type) ? $type : 1 ; ?>
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="{{ (isset($type) && $type == 1) ? "active" : "" }}"><a href="" data-type="1" aria-controls="bdsb" role="tab" data-toggle="tab">CẦN BÁN</a></li>
    							<li role="presentation" class="{{ (isset($type) && $type == 2) ? "active" : "" }}"><a href="" data-type="2" aria-controls="bdsct" role="tab" data-toggle="tab">CHO THUÊ</a></li>
							</ul>
						</div>
						<div class="block-contents">
						 	<!-- Tab panes -->
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="bdsb">

									<form action="{{ route('search') }}" method="GET" accept-charset="utf-8" class="search-content-input selectpicker-cus block-hover-selectpicker" id="formSearch">
										
								    	<input type="hidden" name="type" id="type" value="{{ isset($type) ? $type : 1 }}">
								    	<div class="row-select">
											<div class="form-group">
												<select class="form-control" data-live-search="true" name="estate_type_id" id="estate_type_id">
													<option value="">Loại bất động sản</option>
													@foreach($banList as $ban)
													<option data-slug="" @if(isset($estate_type_id) && $estate_type_id == $ban->id) selected @endif  class="option-lv1" value="{{ $ban->id }}">{{ $ban->name }}</option>
													@endforeach
												</select>
											</div>	
											<div class="form-group">
												<select class="form-control" data-live-search="true" id="city_id" name="city_id">
													<option value="">Tỉnh/TP</option>
													@foreach($cityList as $city)
													<option data-slug="" value="{{ $city->id }}" @if(isset($city_id) && $city_id == $city->id) selected @endif>{!! $city->name !!}</option>
													@endforeach
												</select>
											</div>										
											<div class="form-group">
												<select class="form-control" data-live-search="true" id="district_id" name="district_id">
													<option value="">Quận/Huyện</option>
													@foreach($districtList as $district)
													<option data-slug="" @if(isset($district_id) && $district_id == $district->id) selected @endif  value="{{ $district->id }}">{{ $district->name }}</option>
													@endforeach
												</select>
											</div>
											
											<div class="form-group">
												<select class="form-control" data-live-search="true" name="price_id" id="price_id">
													<option value="">Mức giá</option>
													@foreach($priceList as $price)
													<option @if(isset($price_id) && $price_id == $price->id) selected @endif value="{{ $price->id }}">{{ $price->name }}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group">
												<select class="form-control" id="area_id" name="area_id" data-live-search="true">
													<option value="">Diện tích</option>
													@foreach($areaList as $area)
													<option @if(isset($area_id) && $area_id == $area->id) selected @endif value="{{ $area->id }}">{{ $area->name }}</option>
													@endforeach
												</select>
											</div>
																						
											<div class="form-group">
												<button type="button" id="btnSearch" class="btn btn-success"><i class="fa fa-search"></i> Tìm Kiếm</button>
											</div>
										</div>
							    	</form>
								</div>								
							</div>
						</div>
					</article><!-- /block-box-search -->	
					
					<!-- /block-news-sidebar -->
					

					<article class="block-sidebar block-news-sidebar">
						<div class="block-title-common">
							<h3><span class="icon-tile"><i class="fa fa-star"></i></span> Tin xem nhiều</h3>
						</div>
						<div class="block-contents">
							<ul class="block-list-sidebar block-icon-title">
								@foreach($tinRandom as $tin)
		                      <li><h4><a href="{{ route('news-detail', ['cate_id' => $tin->cate_id, 'id' => $tin->id]) }}" title="">{{ $tin['title'] }}</a></h4></li>
		                     @endforeach
		                      
								
							</ul>
						</div>
					</article><!-- /block-news-sidebar -->

					<article class="block-sidebar block-news-sidebar">
						<div class="block-title-common">
							<h3><span class="icon-tile"><i class="fa fa-building-o"></i></span> Dự án nổi bật</h3>
						</div>
						<div class="block-contents block-contents2">
							<ul class="block-list-sidebar block-slide-sidebar">
								<div class="bxslider">
								@foreach($landingList as $value)
									<div class="large-item">
		                                <a href="{{ route('detail-project', ['id' => $value->id]) }}" title=""><img src="{!!asset('uploads/duan/'.$value->image)!!}" alt="" style="width: 308px; height: 231px" /></a>
		                                <h4><a href="{{ route('detail-project', ['id' => $value->id]) }}" title="{!! $value->name !!}">{!! $value->name !!}</a></h4>
		                                <p></p>
		                            </div>
		                        @endforeach   
								</div>
								<div id="bx-pager" class="bx-thumbnail">
									
									<div class="item">
										<div class="item-child">
				                            <a data-slide-index="0" class="slide_title" onclick="location.href=''" href="" title=""><img class="avatar" src="" alt="" /></a>
				                            <div class="slide_info">
				                                <a  onclick="location.href=''" href="" title=""></a>
				                                <p></p>
				                            </div>
			                            </div>
			                        </div>
			                        			                       
			                        
								</div>
							</ul>
						</div>
					</article><!-- /block-news-sidebar -->

					<article class="block-sidebar block-news-sidebar">
						<div class="block-title-common">
							<h3><span class="icon-tile"><i class="fa fa-th-list"></i></span> Liên kết nổi bật</h3>
						</div>
						<div class="block-contents">
							<ul class="block-list-sidebar block-icon1-title">
								@foreach($customLink as $link)
								<li><h4><a href="{{ $link->link_url }}" title="{{ $link->link_text }}">{{ $link->link_text }}</a></h4></li>
								@endforeach
							</ul>							
						</div>
					</article><!-- /block-news-sidebar -->
				</section><!-- /block-site-right -->
				
			</section>
		</section>
		<section class="block block-get-news">
			<div class="container">
				<div class="block-contents">
					
						<input type="text" name="txtNewsletter" id="txtNewsletter" value="" placeholder="Nhập địa chỉ email">
						<button type="button" id="btnNewsletter" class="btnConfirm">Đăng ký</button>
					
				</div>
			</div>
		</section><!-- /block-get-news -->
	</section><!-- /main -->

	

	@include('frontend.home.footer')
	
	@include('frontend.partials.ads')	
	
	 <div class="ppocta-ft-fix">
	<div id="messengerButton"> <a href="https://m.me/nhontrachdatnen/" target="_blank" onclick="_gaq.push(['_trackEvent', 'Call To Action', 'Messenger Button', 'Mobile']);"><i></i></a></div>
	<div id="zaloButton"> <a href="http://zalo.me/3654926898419817547" target="_blank" onclick="_gaq.push(['_trackEvent', 'Call To Action', 'Zalo Button', 'Mobile']);"><i></i></a></div>
	<div id="callNowButton"> <a href="tel:02871000222" onclick="_gaq.push(['_trackEvent', 'Call To Action', 'Call Button', 'Mobile']);"><i></i></a></div>
</div><!-- /.block-call -->
	<a id="return-to-top" class="td-scroll-up" href="javascript:void(0)">
  		<i class="fa fa-angle-up" aria-hidden="true"></i>
	</a>
	<!-- RETURN TO TOP -->
	<input type="hidden" id="route-register-newsletter" value="">
	<!-- ===== JS ===== -->
	<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
	<!-- JS Bootstrap -->
	<script src="{{ URL::asset('assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
	<!-- ===== JS Bxslider ===== -->
	<script src="{{ URL::asset('assets/vendor/bxslider/jquery.bxslider.min.js') }}"></script>
	<!-- ===== JS Bxslider ===== -->
	<script src="{{ URL::asset('assets/vendor/owl-carousel/owl.carousel.min.js') }}"></script>
	<!-- JS Sticky -->
	<script src="{{ URL::asset('assets/vendor/sticky/jquery.sticky.js') }}"></script>
	<!-- ===== JS Bootstrap Select ===== -->
	<script src="{{ URL::asset('assets/vendor/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
	<!-- Js Common -->
	<script src="{{ URL::asset('backend/dist/js/sweetalert2.min.js') }}"></script>
	<script src="{{ URL::asset('assets/js/common.js') }}"></script>
	<script src="{{ URL::asset('backend/dist/js/select2.min.js') }}"></script>
 <script src="{{ URL::asset('backend/dist/js/ckeditor/ckeditor.js') }}"></script>
	<script> 
	if($('#editor1').length == 1){ // kiem tra ton tai moi gan editor 
		CKEDITOR.replace('editor1');
	}
	 </script>
	<script type='text/javascript'>
    var checkCtrl = false;
	$('*').keydown(function(e) {
        if (e.keyCode == '17') {
            checkCtrl = false;
        }
    }).keyup(function(ev) {
        if (ev.keyCode == '17') {
            checkCtrl = false;
        }
    }).keydown(function(event) {
        if (checkCtrl) {
            if (event.keyCode == '85') {
                return false;
            }
        }
    })
</script>
	<script type="text/javascript">
		
		$(document).ready(function(){
			$.ajaxSetup({
		        headers: {
		          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		        }
		    });		    
		    $('#city_id').change(function() {
		        var city_id = $(this).val();
		        getDistrict(city_id);
		      });
		    @if(isset($city_id) && $city_id > 0)
		    var city_id = {{ $city_id }};
		    $('#city_id').val(city_id);
		    $.ajax({
					url : '{{ route('get-child') }}',
					data : {
						mod : 'district',
						col : 'city_id',
						id : city_id
					},
					type : 'POST',
					dataType : 'html',
					success : function(data){
						$('#district_id').html(data)url : '{{ route('get-child') }}';
						@if(isset($district_id) && $district_id > 0)
						$('#district_id').val({{ $district_id }})url : '{{ route('get-child') }}';
						@endif
					}
				});				
		    @endif
		    
		    $('.bxslider').bxSlider({
				pagerCustom: '#bx-pager',
				pager: true,
				auto: true,
				pause: 4000
			});
			$('#btnSearch').click(function(){		
				if($('#estate_type_id').val() == ''){
					swal({ title: '', text: 'Vui lòng chọn loại bất động sản.', type: 'error' });
					return false;
				}	
				$('#formSearch').submit();
			});
			$('#city_id').change(function(){
				var city_id = $(this).val();
				
			});



			$('.block-box-search li a').click(function(){

				obj = $(this);
				var type = obj.data('type');
				$('#type').val(type);
				$('.block-box-search li').removeClass('active');
				obj.parents('li').addClass('active');

				$.ajax({
					url : '{{ route('get-child') }}',
					data : {
						mod : 'estate_type',
						col : 'type',
						id : type
					},
					type : 'POST',
					dataType : 'html',
					success : function(data){
						$('#estate_type_id').html(data);
						@if(isset($estate_type_id) && $estate_type_id > 0)
						$('#estate_type_id').val({{ $estate_type_id }})url : '{{ route('get-child') }}';
						@endif
					}
				});
				$.ajax({
					url : '{{ route('get-child') }}',
					data : {
						mod : 'price',
						col : 'type',
						id : type
					},
					type : 'POST',
					dataType : 'html',
					success : function(data){
						$('#price_id').html(data);
						@if(isset($price_id) && $price_id > 0)
						$('#price_id').val({{ $price_id }})url : '{{ route('get-child') }}';
						@endif
					}
				});
			});
			@if(isset($type) && $type >0)
				var type = {{ $type }};
				$('#type').val({{ $type }});
				$('.block-box-search li').removeClass('active');
				$('.block-box-search li a[data-type={{$type}}]').parents('li').addClass('active');

				$.ajax({
					url : '{{ route('get-child') }}',
					data : {
						mod : 'estate_type',
						col : 'type',
						id : type
					},
					type : 'POST',
					dataType : 'html',
					success : function(data){
						$('#estate_type_id').html(data);
						@if(isset($estate_type_id) && $estate_type_id > 0)
						$('#estate_type_id').val({{ $estate_type_id }})url : '{{ route('get-child') }}';
						@endif
					}
				});
				$.ajax({
					url : '{{ route('get-child') }}',
					data : {
						mod : 'price',
						col : 'type',
						id : type
					},
					type : 'POST',
					dataType : 'html',
					success : function(data){
						$('#price_id').html(data);
						@if(isset($price_id) && $price_id > 0)
						$('#price_id').val({{ $price_id }})url : '{{ route('get-child') }}';
						@endif
					}
				});
			@endif
		});
		function getDistrict(city_id) {

	        if(!city_id) {
	          $('#district_id').empty();
	          $('#district_id').append('<option value="0">Chọn Quận/Huyện</option>');
	          return;
	        }

	        $.ajax({
	        
	          method: "POST",
	          url : '{{ route('get-child') }}',
				data : {
					mod : 'district',
					col : 'city_id',
					id : city_id
				},
	          success : function(data){          	
	            $('#district_id').empty();
	           
	              $('#district_id').html(data);
	            
	            
	          }
	        });
	      }   
	      $(document).ready(function(){	  
	      	 var topFirst = parseInt($('#mainNav-sticky-wrapper').height()) + parseInt($('#slider-home').height());
	      	$('#advLeft, #advRight').css('top', topFirst + 'px');    	
	      	window.addEventListener("scroll", function (event) {
			    var scroll = this.scrollY;		    
			    var top = parseInt($('#mainNav-sticky-wrapper').height()) + parseInt($('#slider-home').height())-scroll;

			    if(scroll > top){
			    	$('#advLeft, #advRight').css('top', '50px');	
			    }else{
			    	$('#advLeft, #advRight').css('top', top + 'px');
			    }		    
			});
	      });
	</script>
	@yield('javascript_page')

</body>
</html>