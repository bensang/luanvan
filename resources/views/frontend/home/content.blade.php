@section('content')
<section class="col-sm-8 col-xs-12 block-sitemain">
  <article class="block block-news-default row">
    
    <div class="block-news-default-left">
    @if(isset($tinThiTruong[0]))
      <div class="col-sm-7 col-xs-12">
        <div class="block-news-default-item">
          <div class="block-thumb">
            <a href="" title="">
              <img src="{!!asset('uploads/duan/'.$tinThiTruong[0]['image'])!!}" alt="">
            </a>
          </div>
          <h2 class="block-title">
                  <a href="{{ route('news-detail', ['cate_id' => $tinThiTruong[0]['cate_id'], 'id' => $tinThiTruong[0]['id']]) }}" title="">{!! $tinThiTruong[0]['title'] !!}</a>
              </h2>
            </div><!-- /block-news-default-item -->
      </div>
    @endif
    </div><!-- /block-news-default-left -->

    <div class="block-news-default-right">
      <div class="col-sm-5 col-xs-12 block-pl0">
        <ul class="block-news-list-right">
        <?php $i =0; ?>
          @foreach($tinThiTruong as $tin)
          <?php $i++; 
          ?>
          @if($i > 1)
          <li><h3><a href="{{ route('news-detail', ['cate_id' => $tin['cate_id'], 'id' => $tin['id']]) }}" title="">{!! $tin['title'] !!}</a></h3></li>
          @endif
          @endforeach
        </ul>
      </div>
    </div><!-- /block-news-default-right -->
  </article><!-- /block-news-default -->

  <article class="block block-news-new clearfix">
    <div class="col-sm-12 col-xs-12">      
        <div class="row">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
              <a href="#trmn1" aria-controls="trmn1" role="tab" data-toggle="tab">BĐS BÁN</a>
            </li>
            <li role="presentation">
              <a href="#trmn2" aria-controls="trmn2" role="tab" data-toggle="tab">BĐS CHO THUÊ</a>
            </li>
          </ul>
          
          <div class="block-contents">
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="trmn1">
                <ul>                  
                  @foreach($hotProduct as $product)
                    @if($product->status==1)
                    <li class="news-new-item">                      
                      <div class="col-sm-4" >
                        <a  href="{{ route('chi-tiet', [$product->estate_type_id, $product->id]) }}"><img  title="" src="{!!asset('uploads/duan/'.$product->image)!!}" alt="" style="width: 182px; height: 125px" > 
                        
                        
                      </div>
                      <div class="col-sm-8" >
                        <h4>
                        <a class="description-title vip1" href="{{ route('chi-tiet', [$product->estate_type_id, $product->id]) }}">
                        <img class="img-hot" src="{{ URL::asset('backend/dist/img/star.png')}}" alt="Nổi bật" title="Nổi bật" />
                        {!! $product->title !!}</a></h4>
                            <div class="description-info">
                              <div class="id-post"><i class="fa fa-rebel" aria-hidden="true"></i> <label>Mã tin<span>:</span></label>{{ $product->id }}</div>
                              <div class="price"><label>Giá<span>:</span></label>{{ $product->amount }} {{ Helper::getName($product->amount_unit_id, 'unit')}}
                              </div>
                                <div class="area"><label>Diện tích<span>:</span></label>{!! $product->area !!} m<sup>2</sup></div>
                                <div class="location"><label>Vị trí<span>:</span></label>{!! Helper::getName($product->district_id, 'district') !!} - {!! Helper::getName($product->city_id, 'city') !!}</div>
                            </div>
                            <span class="date"></span>
                      </div>
                    </li> 
                    @endif   
                 @endforeach 
                </ul>                      
              </div><!-- /home -->
              <div role="tabpanel" class="tab-pane" id="trmn2">
                  <ul>
                   @foreach($hotProduct2 as $product)
                   @if($product->status==1)
                    <li class="news-new-item">                      
                      <div class="col-sm-4">
                        <a  href="{{ route('chi-tiet', [$product->estate_type_id, $product->id]) }}"><img  title="" src="{!!asset('uploads/duan/'.$product->image)!!}" alt="" >
                        </a>
                        
                      </div>
                      <div class="col-sm-8">
                        <h4><a class="description-title vip1" href="{{ route('chi-tiet', [$product->estate_type_id, $product->id]) }}">
                        <img class="img-hot" src="{{ URL::asset('backend/dist/img/star.png')}}" alt="Nổi bật" title="Nổi bật" />
                        {!! $product->title !!}</a></h4>
                            <div class="description-info">
                              <div class="id-post"><i class="fa fa-rebel" aria-hidden="true"></i> <label>Mã tin<span>:</span></label>{!! $product->id !!}</div>
                              <div class="price"><label>Giá<span>:</span></label>{{ $product->amount }} {{ Helper::getName($product->amount_unit_id, 'unit')}}</div>
                                <div class="area"><label>Diện tích<span>:</span></label>{!! $product->area !!} m<sup>2</sup></div>
                                <div class="location"><label>Vị trí<span>:</span></label>{!! Helper::getName($product->district_id, 'district') !!} - {!! Helper::getName($product->city_id, 'city') !!}</div>
                            </div>
                            <span class="date"></span>
                      </div>
                    </li> 
                    @endif   
                 @endforeach
                </ul>        
              </div><!-- /profile -->
            </div>
          </div>
        </div>
    </div>
  </article><!-- /block-news-new -->
  
  <article class="block block-fengshui clearfix">
    <div class="col-sm-12 col-xs-12">
      <div class="row">
        <div class="block-title block-title-common">          
          <h3><span class="icon-tile2"><img src="{!!asset('uploads/images/icon-tvl.png')!!}" alt="Hỗ trợ pháp lý"></span> Hỗ trợ pháp lý</h3>
        </div>
        <div class="block-contents">
          <div class="news-fengshui clearfix">
              @if(isset($luat[0]))
              <div class="fengshui-news-hot">
              <a href="{{ route('news-detail', ['cate_id' => $luat[0]['cate_id'], 'id' => $luat[0]['id']]) }}" title="">
                <img src="{!!asset('uploads/duan/'.$luat[0]['image'])!!}" alt="">
              </a>    
                    
                    <h4><a href="{{ route('news-detail', ['cate_id' => $luat[0]['cate_id'], 'id' => $luat[0]['id']]) }}" title="{!! $luat[0]['title'] !!}">{!! $luat[0]['title'] !!}</a></h4>
                </div>
               @endif
                <div class="fengshui-news-list">
                  <ul>
                    <?php $i =0; ?>
                  @foreach($luat as $tin)
                  <?php $i++; 
                  ?>
                  @if($i > 1)
                  <li><a href="{{ route('news-detail', ['cate_id' => $tin['cate_id'], 'id' => $tin['id']]) }}" title="{!! $tin['title'] !!}">{!! $tin['title'] !!}</a></li>
                  @endif
                  @endforeach
                    
                  </ul>
                </div>
          </div>
        </div>
      </div>
    </div>
  </article><!-- /block block-fengshui -->
  <article class="block block-fengshui clearfix">
    <div class="col-sm-12 col-xs-12">
      <div class="row">
        <div class="block-title block-title-common">
          <h3><span class="icon-tile2"><img src="{!!asset('uploads/images/icon-tkkt.png')!!}" alt="Hỗ trợ tài chính"> Hỗ trợ tài chính</h3>
        </div>
        <div class="block-contents">

          <div class="news-fengshui clearfix">
           @if(isset($tuvan[0]))
            <div class="fengshui-news-hot">
                    <a href="{{ route('news-detail', ['cate_id' => $tuvan[0]['cate_id'], 'id' => $tuvan[0]['id']]) }}" title="{!! $tuvan[0]['title'] !!}" title="">
                <img src="{!!asset('uploads/duan/'.$tuvan[0]['image'])!!}" alt="">
              </a>    
                    
                    <h4><a href="{{ route('news-detail', ['cate_id' => $tuvan[0]['cate_id'], 'id' => $tuvan[0]['id']]) }}" title="{!! $tuvan[0]['title'] !!}">{!! $tuvan[0]['title'] !!}</a></h4>
                </div>
                @endif
                <div class="fengshui-news-list">
                  <ul>
                     <?php $i =0; ?>
                      @foreach($tuvan as $tin)
                      <?php $i++; 
                      ?>
                      @if($i > 1)
                      <li><a href="{{ route('news-detail', ['cate_id' => $tin['cate_id'], 'id' => $tin['id']]) }}" title="{!! $tin['title'] !!}">{!! $tin['title'] !!}</a></li>
                      @endif
                      @endforeach
                  </ul>
                </div>
          </div>
        </div>
      </div>
    </div>
  </article><!-- /block-fengshui -->
  

</section><!-- /block-site-left -->
@endsection