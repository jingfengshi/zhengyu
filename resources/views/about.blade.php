@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/about.css')}}">
    <div style="width: 1920px;height: auto;margin: auto">
        <div class="about-top-title" @if(\Illuminate\Support\Facades\Request::path() == 'about')style="position: fixed;
    width: 1920px;
    top: 120px;
    background-color: #ffffff;z-index: 99999;"@endif>
            <a href="/about">关于正域</a>
            <a href="/news">新闻</a>
            <a href="/cert">企业荣誉</a>
            <a href="/ccCert">产品认证</a>
            <a href="/connect">联系我们</a>
        </div>

        <div class="about-banner">
            <img
                src="{{empty($banner->file)?URL::asset('uploads/default.png'):URL::asset('uploads').'/'.$banner->file}}">
            <div class="about-banner-title-box">
                <div class="about-banner-title font-color-white">在希望和可能之间</div>
                <div class="about-banner-title font-color-white">有一座桥梁</div>
                <div class="about-banner-title font-color-white" style="font-family: 'Arial Negreta', 'Arial Normal', 'Arial', sans-serif;
    font-weight: 700;font-style: normal;
    font-size: 38px;
    color: rgba(255, 255, 255, 0.996078431372549);
    line-height: 50px;">正域
                </div>
                <div class="about-banner-title font-color-white">正在创造一个充满潜力的世界。</div>
                <div class="about-banner-desc font-color-white">正域承诺：保护人们更安全、更智能、更高效的工作</div>
            </div>
        </div>

        <div class="about-box">
            <div class="about-box-title">正域自动化简介——我们是谁以及我们做什么</div>
            <div class="about-box-desc">
                {!! $content->value !!}
            </div>
            <div class="about-box-img"></div>
            <a href="/product">
                <div class="about-box-btn font-color-white">了解更多产品</div>
            </a>
        </div>

        <div style="width: 1920px;">
            <div class="about-img-box">
                <div class="about-img-box-img f-left"
                     style='background: url("../images/static/about-fengche.png");background-size: 100% 100%;background-repeat: no-repeat;'></div>
                <div class="about-img-box-desc f-right">
                    <div class="about-img-box-desc-title font-color-white">我们的愿景</div>
                    <div class="about-img-box-desc-title-2 font-color-white">融合智能化和数字化来应对安全的极限挑战。</div>
                    <div class="about-img-box-desc-title-2 font-color-white">成为客户信赖和社会尊敬的公司。</div>
                </div>
            </div>
            <div class="about-img-box">
                <div class="about-img-box-img f-right"
                     style='background: url("../images/static/about-deng.png");background-size: 100% 100%;background-repeat: no-repeat;'></div>
                <div class="about-img-box-desc f-left" style="background-color: rgba(109, 190, 74, 1);">
                    <div class="about-img-box-desc-title font-color-white">我们的使命</div>
                    <div class="about-img-box-desc-title-2 font-color-white"
                         style="line-height: 40px;margin-top: 2rem;margin-bottom: 2rem;">我们每天都努力寻求更好的方法来提升安全性并提高客户的生产力
                    </div>
                    <div class="about-img-box-desc-title-3 font-color-white">
                        每一天，我们都通过提供创新解决方案来应对危险环境安全和生产力的挑战，使生产力更安全、更节能、更智能、更低碳。我们通过有目的的方案和产品创造、引领并改变日常安全工作，真正遵循可持续发展的信念，成为为用户创造价值的强大力量。
                    </div>
                </div>
            </div>
            <div class="about-img-box">
                <div class="about-img-box-img f-left"
                     style='background: url("../images/static/about-chuan.png");background-size: 100% 100%;background-repeat: no-repeat;'></div>
                <div class="about-img-box-desc f-right" style="background-color: rgba(0, 188, 235, 1);">
                    <div class="about-img-box-desc-title font-color-white">我们的价值观</div>
                    <div class="about-img-box-desc-title-2 font-color-white">坚守正道 相互支持 极尽全力 共享包容</div>
                    <div class="about-img-box-desc-title-3 font-color-white">
                        每一天，我们都通过提供创新解决方案来应对危险环境安全和生产力的挑战，使生产力更安全、更节能、更智能、更低碳。我们通过有目的的方案和产品创造、引领并改变日常安全工作，真正遵循可持续发展的信念，成为为用户创造价值的强大力量。
                    </div>
                </div>
            </div>
        </div>

        <div class="more-msg-box" style="width:1920px">
            <div class="more-msg-box-title">想知道我们更新、更多的消息？</div>
            <div style="width: 1120px;margin: 0 auto;">
                <div class="more-msg-box-news f-left">
                    <div class="more-msg-box-item-title">新闻活动</div>
                    <div class="more-msg-box-item-desc">了解更多正域新闻活动</div>
                    <a href="/news">
                        <div class="more-msg-box-item-btn font-color-white">了解更多</div>
                    </a>
                </div>
                <div class="more-msg-box-story f-right">
                    <div class="more-msg-box-item-title">客户的故事</div>
                    <div class="more-msg-box-item-desc">了解更多正域客户故事</div>
                    <a href="/cases">
                        <div class="more-msg-box-item-btn font-color-white">了解更多</div>
                    </a>
                </div>
            </div>
        </div>

        <div style="clear:both;"></div>
    </div>


    <script>

        $(document).ready(function () {
            $(".about-box-desc font").each(function () {
                // $(this).css({'font-size': $(this).attr('size') / 3 + 'rem'})
                // $(this).css({'font-size': $(this).attr('size')+'px'})
                $(this).attr({'size': $(this).attr('size')})
            })
        })

    </script>

@endsection
