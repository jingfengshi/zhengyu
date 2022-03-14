@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/product.css')}}">
    <div style="width: 100%;height: auto;margin: auto">

        <div class="product-menu-item-warp shadow-xl hidden" >
            @foreach($cates as $cate)
                <div class="product-menu-item f-left">
                    <div class="product-menu-cate">{{$cate->name}}</div>
                    @foreach($cate->products as $product)
                        @if(!$product->is_creative)
                            <a href="/product-info/{{$product->id}}">
                                <div class="product-menu-cate-child-product">{{$product->title}}</div>
                            </a>
                        @endif
                    @endforeach
                </div>
            @endforeach
        </div>

        <div class="product-top-title" style="position: fixed;
    width: 100%;
    top: 123px;
    background-color: #ffffff;z-index: 9998;">
            <div style="width: 70%;">
                <a href="">行业</a>
                <a id="nav_btn" href="javascript:;">产品</a>
                <a class="zyxinlai" href="#">智慧计量工具</a><!--关键时刻值得信赖-->
                <a class="zyprojects" href="#">项目</a>
            </div>

        </div>

        <div style="width: 100%;margin-top:210px;">
            <div class="product-banner-box">
                <div class="product-banner-box-preview-box f-left"
                     style="background: url('{{URL::asset('images/static/about-fengche.png')}}'); background-size: 100% 100%; background-repeat: no-repeat;">
                    <div style="font-family: 'Arial Normal', 'Arial', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 40px;
    color: #FEFEFF;
    line-height: 55px;
