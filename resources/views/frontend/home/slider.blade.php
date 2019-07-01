@section('slider')
<?php
$bannerArr =  DB::table('banner')->where(['status' => 0])->get();
?>
<section class="block-slider-home" id="slider-home">

	<div class="owl-carousel dotsData owl-style2" data-nav="true" data-margin="0" data-items='1' data-autoplayTimeout="700" data-autoplay="true" data-loop="true">
		<?php $i = 0; ?>
		@foreach($bannerArr as $banner)
		 <?php $i++; ?>
		<div class="item-slide" data-dot="{{ $i }}">
			
			<a href="">
			
				<img src="{!!asset('uploads/duan/'.$banner->image)!!}" alt="slide ">
		
			</a>
			
		</div><!-- item-slide1 -->
		@endforeach		
	</div>

</section><!-- /block-slider -->
@endsection