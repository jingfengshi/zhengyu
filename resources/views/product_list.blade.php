@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/product_list.css')}}">

    <div style="width: 1920px;height: auto;margin: auto">
        <div class="nav">首页 > @if($cate->type =='protected')<a style="font-size: 16px;" href="{{route('cate',['type'=>'protected'])}}">保护人们在危险环境安全工作</a> @else <a style="font-size: 16px;" href="{{route('cate',['type'=>'cal'])}}">智慧计量单位</a> @endif> 产品</div>

        <div class="top-banner"
             style='background: url("{{URL::asset('images/cat-info.jpg')}}");background-size: 100% 100%;background-repeat: no-repeat;'>
            <div class="top-banner-title font-color-white">{{$cate->name}}</div>
        </div>

        <div style="width: 1920px;">
            <div class="desc-box">
                <div class="desc-box-top-text">
                    无论是何种应用 -过程控制、工厂安全或紧急疏散 ， 正域都能提供满足您需求的信号解决方案。 <br>
                    频闪灯和LED灯等专为安全区域、危险和防爆应用设计外壳、多种安装选项和各种工作电压用于每个应用场景。
                </div>
                <div class="desc-box-icon-box">
                    <div class="desc-box-icon-item">
                        <div class="desc-box-icon"
                             style='width:113px;height:99px;background: url("{{URL::asset('images/static/pdd-1.png')}}");background-size: 100% 100%;background-repeat: no-repeat;'></div>
                        <div class="desc-box-icon-desc">全面提升安全性能</div>
                    </div>
                    <div class="desc-box-icon-item">
                        <div class="desc-box-icon"
                             style='width:102px;height:101px;background: url("{{URL::asset('images/static/pdd-2.png')}}");background-size: 100% 100%;background-repeat: no-repeat;'></div>
                        <div class="desc-box-icon-desc">全面提升安全性能</div>
                    </div>
                    <div class="desc-box-icon-item">
                        <div class="desc-box-icon"
                             style='width:117px;height:100px;background: url("{{URL::asset('images/static/pdd-3.png')}}");background-size: 100% 100%;background-repeat: no-repeat;'></div>
                        <div class="desc-box-icon-desc">全面提升安全性能</div>
                    </div>
                </div>
            </div>
        </div>

        <div style="width: 1920px;">
            <div class="product-box">
                @if(!empty($allCategories))
                    <div class="product-box-left-box">
                        @foreach($allCategories as $cat)
                            <div class="product-box-left-item">
                                <div class="inline-block"><img
                                        @if($cat['id'] == $cate->id)
                                        src="{{URL::asset('images/static/checked.svg')}}"
                                        @else
                                        src="{{URL::asset('images/static/check.svg')}}"
                                        @endif></div>
                                <a href="/cate/{{$cat->id}}">
                                    <div class="inline-block product-box-left-item-nav">{{$cat->name}}</div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif

                <div class="product-box-right-box">
                    @foreach($cate->products as $product)
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
        </div>

        <div style="clear: both;"></div>
    </div>


    <script type="text/javascript">
        $(document).on('mouseover', '.product-box-left-item', function () {
            $('.product-box-left-item').find('img').attr('src', '{{URL::asset('images/static/check.svg')}}');
            $('.product-box-left-item-child').removeClass('show');
            $(this).find('img').attr('src', '{{URL::asset('images/static/checked.svg')}}');
            $(this).find('.product-box-left-item-child').addClass('show');
        })
    </script>

@endsection
