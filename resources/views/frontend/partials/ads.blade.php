<?php 
$bannerArr = DB::table('banner')->where(['id' => 4, 'status' => 1])->get();
?>
<div id="advLeft" style="display:none">
  <div class="banner_scroll" id="banner_left">
    <div class="item">        
      @foreach($bannerArr as $banner)
      <a id="ban_116" href="" target="_blank" style="width: 100px; display: block;">
          
                  <img src="{!!asset('uploads/duan/'.$banner->image)!!}" alt="">
              
      </a>
      @endforeach
    </div>
  </div>
</div><!-- /AdvLeft -->
<?php 
$bannerArr = DB::table('banner')->where(['id' => 5, 'status' => 1])->get();
?>
<div id="advRight" style="display:none">
  <div class="banner_scroll" id="banner_right">
    <div class="item">
      @foreach($bannerArr as $banner)
      <a id="ban_117" href="" target="_blank" style="width: 100px; display: block;">
           
                  <img src="{!!asset('uploads/duan/'.$banner->image)!!}" alt="">
              
      </a>
      @endforeach
    </div>
  </div>
</div><!-- /Advight -->
