@extends('frontend.landing')
@section('content')
<section class="block-main main"  id="site-main">
<div class="block block-langding" style="padding-top:10px">
<div class="container">
	<article class="block-breadcrumb-page">
		<ul class="breadcrumb">	
			<li><a href="{{ route('home') }}" title="Trở về trang chủ">Trang chủ</a></li>
			<li><a href="{{ route('du-an') }}" title="Dự án">Dự án</a></li>
			<li class="active">{!! $detail->name !!}</li>
		</ul>
	</article>
	<div class="block block-title">		  
		<ul class="nav nav-tabs nav-tabs-langding" id="nav-tabs-langding" role="tablist">
			<li role="presentation" >
				<p class="tabs-item-logo">
					<i class="icon">
						<img src="{!!asset('uploads/duan/'.$detail->image)!!}" alt="{!! $detail->name !!}">
					</i>
				</p>
			</li>
			
			<li role="presentation" >
				<a href="{{ route('detail-project', [$detail->slug]) }}" >
					<i class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 22 20" enable-background="new 0 0 22 20" xml:space="preserve" class="svg replaced-svg">
						<g><g><path fill="#979797" d="M20,0H4.6c-1.1,0-2,0.9-2,2.1v3.5H2c-1.1,0-2,1-2,2.1v10.1C0,19.1,0.9,20,2,20H20c1.1,0,2-1,2-2.1V2.1    C22,0.9,21.1,0,20,0z M2,18.6L2,18.6c-0.4,0-0.7-0.3-0.7-0.7V7.8c0-0.4,0.3-0.7,0.7-0.7h0.6v10.8c0,0.2,0,0.5,0.1,0.7H2z     M20.7,17.9c0,0.4-0.3,0.7-0.7,0.7H4.6c-0.4,0-0.7-0.3-0.7-0.7V2.1c0-0.4,0.3-0.7,0.7-0.7H20c0.4,0,0.7,0.3,0.7,0.7V17.9z M18,7.2    h-2.5v1.6H18V7.2z M15.5,11.5h3.6V9.9h-3.6V11.5z M15.5,14.2h3.1v-1.6h-3.1V14.2z M10,8.1l-2.9,3.1c0,0-0.1,0.1-0.1,0.1v2.5    c0,0.3,0.2,0.5,0.4,0.5h1.6v-2.6h2v2.6h1.6c0.2,0,0.4-0.2,0.4-0.5v-2.4c0,0-0.1-0.1-0.1-0.1L10,8.1z M10.6,6.4L10,5.8L9.4,6.4    l-3.7,3.9c-0.2,0.2-0.2,0.5,0,0.7c0.1,0.1,0.2,0.1,0.3,0.1c0.1,0,0.2,0,0.3-0.1L10,7.1l3.7,3.9c0.1,0.1,0.2,0.1,0.3,0.1    c0.1,0,0.2,0,0.3-0.1c0.2-0.2,0.2-0.5,0-0.7L10.6,6.4z"></path></g></g></svg>
					</i>
					Giới Thiệu
				</a>
			
			</li>
			
			
		</ul>
	</div><!-- /block-title -->

	<div class="block-content" style="padding-bottom:50px">
		<div class="tab-content">
			
			<div role="tabpanel" class="tab-pane fade in active" id="About">
				
				<div class="page-block">
					<h2 class="page-title"></h2>
					<div class="page-content editor-content">
						<?php 
						echo preg_replace('/(\<img[^>]+)(style\=\"[^\"]+\")([^>]+)(>)/', '${1}${3}${4}', $detail->description); 
						?>
					</div>
				</div>
				
			</div><!-- /tab-pane -->
			
			
			
			
		</div><!-- tab-content -->
	</div><!-- /block-content -->
</div>
</div><!-- /block-langding -->
</section><!-- /block-main -->
@endsection
@include('frontend.home.slider')
@section('javascript_page')
<script type="text/javascript">
	$(document).ready(function(){
		$('#btnSend').click(function(){
			$(this).attr('disabled', 'disabled').html('<i class="fa fa-spin fa-spinner"></i>');
			$(this).parents('form').submit();
		});
			$('ul.tabssssss li.tab-link').click(function(){
				var tab_id = $(this).attr('data-tab');

				$('ul.tabssssss li.tab-link').removeClass('active');
				$('.tab-contents').removeClass('active');

				$(this).addClass('active');
				$("#"+tab_id).addClass('active');
			});

			$(function(){
				// Determine the div width parent
				var width = document.getElementById('nav-tabs-langding').offsetWidth;
				// Determine the div width parent
				var mainDiv = $('#nav-tabs-langding');
				var childDivCount = mainDiv.find('li').length;
				// Get width for li
				var widthItem = width/childDivCount;
				$('#nav-tabs-langding li').css("width", widthItem);
				$('#nav-tabs-langding li').css("width", widthItem);
		        if ($('#nav-tabs-langding').hasClass("fixed")) {
		            $('#nav-tabs-langding li').css("width", widthItem);
		        }

		        // Determine the div width parent
				var width2 = document.getElementById('nav-tabs-langding2').offsetWidth;
				// Determine the div width parent
				var mainDiv2 = $('#nav-tabs-langding2');
				var childDivCount2 = mainDiv2.find('li').length;
				// Get width for li
				var widthItem2 = width/childDivCount2;
				$('#nav-tabs-langding2 li').css("width", widthItem);
				$('#nav-tabs-langding2 li').css("width", widthItem);
		        if ($('#nav-tabs-langding2').hasClass("fixed")) {
		            $('#nav-tabs-langding2 li').css("width", widthItem);
		        }

		   });
		});

		$(window, document, undefined).ready(function() {
			$('input , textarea').blur(function() {
			var $this = $(this);
			if ($this.val())
		  		$this.addClass('used');
			else
		  		$this.removeClass('used');
			});
			var $ripples = $('.ripples');
			$ripples.on('click.Ripples', function(e) {
				var $this = $(this);
				var $offset = $this.parent().offset();
				var $circle = $this.find('.ripplesCircle');

				var x = e.pageX - $offset.left;
				var y = e.pageY - $offset.top;

				$circle.css({
					top: y + 'px',
					left: x + 'px'
				});
				$this.addClass('is-active');
			});
			$ripples.on('animationend webkitAnimationEnd mozAnimationEnd oanimationend MSAnimationEnd', function(e) {
				$(this).removeClass('is-active');
			});
		});		
</script>
@endsection