@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/product.css')}}">

    <div class="product-menu-box hidden">
        <div class="product-menu-box-mask"></div>
        <div class="close-mask">关闭</div>
        <div class="product-menu-item-warp">
            @foreach($cates as $cate)
                <div class="product-menu-item f-left">
                    <div class="product-menu-cate">{{$cate->name}}</div>
                    @foreach($cate->products as $product)
                        <a href="/product/{{$product->id}}">
                            <div class="product-menu-cate-child-product">{{$product->title}}</div>
                        </a>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

    <div class="product-top-title">
        <a href="/about">行业</a>
        <a id="nav_btn" href="javascript:;">产品</a>
        <a href="/cases">企业荣誉</a>
        <a href="/cert">产品认证</a>
        <a href="/connect">联系我们</a>
    </div>

    <div class="product-banner-box">
        <div class="product-banner-box-preview-box f-left"
             style="background: url('{{URL::asset('images/static/about-fengche.png')}}'); background-size: 100% 100%; background-repeat: no-repeat;"></div>
        <div class="product-banner-box-tab-box f-left">
            <div class="banner-box-tab-item" style="background-color: rgba(129, 211, 248, 1);"
                 data-img="{{URL::asset('images/static/banner-fengche.jpeg')}}">风电能源
            </div>
            <div class="banner-box-tab-item-mask hidden">
                <div class="mask-icon f-left"
                     style="background: url('{{URL::asset('images/static/icon-fengche.svg')}}'); background-size: 50% 60%; background-position: center; background-repeat: no-repeat;"></div>
                <div class="mask-text-box f-left">
                    <div class="mask-title">风电能源</div>
                    <div class="mask-desc">赋能风电能源</div>
                </div>
            </div>
            <div class="banner-box-tab-item" style="background-color: rgba(88, 175, 220, 1);"
                 data-img="{{URL::asset('images/static/banner-matou.jpeg')}}">港口码头
            </div>
            <div class="banner-box-tab-item-mask hidden">
                <div class="mask-icon f-left"
                     style="background: url('{{URL::asset('images/static/icon-matou.png')}}'); background-size: 50% 60%; background-position: center; background-repeat: no-repeat;"></div>
                <div class="mask-text-box f-left">
                    <div class="mask-title">港口码头</div>
                    <div class="mask-desc">赋能智慧港口</div>
                </div>
            </div>
            <div class="banner-box-tab-item" style="background-color: rgba(3, 146, 204, 1);"
                 data-img="{{URL::asset('images/static/banner-hangkong.jpeg')}}">航空信号
            </div>
            <div class="banner-box-tab-item-mask hidden">
                <div class="mask-icon f-left"
                     style="background: url('{{URL::asset('images/static/icon-hangkong.svg')}}'); background-size: 50% 60%; background-position: center; background-repeat: no-repeat;"></div>
                <div class="mask-text-box f-left">
                    <div class="mask-title">航空信号</div>
                    <div class="mask-desc">赋能航空信号</div>
                </div>
            </div>
            <div class="banner-box-tab-item" style="background-color: rgba(1, 125, 197, 1);"
                 data-img="{{URL::asset('images/static/banner-jixie.jpeg')}}">工程机械
            </div>
            <div class="banner-box-tab-item-mask hidden">
                <div class="mask-icon f-left"
                     style="background: url('{{URL::asset('images/static/icon-jixie.svg')}}'); background-size: 50% 60%; background-position: center; background-repeat: no-repeat;"></div>
                <div class="mask-text-box f-left">
                    <div class="mask-title">工程机械</div>
                    <div class="mask-desc">赋能工程机械</div>
                </div>
            </div>
            <div class="banner-box-tab-item" style="background-color: rgba(0, 114, 193, 1);"
                 data-img="{{URL::asset('images/static/banner-shiyou.jpeg')}}">石油化工
            </div>
            <div class="banner-box-tab-item-mask hidden">
                <div class="mask-icon f-left"
                     style="background: url('{{URL::asset('images/static/icon-shiyou.svg')}}'); background-size: 50% 60%; background-position: center; background-repeat: no-repeat;"></div>
                <div class="mask-text-box f-left">
                    <div class="mask-title">石油化工</div>
                    <div class="mask-desc">赋能石油化工</div>
                </div>
            </div>
            <div class="banner-box-tab-item" style="background-color: rgba(9, 92, 153, 1);"
                 data-img="{{URL::asset('images/static/banner-tielu.jpeg')}}">铁路交轨
            </div>
            <div class="banner-box-tab-item-mask hidden">
                <div class="mask-icon f-left"
                     style="background: url('{{URL::asset('images/static/icon-tielu.svg')}}'); background-size: 50% 60%; background-position: center; background-repeat: no-repeat;"></div>
                <div class="mask-text-box f-left">
                    <div class="mask-title">铁路交轨</div>
                    <div class="mask-desc">赋能铁路交轨</div>
                </div>
            </div>
        </div>
    </div>

    <div class="product-box">
        <div class="product-box-title">更强安全性 更高生产力</div>
        <div class="product-item-box">
            @foreach($products as $product)
                <div class="product-item inline-block shadow-xl">
                    <img src="{{URL::asset('uploads').'/'.$product->image}}">
                    <div class="product-item-title">{{$product->title}}</div>
                    <a href="/product-info/{{$product->id}}">
                        <div class="product-item-btn font-color-white">查看更多产品</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <div class="product-block-title">正域 值得信赖</div>

    <div class="product-trust-box">
        <div class="product-trust-item"
             style="background: url('{{URL::asset('images/static/about-fengche.png')}}'); background-size: 100% 100%; background-repeat: no-repeat;">
            <div class="product-trust-item-mask"></div>
            <div class="product-trust-item-title font-color-white">值得信赖</div>
        </div>
        <div class="product-trust-item"
             style="background: url('{{URL::asset('images/static/about-fengche.png')}}'); background-size: 100% 100%; background-repeat: no-repeat;">
            <div class="product-trust-item-mask"></div>
            <div class="product-trust-item-title font-color-white">值得信赖</div>
        </div>
    </div>

    <div class="product-block-title">我们的解决方案</div>

    <div class="product-plan-box">
        @foreach($cases as $case)
            <div class="product-plan-item"
                 style="background: url('{{URL::asset('uploads').'/'.$case->covers}}'); background-size: 100% 100%; background-repeat: no-repeat;">
                <div class="product-plan-item-mask"></div>
                <div class="product-plan-item-mini-title font-color-white">项目</div>
                <div class="product-plan-item-title font-color-white">{{$case->title}}</div>
                <div class="product-plan-item-desc font-color-white">{{$case->desc}}</div>
            </div>
        @endforeach
    </div>

    <a href="/connect">
        <div class="product-connect-btn font-color-white">联系我们</div>
    </a>

    <script>
        $(document).on('mousemove', '.banner-box-tab-item', function () {
            $('.banner-box-tab-item').removeClass('hidden');
            $('.banner-box-tab-item-mask').removeClass('show');
            $(this).addClass('hidden');
            $(this).next().addClass('show');
            $('.product-banner-box-preview-box').attr('style', "background: url('" + $(this).data('img') + "'); background-size: 100% 100%; background-repeat: no-repeat;")
        })

        $(document).on('mouseout', '.banner-box-tab-item-mask', function () {
            $('.banner-box-tab-item').removeClass('hidden');
            $('.banner-box-tab-item-mask').removeClass('show');
        })

        $(document).on('click', '#nav_btn', function () {
            $('.product-menu-box').removeClass('hidden');
            return false;
        })

        $(document).on('click', '.close-mask', function () {
            $('.product-menu-box').addClass('hidden');
        })
    </script>

@endsection
