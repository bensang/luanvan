<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1" @if(Auth::check()) style="margin-left: -170px" @endif>
    <div class="row">
    <div class="col-sm-1" style="padding-top:2px;">
        <a title="Logo" href="{{ route('home') }}"><img style="height: 40px;" src="{!!asset('uploads/images/LOGO BMO.png')!!}" alt=""></a>
    </div>
    <ul class="nav navbar-nav navbar-left col-sm-11">
        <li class="level0 "><a class="" href="{{ route('home') }}">Trang chủ</a></li><!-- END MENU HOME -->    
      
        <li class="level0 "><a class="" href="{{ route('about') }}">Về Nhơn Trạch</a></li><!-- END MENU HOME -->
        
        @foreach($articleCate as $value)
        <li class="level0 "><a href="{{ route('news-list', $value->id) }}">{!! $value->name !!}</a></li>
        @endforeach
        <li class="level0 "><a href="{{ route('du-an') }}">Dự án</a></li>
        <li class="level0 parent" @if(isset($type) && $type == 1) ? "active" : "") @endif>
            <a href="">Cần bán</a>
            <ul class="level0 submenu">
                
                @foreach($banList as $ban)
                <li class="level1"><a href="{{ route('danh-muc', $ban->id ) }}">{!! $ban->name !!}</a>
                
                <ul class="level0 submenu">
                   
                    <li class="level1"><a href=""></a></li>                    
                    
                </ul>
                
                </li>                         
                @endforeach
            </ul>
        </li><!-- END MENU SHOP -->
        <li class="level0 "><a href="">Cần cho thuê</a>
            <ul class="level0 submenu">
                
                @foreach($thueList as $thue)
                <li class="level1"><a href="{{ route('danh-muc', $thue->id ) }}">{!! $thue->name !!}</a></li>
                @endforeach
                <ul class="level0 submenu">
                   
                    <li class="level1"><a href=""></a></li>                    
                   
                </ul>
                
            </ul>
        </li><!-- END MENU BLOG -->
        
        <li class="level0 "><a class="" href="{{route('contact')}}">Liên hệ</a></li>
        <li class="level0 "><a class="" href="{{route('dang-tin')}}">Đăng tin</a></li>
        @if(Auth::check())
        <li class="level0 "><a class="" href="">Chào {{Auth::user()->name}}</a></li>
        <li><a href="{{route('dang-xuat')}}">Đăng xuất</a></li>
        @else
      @endif<!-- END MENU HOME -->
    </ul>
    </div>
</div>
<!-- /.navbar-collapse -->