<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ URL::asset('backend/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-opencart"></i> 
          <span>Bất động sản</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li ><a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i> Danh sách</a></li>       
          <li ><a href="{{route('estate-type.index')}}"><i class="fa fa-circle-o"></i> Danh mục</a></li>
          
        </ul>
      </li>
      
      <li>
        <a href="{{route('projects.index')}}">
          <i class="fa fa-pencil-square-o"></i> 
          <span>Dự án (Landing page)</span>         
        </a>       
      </li>  
      <li >
        <a href="{{route('custom-link.index')}}">
          <i class="fa fa-pencil-square-o"></i> 
          <span>Liên kết nổi bật</span>         
        </a>       
      </li>
     
      
      <li class="treeview ">
        <a href="#">
          <i class="fa fa-pencil-square-o"></i> 
          <span>Bài viết</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ route( 'articles.index' ) }}"><i class="fa fa-circle-o"></i> Bài viết</a></li>
        <li ><a href="{{ route('articles-cate.index') }}"><i class="fa fa-circle-o"></i> Danh mục bài viết</a></li>      
           
        </ul>
      </li>
      <li>
        <a href="{{ route('contact.index') }}">
          <i class="fa fa-pencil-square-o"></i> 
          <span>Liên hệ</span>          
        </a>       
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa  fa-gears"></i>
          <span>Cài đặt</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li ><a href="{{route('account.index')}}"><i class="fa fa-circle-o"></i> Users</a></li>          
        </ul>
      </li>
      <!--<li class="header">LABELS</li>
      <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
      <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>-->
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
<style type="text/css">
  .skin-blue .sidebar-menu>li>.treeview-menu{
    padding-left: 15px !important;
  }
</style>