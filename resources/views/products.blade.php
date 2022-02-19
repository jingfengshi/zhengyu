@extends("main")

@section("content")


    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/products.css')}}">
    <div style="width: 1920px;margin: auto">
        <div class="nav" style="padding: 20px 240px 0 240px;
    font-family: 'Arial Normal', 'Arial', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 16px;
    color: #484848;">首页 > @if($product->category->type =='protected')<a style="font-size: 16px;"
                                                     href="{{route('cate',['type'=>'protected'])}}">保护人们在危险环境安全工作</a> @else
                <a style="font-size: 16px;color:#7F7F7F" href="{{route('cate',['type'=>'cal'])}}">智慧计量单位</a> @endif > 产品
        </div>

        <div class="top-banner"
             style='background: url({{URL::asset('images/static/pd1.png')}});background-size: 100% 100%;background-repeat: no-repeat;'>
            <div class="top-banner-title font-color-white">{{$product->category->name}}</div>
        </div>
    </div>


    <div style="width: 1920px;margin: auto">
        <div class="product-box">
            @if(!empty($categories))
                <div class="product-box-left-box">
                    @foreach($categories as $category)
                        <div class="product-box-left-item">
                            <div class="inline-block" style="float: left;margin-top: 9px;"><img
                                    src="{{URL::asset('images/static/check.svg')}}" alt=""></div>
                            <div class="inline-block product-box-left-item-nav"
                                 style="width: 200px">
                                <a style="font-size: 1.15rem;
    color: #484848;" href="/cate/{{$category->id}}">{{$category->name}}</a>
                                @foreach($category->products as $p)
                                    <div class="product-box-left-item-nav-child">{{$p->title}}</div>
                                @endforeach

                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

            <div class="product-box-right-box">
                <div class="product-box-right-box-nav">产品 / 声光报警 / AL203 声光多层报警灯</div>
                <div class="product-box-right-box-title">AL203 声光多层报警灯</div>
                <div class="product-box-right-box-banner-box">
                    <div class="product-box-right-box-banner-preview inline-block"><img
                            src="{{URL::asset('uploads/'.$product->image)}}" alt=""></div>
                    <div class="product-box-right-box-banner-list inline-block">
                        @if($product && $product->sub_image)
                            @foreach($product->sub_image as $img)
                                <div class="product-box-right-box-banner-item"><img
                                        src="{{URL::asset('uploads/'.$img)}}">
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="product-box-right-box-rightmost-box inline-block">
                        <div class="product-box-right-box-rightmost-cert"></div>
                        <div class="new-box font-color-white">NEW</div>
                    </div>
                </div>
                <div class="product-box-right-box-tab-list">
                    <div class="product-box-right-box-tab">
                        <div data-index="0" class="product-box-right-box-tab-item inline-block">优势与特点</div>
                        <div data-index="1" class="product-box-right-box-tab-item inline-block">应用范围</div>
                        <div data-index="2" class="product-box-right-box-tab-item inline-block">技术规格</div>
                        <div data-index="3" class="product-box-right-box-tab-item inline-block">外形尺寸</div>
                        <div data-index="4" class="product-box-right-box-tab-item inline-block">资料下载</div>
                        <div data-index="5" class="product-box-right-box-tab-item inline-block">视频介绍</div>
                        <div data-index="6" class="product-box-right-box-tab-item inline-block">现场安装</div>
                    </div>
                    <div class="product-box-right-box-tab-box">
                        <div class="product-box-right-box-tab-box-item"><h5 class="product-box-right-box-tab-box-item-title">优势与特点</h5>{!! $product->description !!}</div>
                        <div class="product-box-right-box-tab-box-item"><h5 class="product-box-right-box-tab-box-item-title">应用范围</h5>{{$product->apply_area}}</div>
                        <div class="product-box-right-box-tab-box-item">
                            @foreach($product->extra3 as $type=>$value)
                                {{$type}}

                                @foreach($value as $k =>$v)
                                    <p>{{$k}}</p>
                                    @foreach($v as $vv)
                                        {{$vv['value']}}
                                    @endforeach
                                @endforeach
                            @endforeach
                        </div>
                        <div class="product-box-right-box-tab-box-item">
                            <h5 class="product-box-right-box-tab-box-item-title">外形尺寸</h5>
                            <img src="{{URL::asset('uploads/'.$product->sharp)}}" alt="">
                        </div>
                        <div class="product-box-right-box-tab-box-item">
                             <h5 class="product-box-right-box-tab-box-item-title">资料下载</h5>
                              <a href="{{URL::asset('uploads').'/'.$product->file}}">
                        </div>
                        <div class="product-box-right-box-tab-box-item">
                        <h5 class="product-box-right-box-tab-box-item-title">视频介绍</h5>
                            <video class="product-box-right-box-tab-box-item-video" src="{{URL::asset('uploads').'/'.$product->video}}" controls="controls">
                                您的浏览器不支持 video 标签。
                            </video>
                        </div>
                        <div class="product-box-right-box-tab-box-item product-box-right-box-tab-box-item-install">
                        <h5 class="product-box-right-box-tab-box-item-title">现场安装</h5>
                            @if($product && $product->install)
                                @foreach($product->install as $install)
                                    <img src="{{URL::asset('uploads/'.$install)}}" alt="">
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="product-box-right-box-recommend-box">
                    <div class="product-box-right-box-recommend-title">推荐产品</div>
                    @if(!empty($recommendProducts))
                        @foreach($recommendProducts as $recommendProduct)
                            <div class="product-box-right-box-recommend-item inline-block">
                                <a href="/product-info/{{$recommendProduct['id']}}">
                                    <img src="{{URL::asset('uploads/'.$recommendProduct['image'])}}" alt="">
                                    <div class="product-box-right-box-recommend-item-title">{{$recommendProduct['title']}}</div>
                                </a>

                            </div>
                        @endforeach
                    @endIf
                </div>
            </div>
        </div>
    </div>

    <div style="clear: both;"></div>

    <script type="text/javascript">

        $(function () {
            // default show first product img
            $('.product-box-right-box-banner-preview').find('img').attr('src', $('.product-box-right-box-banner-item').first().find('img').attr('src'));
            // default show first tab
            $('.product-box-right-box-tab-item').removeClass('tab-item-active');
            $('.product-box-right-box-tab-item').first().addClass('tab-item-active');
            $('.product-box-right-box-tab-box-item').removeClass('tab-box-item-active');
            $('.product-box-right-box-tab-box-item').first().addClass('tab-box-item-active');
        })

        $(document).on('mouseover', '.product-box-left-item', function () {
            $('.product-box-left-item').find('img').attr('src', '{{URL::asset('images/static/check.svg')}}');
            $('.product-box-left-item-child').removeClass('show');
            $(this).find('img').attr('src', '{{URL::asset('images/static/checked.svg')}}');
            $(this).find('.product-box-left-item-child').addClass('show');
        })

        $(document).on('mouseover', '.product-box-right-box-banner-item', function () {
            $('.product-box-right-box-banner-preview').find('img').attr('src', $(this).find('img').attr('src'));
        })

        $(document).on('mouseover', '.product-box-right-box-tab-item', function () {
            $('.product-box-right-box-tab-box-item').removeClass('tab-box-item-active');
            $('.product-box-right-box-tab-box-item').eq($(this).index()).addClass('tab-box-item-active');
        })

        var top_ = $('.product-box-right-box-tab').offset().top-118

        $(document).on('click', '.product-box-right-box-tab-item', function () {
            var index = $(this).attr('data-index')
            $(this).addClass('tab-item-active').siblings().removeClass('tab-item-active')
            $(window).scrollTop($('.product-box-right-box-tab-box-item').eq(index).offset().top - 180)
        })

    </script>

@endsection
