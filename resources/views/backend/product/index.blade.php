@extends('backend.layout')
@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Sản phẩm
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li><a href="{{ route( 'product.index' ) }}">Sản phẩm</a></li>
    <li class="active">Danh sách</li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-12">
      @if(Session::has('message'))
      <p class="alert alert-info" >{{ Session::get('message') }}</p>
      @endif
      <a href="{{ route('product.create') }}" class="btn btn-info btn-sm" style="margin-bottom:5px">Tạo mới</a>
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Bộ lọc</h3>
        </div>
        <div class="panel-body">
          <form class="form-inline" id="searchForm" role="form" method="GET" action="{{ route('product.index') }}">            
            <div class="form-group">              
              <select class="form-control" name="status" id="status">                  
                <option value="" >--Trạng thái duyệt--</option>
                  <option value="0" {{ $status == 0 ? "selected" : "" }}>Chưa duyệt</option>
                  <option value="1" {{ $status == 1 ? "selected" : "" }}>Đã duyệt</option>
              </select>
            </div>
            <div class="form-group">              
              <select class="form-control" name="type" id="type">
                  <option value="">--Loại--</option>
                  <option value="1" {{ $type == 1 ? "selected" : "" }}>Bán</option>
                  <option value="2" {{ $type == 2 ? "selected" : "" }}>Cho thuê</option>
              </select>
            </div>
            
              
              <div class="form-group">
              <select class="form-control" name="estate_type_id" id="estate_type_id" style="width:150px;">
                <option value="">--Danh mục--</option>
                @foreach( $estateTypeArr as $value )
                  <option value="{{ $value->id }}"
                  {{ $value->id == $estate_type_id ? "selected" : "" }}                          

                  >{{ $value->name }}</option>
                  @endforeach
              </select>
            </div>
            <div class="form-group">              
              <select class="form-control" name="district_id" id="district_id">
                <option value="">--Quận--</option>
                  @foreach( $districtList as $value )
                    <option value="{{ $value->id }}"
                    {{ $value->id == $district_id ? "selected" : "" }}                        

                    >{{ $value->name }}</option>
                    @endforeach
              </select>
            </div>
            
            <div class="form-group">              
              <input type="text" placeholder="Tiêu đề" class="form-control" name="name" value="{{ $name }}" style="width:140px">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Lọc</button>
          </form>         
        </div>
      </div>
      
      <div class="box">

        <div class="box-header with-border">
          <h3 class="box-title">Danh sách ( {{count($items)}} sản phẩm )</h3>
        </div>
        
        <!-- /.box-header -->
        <div class="box-body">
          <div style="text-align:center">
           
          </div>  
          
          <form method="post" action="" >
            {{ csrf_field() }} 
            <input type="hidden" name="estate_type_id" value="">
            <input type="hidden" name="type" value="">
            <input type="hidden" name="is_hot" value="1">
          

            <table class="table table-bordered" id="table-list-data">
              <tr>
                <th style="width: 1%">#</th>
                <th style="width: 1%;white-space:nowrap">Mã tin</th>
                <th width="100px">Hình ảnh</th>
                <th style="text-align:left">Thông tin sản phẩm</th>
                <th>Người đăng</th>
                <th width="120px">DUYỆT</th>                              
                <th width="1%;white-space:nowrap">Thao tác</th>
              </tr>
              <tbody>
              @if( count($items) > 0 )
                <?php $i = 0; ?>
                @foreach( $items as $item )
                  <?php $i ++; 

                  ?>
                <tr id="row-{{ $item->id }}">
                  <td><span class="order">{{ $i }}</span></td>
                  <td style="text-align:center">{{ $item->id }}</td>
                  
                  <td>
                    <img class="img-thumbnail lazy" width="80" src="{!!asset('uploads/duan/'.$item->image)!!}" alt="Nổi bật" title="Nổi bật" />
                  </td>
                  <td>                  
                    <a style="color:#444 ;font-weight:bold" href="">{{ $item->title }}</a> 
                    
                  <img class="img-thumbnail" src="{{ URL::asset('backend/dist/img/star.png')}}" alt="Nổi bật" title="Nổi bật" />
                   <br />
                    <strong style="color:#337ab7;font-style:italic"> {{ Helper::getName($item->estate_type_id, 'estate_type') }}</strong>
                    <p>
                      @if($item->district_id > 0)
                      {{ Helper::getName($item->district_id, 'district') }},&nbsp;
                      @endif
                      @if($item->city_id > 0)
                      {{ Helper::getName($item->city_id, 'city') }}
                      @endif

                    </p>
                   <p style="margin-top:10px">
                      
                      <b style="color:red">                  
                      {{ ($item->amount) }} {{ Helper::getName($item->amount_unit_id, 'unit') }}
                     </b>                    
                    </p>
                    
                  </td>
                  <td>
                    {{ Helper::getName($item->user_id, 'user') }}
                  </td>
                  <td>
                          @if($item->status==1)
                          <span style="color:blue">ĐÃ DUYỆT</span>
                          @else
                          <span style="color:red">CHƯA DUYỆT</span>
                          @endif
                  </td>
                  
                  <td style="white-space:nowrap; text-align:right">
                    <a class="btn btn-default btn-sm" href="{{ route('chi-tiet', [$item->estate_type_id, $item->id]) }}" target="_blank"><i class="fa fa-eye" aria-hidden="true"></i> Xem</a>
                    @if($item->status==0)
                    <a class="btn btn-default btn-sm" href="{{ route( 'product.check', [ 'id' => $item->id ]) }}"><i class="fa fa-eye" aria-hidden="true"></i> Duyệt</a>
                    @else
                    @endif
                    <a href="{{ route( 'product.edit', [ 'id' => $item->id ]) }}" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></a>                 
                   <a onclick="return callDelete('{{ $item->title }}','{{ route( 'product.destroy', [ 'id' => $item->id ]) }}');" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>
                    
                  </td>
                </tr> 
                @endforeach
              @else
              <tr>
                <td colspan="9">Không có dữ liệu.</td>
              </tr>
              @endif

            </tbody>
            </table>
          
          </form>
          
          <div style="text-align:center">
           
          </div>  
        </div>        
      </div>
      <!-- /.box -->     
    </div>
    <!-- /.col -->  
  </div> 
