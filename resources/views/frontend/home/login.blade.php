@extends('frontend.layout')
@section('content')
<section class="col-sm-8 col-xs-12 block-sitemain">
<div id="content">
      <!--Breadcrumb Part Start-->
      <!--Breadcrumb Part End-->
      <h1>Đăng nhập</h1>
      <div class="login-content">
        <div class="left">
          <h2>Chưa có tài khoản?</h2>
          <div class="content">
            <p><b>Đăng ký tài khoản</b></p>
            <p>Trở thành thành viên của Nhơn Trạch để hỗ trợ việc mua bán trở nên tiện lợi, nhanh chóng hơn.</p>
            <a class="button" href="{{ route('dk-tai-khoan')}}">Tạo tài khoản</a></div>
        </div>
        <div class="right">
          <h2>Đăng nhập</h2>
          @if(Session::has('thongbao'))
            <h2 style="color: red">{{Session::get('thongbao')}}</h2>
          @endif
          <form enctype="multipart/form-data" method="post" action="{{route('dang-nhap')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            @if(count($errors)>0)
              <h2 style="color: red">
                @foreach($errors->all() as $err)
                  {{$err}}<br>
                @endforeach
              </h2>
            @endif
            <div class="content">
              <b>Email</b><br>
              <input type="text" value="" name="email">
              <br>
              <br>
              <b>Mật khẩu:</b><br>
              <input type="password" value="" name="password">
              <br>
              <input type="submit" class="button" value="Đăng nhập">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
@stop