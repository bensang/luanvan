@extends('frontend.layout')
@section('content')
<section class="class=col-sm-8 col-xs-8 block-sitemain">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Đăng tin   
    </h1>
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default btn-sm" href="{{ route('home') }}" style="margin-bottom:5px">Quay lại</a>    
    <form role="form" method="POST" action="{{ route('product.store') }}" id="dataForm" enctype="multipart/form-data">
    <div class="row">
      <!-- left column -->      
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <!-- /.box-header -->               
            {!! csrf_field() !!}          
            <div class="box-body">
                          
                @if(Session::has('message'))
                <p class="alert alert-info" >{{ Session::get('message') }}</p>
                @endif
                @if (count($errors) > 0)
                  <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div>
                @endif
                <div>

                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Thông tin chi tiết</a></li>
                    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Hình ảnh</a></li>                    
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="home">
                      <div class="form-group col-md-6">
                          <label for="email">Loại <span class="red-star">*</span></label>
                            <select class="form-control" name="type" id="type">
                                <option value="1" {{ old('type', $type) == 1 ? "selected" : "" }} >Bán</option>
                                <option value="2" {{ old('type', $type) == 2 ? "selected" : "" }} >Cho thuê</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="email">Danh mục cha<span class="red-star">*</span></label>
                          <select class="form-control" name="estate_type_id" id="estate_type_id">
                            <option value="">--Chọn--</option>
                            @foreach( $estateTypeArr as $value )
                            <option value="{{ $value->id }}"
                            {{ old('estate_type_id', $estate_type_id) == $value->id ? "selected" : "" }}
                            >{{ $value->name }}</option>
                            @endforeach
                          </select>
                        </div>
                        
                        <div class="form-group col-md-12">
                          <label for="email">Tỉnh/Thành phố <span class="red-star">*</span></label>
                            <select class="form-control" name="city_id" id="city_id1">
                                @foreach( $cityList as $value )
                                <option value="{{ $value->id }}"
                                {{ old('city_id', $city_id) == $value->id ? "selected" : "" }}                           

                                >{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6  pleft-5">
                          <label for="email">Quận <span class="red-star">*</span></label>
                            <select class="form-control" name="district_id" id="district_id1">
                                @foreach( $districtList as $value )
                                <option value="{{ $value->id }}"
                                {{ old('district_id', $district_id) == $value->id ? "selected" : "" }}                           

                                >{{ $value->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group col-md-12" >                  
                          <label>Tên <span class="red-star">*</span></label>
                          <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                        </div>
                        
                        <div class="form-group col-md-6 none-padding" >                  
                            <label>Giá<span class="red-star">*</span></label>
                            <input type="text" class="form-control" name="price" id="price" value="{{ old('price') }}">
                        </div>
                        <div class="form-group col-md-6 none-padding pleft-5" >                  
                            <label>Đơn vị giá<span class="red-star">*</span></label>
                            <select class="form-control" name="amount_unit_id" id="amount_unit_id">
                              <option value="">--Chọn--</option>
                              @foreach( $priceUnitList as $value )
                              <option value="{{ $value->id }}"
                              {{ old('price_unit_id') == $value->id ? "selected" : "" }}                           

                              >{{ $value->name }}</option>
                              @endforeach
                            </select>
                        </div>
                        
                        <div class="form-group col-md-6">
                          <label>Diện tích <span class="red-star">*</span></label>                  
                          <input type="text" class="form-control" name="area" id="area" value="{{ old('area') }}">                        
                        </div>                        
                        
                        <div class="form-group col-md-6">
                          <label>Hướng</label>                  
                          <select class="form-control" name="direction_id" id="direction_id">
                            @if( $directionArr->count() > 0)
                              @foreach( $directionArr as $value )
                              <option value="{{ $value->id }}" {{ old('direction_id') == $value->id  ? "selected" : "" }}>{{ $value->name }}</option>
                              @endforeach
                            @endif
                          </select>                       
                        </div>
                        
                        <div class="form-group form-group col-md-12 none-padding" style="margin-top:10px">
                            <label>Mô tả</label>
                            <textarea class="form-control" rows="4" name="description" id="editor1">{{ old('description') }}</textarea>
                          </div>
                          <input type="hidden" id="editor" value="description">
                          <div class="clearfix"></div>
                        <div class="form-group" style="margin-top:10px;margin-bottom:10px"> 
                          <input id="pac-input" class="controls" type="text" placeholder="Nhập địa chỉ để tìm kiếm">
                          <div id="map-abc"></div>
                      </div>
                        <div class="clearfix"></div>
                    </div><!--end thong tin co ban-->   
                     <div role="tabpanel" class="tab-pane" id="settings">
                        <div class="form-group" style="margin-top:10px;margin-bottom:10px">  
                         
                          <div class="col-md-12" style="text-align:center">                            
                            <div>Ảnh đại diện</div>
                            <div class="upload-btn-wrapper1">
                              <button class="btn1">Upload a file</button>
                              <input type="file" name="file-image" />
                            </div>
                          </div>
                          <div class="col-md-12" style="text-align:center">
                            <div>Ảnh chi tiết</div>
                            @for($i=1;$i<=5;$i++)
                            <input type="file" name="file-images[]" style="margin-left: 200px; margin-bottom: 20px" />
                            @endfor
                          </div>
                          <div style="clear:both"></div>
                        </div>

                     </div><!--end hinh anh-->
                     
                  </div>

                </div>
                  
            </div>

            <div class="box-footer">
              <input type="text" name="longt" id="longt" value="" />
              <input type="text" name="latt" id="latt" value="" />
              <button type="button" class="btn btn-default btn-sm" id="btnLoading" style="display:none"><i class="fa fa-spin fa-spinner"></i></button>
              <button type="submit" class="btn btn-primary btn-sm" id="btnSave">Lưu</button>
              <a class="btn btn-default btn-sm" class="btn btn-primary btn-sm" href="">Hủy</a>
            </div>
            
        </div>
        <!-- /.box -->     

      </div>
      
        <!-- /.box -->     

      </div>
      <!--/.col (left) -->      
    </div>

    </form>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>


<input type="hidden" id="route_upload_tmp_image_multiple" value="">
<input type="hidden" id="route_upload_tmp_image" value="">
<input type="hidden" id="route_get_tien_ich" value="">
</section>
<style type="text/css">
  .nav-tabs>li.active>a{
    color:#FFF !important;
    background-color: #3C8DBC !important;
  }

</style>

    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map-abc {
        height: 400px;
      }
    

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map-abc #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 12px;
        margin-right: 12px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
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
@stop
@section('javascript_page')
<script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      function initAutocomplete() {
        var map = new google.maps.Map(document.getElementById('map-abc'), {
          center: {lat: 10.7860332, lng: 106.6950147},
          zoom: 17,
          mapTypeId: 'roadmap'
        });

        // Create the search box and link it to the UI element.
        var input = document.getElementById('pac-input');
        var searchBox = new google.maps.places.SearchBox(input);
        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

        // Bias the SearchBox results towards current map's viewport.
        map.addListener('bounds_changed', function() {
          searchBox.setBounds(map.getBounds());
           var marker = new google.maps.Marker({
              position: new google.maps.LatLng(10.7860332, 106.6950147),
              draggable:true,
              map: map            
            });
           google.maps.event.addListener(marker,'dragend',function(event) {
                document.getElementById('latt').value = this.position.lat();
                document.getElementById('longt').value = this.position.lng();                
            });
        });

        var markers = [];       
        // Listen for the event fired when the user selects a prediction and retrieve
        // more details for that place.
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }

          // Clear out the old markers.
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];

          // For each place, get the icon, name and location.
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
            document.getElementById('latt').value = place.geometry.location.lat();
            document.getElementById('longt').value = place.geometry.location.lng();
            var icon = {              
              size: new google.maps.Size(128, 128),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(25, 25)
            };

            // Create a marker for each place.
            markers.push(new google.maps.Marker({
              map: map,
              icon: icon,
              title: place.name,
              draggable:true,
              position: place.geometry.location
            }));

            if (place.geometry.viewport) {
              // Only geocodes have viewport.
              bounds.union(place.geometry.viewport);
            } else {
              bounds.extend(place.geometry.location);
            }

             // Clear out the old markers.
          markers.forEach(function(marker) {
            google.maps.event.addListener(marker,'dragend',function(event) {
                document.getElementById('latt').value = this.position.lat();
                document.getElementById('longt').value = this.position.lng();                
            });
          });
            
          });
          map.fitBounds(bounds);
        });
      }
    </script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhxs7FQ3DcyDm8Mt7nCGD05BjUskp_k7w&libraries=places&callback=initAutocomplete"
         async defer></script>