</section>
<!-- /.content -->
</div>
<style type="text/css">
#searchForm div{
  margin-right: 7px;
}
</style>
@stop
@section('javascript_page')
<script type="text/javascript">
function callDelete(name, url){  
  swal({
    title: 'Bạn muốn xóa "' + name +'"?',
    text: "Dữ liệu sẽ không thể phục hồi.",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes'
  }).then(function() {
    location.href= url;
  })
  return flag;
}
$(document).ready(function(){
  $('input.submitForm').click(function(){
    var obj = $(this);
    if(obj.prop('checked') == true){
      obj.val(1);      
    }else{
      obj.val(0);
    } 
    obj.parent().parent().parent().submit(); 
  });
  
  $('#estate_type_id, #type, #district_id, #ward_id, #cart_status, #status').change(function(){    
    $('#searchForm').submit();
  });  
  $('#is_hot').change(function(){
    $('#searchForm').submit();
  });
  $('#table-list-data tbody').sortable({
        placeholder: 'placeholder',
        handle: ".move",
        start: function (event, ui) {
                ui.item.toggleClass("highlight");
        },
        stop: function (event, ui) {
                ui.item.toggleClass("highlight");
        },          
        axis: "y",
        update: function() {
            var rows = $('#table-list-data tbody tr');
            var strOrder = '';
            var strTemp = '';
            for (var i=0; i<rows.length; i++) {
                strTemp = rows[i].id;
                strOrder += strTemp.replace('row-','') + ";";
            }     
            updateOrder("san_pham", strOrder);
        }
    });
});
function updateOrder(table, strOrder){
  $.ajax({
      url: $('#route_update_order').val(),
      type: "POST",
      async: false,
      data: {          
          str_order : strOrder,
          table : table
      },
      success: function(data){
          var countRow = $('#table-list-data tbody tr span.order').length;
          for(var i = 0 ; i < countRow ; i ++ ){
              $('span.order').eq(i).html(i+1);
          }                        
      }
  });
}
</script>
@stop