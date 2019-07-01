@section('search')
<section class="block-search">
	<div class="container">
		<div class="block-title block-tab-customize">
			<!-- Nav tabs -->
			<ul class="nav nav-tabs" role="tablist" id="tab-search">
				<li role="presentation" class="active"><a href="javascript:void(0)" data-type="1" >CẦN BÁN</a></li>
				<li role="presentation"><a href="javascript:void(0)" data-type="2" >CHO THUÊ</a></li>
			</ul>
		</div>
		<div class="block-contents">
			<!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="home">
			    	<form action="" method="GET" accept-charset="utf-8" class="search-content-input selectpicker-cus">
			    		<input type="hidden" id="type" value="1" name="type">				    	
				    	<div class="row-select">
							<div class="col-xs-2">
								<div class="form-group">
									<select class="selectpicker form-control" data-live-search="true" name="estate_type_id" id="estate_type_id">
										<option selected="selected" value="">Loại bất động sản</option>
										
										<option data-slug="" value=""></option>
									
									</select>
								</div>
							</div>	
							<div class="col-xs-2">
								<div class="form-group">
									<select class="selectpicker form-control" data-live-search="true" id="city_id" name="city_id">
										<?php 
										$city_id = !isset($city_id) ? 23 : $city_id;
										?>
										<option value="">Tỉnh/TP</option>
										
										<option data-slug="" value="" ></option>
										
									</select>
								</div>
							</div>								
							<div class="col-xs-2">
								<div class="form-group">
									<select class="selectpicker form-control" data-live-search="true" id="district_id" name="district_id">
										<option value="">Quận/Huyện</option>
										<?php 
										$district_id = !isset($district_id) ? 260 : $district_id;
										?>
										
										<option data-slug="" value="" ></option>
										
									</select>
								</div>
							</div>
							
							
							<div class="col-xs-2">
								<div class="form-group">
									<select class="selectpicker form-control" data-live-search="true" name="price_id" id="price_id">
										<option value="">Mức giá</option>
										
										<option  value=""></option>
										
									</select>
								</div>
							</div>
							
						</div>
						<div class="row-select">
							<div class="col-xs-2">
								<div class="form-group">
									<select class="selectpicker form-control" id="area_id" name="area_id" data-live-search="true">
										<option value="">Diện tích</option>
										
										<option value=""></option>
										
									</select>
								</div>
							</div>
							
														
							<div class="col-xs-2 col-button">
								<div class="form-group">
									<button type="button" id="btnSearch" class="btn btn-success btn-search-home"><i class="fa fa-search"></i> Tìm Kiếm</button>
								</div>
							</div>
						</div>
			    	</form>
			    </div>
			    <div role="tabpanel" class="tab-pane" id="profile">
			    	
			    </div>
			  </div>
		</div>
	</div>
</section><!-- /block-search -->
@endsection
@section('javascript_page')
<script type="text/javascript">
	$(document).ready(function(){
		$('#city_id').change(function(){
			obj = $(this);
			
			$.ajax({
				url : '{{ route('get-child') }}',
				data : {
					mod : 'district',
					col : 'city_id',
					id : obj.val()
				},
				type : 'POST',
				dataType : 'html',
				success : function(data){
					$('#district_id').html(data).selectpicker('refresh');					
				}
			});
		});
		
		$('#tab-search li a').click(function(){
			obj = $(this);
			var type = obj.data('type');
			$('#type').val(type);
			$('#tab-search li').removeClass('active');
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
					$('#estate_type_id').html(data).selectpicker('refresh');
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
					$('#price_id').html(data).selectpicker('refresh');
				}
			});
		});
	});

</script>
@endsection