margin-top: 68px;
    margin-left: 95px;">工业级照明+AI
                    </div>
                    <div style="font-family: 'Arial Normal', 'Arial', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 40px;
    color: #FEFEFF;
    line-height: 55px;
    margin-left: 95px;" id="banner_preview_text_box">赋能风电能源
                    </div>
                </div>
                <div class="product-banner-box-tab-box f-left">
                    <div class="banner-box-tab-item" style="background-color: rgba(129, 211, 248, 1);"
                         data-img="{{URL::asset('images/static/banner-fengche.jpeg')}}">食品饮料
                    </div>
                    <div class="banner-box-tab-item-mask hidden">
                        <div class="mask-icon f-left"
                             style="background: url('{{URL::asset('images/static/icon-fengche.svg')}}'); background-size: 50% 60%; background-position: center; background-repeat: no-repeat;"></div>
                        <div class="mask-text-box f-left">
                            <div class="mask-title">氺和废水</div>
                            <div style="display:none" class="mask-desc">赋能风电能源</div>
                        </div>
                    </div>
                    <div class="banner-box-tab-item" style="background-color: rgba(88, 175, 220, 1);"
                         data-img="{{URL::asset('images/static/banner-matou.jpeg')}}">氺和废水
                    </div>
                    <div class="banner-box-tab-item-mask hidden">
                        <div class="mask-icon f-left"
                             style="background: url('{{URL::asset('images/static/icon-matou.png')}}'); background-size: 50% 60%; background-position: center; background-repeat: no-repeat;"></div>
                        <div class="mask-text-box f-left">
                            <div class="mask-title">化工和天然气</div>
                            <div style="display:none" class="mask-desc">赋能智慧港口</div>
                        </div>
                    </div>
                    <div class="banner-box-tab-item" style="background-color: rgba(3, 146, 204, 1);"
                         data-img="{{URL::asset('images/static/banner-hangkong.jpeg')}}">电力能源
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
                         data-img="{{URL::asset('images/static/banner-jixie.jpeg')}}">化工和天然气
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
                         data-img="{{URL::asset('images/static/banner-shiyou.jpeg')}}">造纸和纸浆
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
                         data-img="{{URL::asset('images/static/banner-tielu.jpeg')}}">矿产冶金
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

        </div>
		
        <div class="product-box" style="width: 100%;margin-top:100px">
            <div class="product-box-title">更强安全性 更高生产力</div>
            <div class="product-item-box">
                @foreach($cates as $category)
                    <div class="product-item inline-block shadow-xl">
                        <img src="{{URL::asset('uploads').'/'.$category->image}}">
                        <div style="height: 107px">
                            <div class="product-item-title">{{$category->name}}</div>
                        </div>


                        <div class="product-item-btn font-color-white">
                            <a href="/cate/{{$category->id}}">查看更多产品 </a>

                        </div>

                    </div>
                @endforeach
            </div>
        </div>
		<div id="zhidexinlai" style="height:65px"></div>
        <div style="width: 100%;">
        <div id="test">
            <div   style="position:relative;" class="product-block-title">正域 值得信赖</div>
        </div>


            <div class="product-trust-box">
                <div class="product-trust-item"
                     style="background: url('{{URL::asset('images/zhidexinlai-jiangbei.jpg')}}'); background-size: 100% 100%; background-repeat: no-repeat;">
                    <a href="{{route('about')}}">
                        <div class="product-trust-item-mask"></div>
                        <div class="product-trust-item-title font-color-white">值得信赖</div>
                    </a>

                </div>
                <div class="product-trust-item"
                     style="background: url('{{URL::asset('images/zhidexinlai-moxing.jpg')}}'); background-size: 100% 100%; background-repeat: no-repeat;">
                    <a href="{{route('cases')}}">
                        <div class="product-trust-item-mask"></div>
                        <div class="product-trust-item-title font-color-white">值得信赖</div>
                    </a>

                </div>
            </div>

            <div id='projects' class="product-block-title" style="padding-top:55px">我们的解决方案</div>

            <div class="product-plan-box">
                @foreach($cases as $case)
					<a href="/cases/{{$case->id}}">
                    <div class="product-plan-item"
                         style="background: url('{{URL::asset('uploads').'/'.$case->covers}}'); background-size: 100% 100%; background-repeat: no-repeat;">
                        <div class="product-plan-item-mask"></div>
                        <div class="product-plan-item-mini-title font-color-white">项目</div>
                        <div class="product-plan-item-title font-color-white">{{$case->title}}</div>
                        <div class="product-plan-item-desc font-color-white">{{$case->desc}}</div>
                    </div>
					</a>
                @endforeach
            </div>

            <a href="/connect">
                <div class="product-connect-btn font-color-white" style="margin-top:90px">联系我们</div>
            </a>
        </div>
    </div>


    <script>
        $(document).on('mousemove', '.banner-box-tab-item', function () {
            $('.banner-box-tab-item').removeClass('hidden');
            $('.banner-box-tab-item-mask').removeClass('show');
            $(this).addClass('hidden');
            $(this).next().addClass('show');
            $('.product-banner-box-preview-box').attr('style', "background: url('" + $(this).data('img') + "'); background-size: 100% 100%; background-repeat: no-repeat;");
            $('#banner_preview_text_box').html($(this).next('.banner-box-tab-item-mask').find('.mask-desc').html())
        })

        $(document).on('mouseout', '.banner-box-tab-item-mask', function () {
            $('.banner-box-tab-item').removeClass('hidden');
            $('.banner-box-tab-item-mask').removeClass('show');
        })

        $(document).on('mousemove', '#nav_btn', function () {
            $('.product-menu-item-warp').removeClass('hidden');
            return false;
        })

        $(document).on('mousemove', '.product-menu-item-warp', function () {
            $('.product-menu-item-warp').removeClass('hidden');
            return false;
        })

        $(document).on('mouseout', '.product-menu-item-warp', function () {
            $('.product-menu-item-warp').addClass('hidden');
            return false;
        })

        $(document).on('click', '.close-mask', function () {
            $('.product-menu-box').addClass('hidden');
        })
		$(".zyxinlai").click(function(){
			$("html,body").animate({scrollTop:$("#zhidexinlai").offset().top-200},1000);
		})
		$(".zyprojects").click(function(){
			$("html,body").animate({scrollTop:$("#projects").offset().top-200},1000);
		})
		
    </script>
	<style type="text/css">
	body{
		overflow:overlay;
	}
	</style>

@endsection