<script type="text/javascript">

$(document).ready(function(){

$('#pac-input').on('keypress', function(e) {
    return e.which !== 13;
});
  $('#btnAddTag').click(function(){
      $('#tagModal').modal('show');
  });
});
$(document).on('click', '.remove-image', function(){
  if( confirm ("Bạn có chắc chắn không ?")){
    $(this).parents('.col-md-3').remove();
  }
});
$(document).on('click', '#btnSaveTagAjax', function(){
    $.ajax({
      url : $('#formAjaxTag').attr('action'),
      data: $('#formAjaxTag').serialize(),
      type : "post", 
      success : function(str_id){          
        $('#btnCloseModalTag').click();
        $.ajax({
          url : "",
          data: { 
            type : 1 ,
            tagSelected : $('#tags').val(),
            str_id : str_id
          },
          type : "get", 
          success : function(data){
              $('#tags').html(data);
              $('#tags').select2('refresh');
              
          }
        });
      }
    });
 }); 
 $('#contentTag #name').change(function(){
       var name = $.trim( $(this).val() );
       if( name != '' && $('#contentTag #slug').val() == ''){
          $.ajax({
            url: $('#route_get_slug').val(),
            type: "POST",
            async: false,      
            data: {
              str : name
            },              
            success: function (response) {
              if( response.str ){                  
                $('#contentTag #slug').val( response.str );
              }                
            },
            error: function(response){                             
                var errors = response.responseJSON;
                for (var key in errors) {
                  
                }
                //$('#btnLoading').hide();
                //$('#btnSave').show();
            }
          });
       }
    });



    $(document).ready(function(){
     
       
      $('#type, #estate_type_id').change(function(){

        var url ="{{ route('dang-tin') }}?type=" + $('#type').val();
        if($('#estate_type_id').val() > 0){
          url += '&estate_type_id=' + $('#estate_type_id').val();
        }
        location.href = url;
      });
      $(".select2").select2();
      $('#dataForm').submit(function(){
        
        $('#btnSave').hide();
        $('#btnLoading').show();
      });
      

      $('#title').change(function(){
         var name = $.trim( $(this).val() );
         if( name != '' && $('#slug').val() == ''){
            $.ajax({
              url: $('#route_get_slug').val(),
              type: "POST",
              async: false,      
              data: {
                str : name
              },              
              success: function (response) {
                if( response.str ){                  
                  $('#slug').val( response.str );
                }                
              },
              error: function(response){                             
                  var errors = response.responseJSON;
                  for (var key in errors) {
                    
                  }
                  //$('#btnLoading').hide();
                  //$('#btnSave').show();
              }
            });
         }
      });
      $('#city_id1').change(function(){

        var city_id = $(this).val();
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
              $('#district_id1').html(data);
            }
          });
      });
 var editor3 = CKEDITOR.replace( 'description',{
          language : 'vi',
          height : 300          
      });
    });
</script>
@stop
