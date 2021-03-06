@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/product_list.css')}}">

    <div class="nav">首页 > 保护人们在危险环境安全工作 > 产品</div>

    <div class="top-banner"
         style='background: url("{{empty($banner->file)?URL::asset('uploads/default.png'):URL::asset('uploads').'/'.$banner->file}}");background-size: 100% 100%;background-repeat: no-repeat;'>
        <div class="top-banner-title font-color-white">视觉信号</div>
    </div>

    <div class="desc-box">
        <div class="desc-box-top-text">
            无论是何种应用 -过程控制、工厂安全或紧急疏散，正域都能提供满足您需求的信号解决方案。 <br>
            专为安全区域、危险和防爆应用设计、智造产品，适合多种安装环境和各种工作电压用于每个应用场景。
        </div>
        <div class="desc-box-icon-box">
            <div class="desc-box-icon-item">
                <div class="desc-box-icon"
                     style='background: url("{{URL::asset('images/static/pdd-1.png')}}");background-size: 100% 100%;background-repeat: no-repeat;'></div>
                <div class="desc-box-icon-desc">全面提升安全性能</div>
            </div>
            <div class="desc-box-icon-item">
                <div class="desc-box-icon"
                     style='background: url("{{URL::asset('images/static/pdd-2.png')}}");background-size: 100% 100%;background-repeat: no-repeat;'></div>
                <div class="desc-box-icon-desc">全面提升安全性能</div>
            </div>
            <div class="desc-box-icon-item">
                <div class="desc-box-icon"
                     style='background: url("{{URL::asset('images/static/pdd-3.png')}}");background-size: 100% 100%;background-repeat: no-repeat;'></div>
                <div class="desc-box-icon-desc">全面提升安全性能</div>
            </div>
        </div>
    </div>

    <div class="product-box">
        {{--        旧版--}}
        {{--        <div class="product-box-left-box">--}}
        {{--            @foreach($cates as $cate)--}}
        {{--                @if($cate['is_directory'] == 1)--}}
        {{--                    <div class="product-box-left-item">--}}
        {{--                        <div class="inline-block"><img--}}
        {{--                                @if($cate['id'] == $id || in_array($id,$cate['childs'])) src="{{URL::asset('images/static/checked.svg')}}"--}}
        {{--                                @else src="{{URL::asset('images/static/check.svg')}}" @endif></div>--}}
        {{--                        <div class="inline-block product-box-left-item-nav">{{$cate['name']}}</div>--}}
        {{--                        <div class="product-box-left-item-child @if(in_array($id,$cate['childs'])) show @endif">--}}
        {{--                            @foreach($cates as $_cate)--}}
        {{--                                @if($_cate['parent_id'] == $cate['id'])--}}
        {{--                                    <div>--}}
        {{--                                        <a href="/product-list/{{$_cate['id']}}" @if($id == $_cate['id']) class="active" @endif>--}}
        {{--                                            {{$_cate['name']}}--}}
        {{--                                        </a>--}}
        {{--                                    </div>--}}
        {{--                                @endif--}}
        {{--                            @endforeach--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                @endif--}}
        {{--            @endforeach--}}
        {{--        </div>--}}

        @if(!empty($cates))
            <div class="product-box-left-box">
                @foreach($cates as $cate)
                    <div class="product-box-left-item">
                        <div class="inline-block" style="float: left;margin-top: 17px;"><img
                                @if($cate['id'] == $products[0]->category_id)
                                src="{{URL::asset('images/static/checked.svg')}}"
                                @else
                                src="{{URL::asset('images/static/check.svg')}}"
                                @endif></div>
                        <a href="/products/{{$cate->id}}">
                            <div class="inline-block product-box-left-item-nav"
                                 style="width: 200px">{{$cate->name}}</div>
                        </a>
                    </div>
                @endforeach
            </div>
        @endif

        <div class="product-box-right-box">
            @foreach($products as $product)
                <div class="product-box-right-item inline-block">
                    <a href="/product-info/{{$product->id}}">
                        <div class="product-item-img"
                             style='background: url("{{URL::asset('uploads').'/'.$product->image}}");background-size: 100% 100%;background-repeat: no-repeat;'></div>
                    </a>
                    <div class="tips-box">
                        @if($product->is_new)
                            <div class="new-box font-color-white">NEW</div>
                        @endif
                    </div>
                    <a href="/product-info/{{$product->id}}">
                        <div class="product-item-title">{{$product->title}}</div>
                    </a>
                    <div class="product-item-color">颜色：</div>
                    <div class="product-item-power">功率：</div>
                </div>
            @endforeach
        </div>
    </div>

    <div style="clear: both;"></div>

    <script type="text/javascript">
        $(document).on('mouseover', '.product-box-left-item', function () {
            $('.product-box-left-item').find('img').attr('src', '{{URL::asset('images/static/check.svg')}}');
            $('.product-box-left-item-child').removeClass('show');
            $(this).find('img').attr('src', '{{URL::asset('images/static/checked.svg')}}');
            $(this).find('.product-box-left-item-child').addClass('show');
        })
    </script>

@endsection
