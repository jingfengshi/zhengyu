@extends("main")

@section("content")


    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/products.css')}}">

    <div class="nav">首页 > 保护人们在危险环境安全工作 > 产品</div>

    <div class="top-banner" style='background: url({{URL::asset('uploads/images/static/pd1.png')}});background-size: 100% 100%;background-repeat: no-repeat;'>
        <div class="top-banner-title font-color-white">声光报警</div>
    </div>

    <div class="product-box">
        @if(isset($categories))
            <div class="product-box-left-box">
            @foreach($categories as $category)

                <div class="product-box-left-item">
                    <div class="inline-block"><img src="images/static/check.svg" alt=""></div>
                    <div class="inline-block product-box-left-item-nav">{{$category->name}}</div>
                    <div class="product-box-left-item-child show">
                        @foreach($category->products as $pr)
                        @if($pr->id == $product->id)
                        <div style="color:red;">{{$pr->title}}</div>
                        @else
                        <div>{{$pr->title}}</div>
                        @endif
                        @endforeach
                    </div>
                </div>

            @endforeach
            </div>
        @endif



        <div class="product-box-right-box">
            <div class="product-box-right-box-nav">产品 / 声光报警 / AL203  声光多层报警灯</div>
            <div class="product-box-right-box-title">AL203  声光多层报警灯</div>
            <div class="product-box-right-box-banner-box">
                <div class="product-box-right-box-banner-preview inline-block"><img src="{{URL::asset('uploads/'.$product->image)}}" alt=""></div>
                <div class="product-box-right-box-banner-list inline-block">
                    @foreach($product->sub_image as $img)
                    <div class="product-box-right-box-banner-item"><img src="{{URL::asset('uploads/'.$img)}}" alt=""></div>
                    @endforeach
                </div>
                <div class="product-box-right-box-rightmost-box inline-block">
                    <div class="product-box-right-box-rightmost-cert"></div>
                    <div class="new-box font-color-white">NEW</div>
                </div>
            </div>
            <div class="product-box-right-box-tab-list">
                <div class="product-box-right-box-tab">
                    <div class="product-box-right-box-tab-item inline-block">优势与特点</div>
                    <div class="product-box-right-box-tab-item inline-block">应用范围</div>
                    <div class="product-box-right-box-tab-item inline-block">技术规格</div>
                    <div class="product-box-right-box-tab-item inline-block">外形尺寸</div>
                    <div class="product-box-right-box-tab-item inline-block">资料下载</div>
                    <div class="product-box-right-box-tab-item inline-block">视频介绍</div>
                    <div class="product-box-right-box-tab-item inline-block">现场安装</div>
                </div>
                <div class="product-box-right-box-tab-box">
                    <div class="product-box-right-box-tab-box-item">{!! $product->description !!}</div>
                    <div class="product-box-right-box-tab-box-item">{{$product->apply_area}}</div>
                    <div class="product-box-right-box-tab-box-item">333333</div>
                    <div class="product-box-right-box-tab-box-item">444444</div>
                    <div class="product-box-right-box-tab-box-item">555555</div>
                    <div class="product-box-right-box-tab-box-item">666666</div>
                    <div class="product-box-right-box-tab-box-item">
                        @foreach($product->install as $install)
                            <img src="{{URL::asset('uploads/'.$install)}}" alt="">
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="product-box-right-box-recommend-box">
                <div class="product-box-right-box-recommend-title">推荐产品</div>
                <div class="product-box-right-box-recommend-item inline-block">
                    <img src="images/static/product-fmq.png" alt="">
                    <div class="product-box-right-box-recommend-item-title">BC-3B 声光电子蜂鸣器</div>
                </div>
                <div class="product-box-right-box-recommend-item inline-block">
                    <img src="images/static/product-fmq.png" alt="">
                    <div class="product-box-right-box-recommend-item-title">BC-3B 声光电子蜂鸣器</div>
                </div>
                <div class="product-box-right-box-recommend-item inline-block">
                    <img src="images/static/product-fmq.png" alt="">
                    <div class="product-box-right-box-recommend-item-title">BC-3B 声光电子蜂鸣器</div>
                </div>
                <div class="product-box-right-box-recommend-item inline-block">
                    <img src="images/static/product-fmq.png" alt="">
                    <div class="product-box-right-box-recommend-item-title">BC-3B 声光电子蜂鸣器</div>
                </div>
            </div>
        </div>
    </div>

    <div style="clear: both;"></div>

    <script type="text/javascript">

        $(function (){
            // default show first product img
            $('.product-box-right-box-banner-preview').find('img').attr('src',$('.product-box-right-box-banner-item').first().find('img').attr('src'));
            // default show first tab
            $('.product-box-right-box-tab-item').removeClass('tab-item-active');
            $('.product-box-right-box-tab-item').first().addClass('tab-item-active');
            $('.product-box-right-box-tab-box-item').removeClass('tab-box-item-active');
            $('.product-box-right-box-tab-box-item').first().addClass('tab-box-item-active');
        })

        $(document).on('mouseover', '.product-box-left-item', function () {
            $('.product-box-left-item').find('img').attr('src', 'images/static/check.svg');
            $('.product-box-left-item-child').removeClass('show');
            $(this).find('img').attr('src', 'images/static/checked.svg');
            $(this).find('.product-box-left-item-child').addClass('show');
        })

        $(document).on('mouseover', '.product-box-right-box-banner-item', function () {
            $('.product-box-right-box-banner-preview').find('img').attr('src',$(this).find('img').attr('src'));
        })

        $(document).on('mouseover', '.product-box-right-box-tab-item', function () {
            $('.product-box-right-box-tab-box-item').removeClass('tab-box-item-active');
            $('.product-box-right-box-tab-box-item').eq($(this).index()).addClass('tab-box-item-active');
        })

    </script>

@endsection
