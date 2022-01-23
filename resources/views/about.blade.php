@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="css/about.css">

    <div class="about-top-title">
        <a href="">关于正域</a>
        <a href="">新闻</a>
        <a href="">企业荣誉</a>
        <a href="">产品认证</a>
        <a href="">联系我们</a>
    </div>

    <div class="about-banner">
        <img src="{{URL::asset('images/static/about-banner.png')}}">
        <div class="about-banner-title-box">
            <div class="about-banner-title font-color-white">在希望和可能之间</div>
            <div class="about-banner-title font-color-white">有一座桥梁</div>
            <div class="about-banner-title font-color-white" style="font-weight: 500;">正域</div>
            <div class="about-banner-title font-color-white">正在创造一个充满潜力的世界。</div>
            <div class="about-banner-desc font-color-white">正域承诺：保护人们更安全、更智能、更高效的工作</div>
        </div>
    </div>

    <div class="about-box">
        <div class="about-box-title">正域自动化简介——我们是谁以及我们做什么</div>
        <div class="about-box-desc">
            在各种工作和行业领域，包括危险区域、工业和过程控制、消防、安全、海洋、大规模疏散和运输，危险无处不在。已有的安全设施长期存在使用的潜在风险，维修难、运维成本高等问题，作为解决这些挑战的结果，正域ZHENGYU自动化应运而生。
        </div>
        <div class="about-box-desc">
            正域ZHENGYU设计开发和生产听觉和视觉信号产品，包括工业和危险区域发声器、信标和组合装置，是信令、照明、系统和计量的专业服务商。正域ZHENGYU一直专注于解决工业和危险环境下提高生产力的各种挑战，提供满足用户预期和要求的可持续产品和解决方案，帮助提高客户的生产力和竞争力。
        </div>
        <div class="about-box-img"></div>
        <div class="about-box-btn font-color-white">了解更多产品</div>
    </div>

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
            <div class="about-img-box-desc-title-2 font-color-white">我们每天都努力寻求更好的方法来提升安全性并提高客户的生产力</div>
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

    <div class="more-msg-box">
        <div class="more-msg-box-title">想知道我们更新、更多的消息？</div>
        <div class="more-msg-box-news f-left">
            <div class="more-msg-box-item-title">新闻活动</div>
            <div class="more-msg-box-item-desc">了解更多正域新闻活动</div>
            <div class="more-msg-box-item-btn font-color-white">了解更多</div>
        </div>
        <div class="more-msg-box-story f-right">
            <div class="more-msg-box-item-title">客户的故事</div>
            <div class="more-msg-box-item-desc">了解更多正域客户故事</div>
            <div class="more-msg-box-item-btn font-color-white">了解更多</div>
        </div>
    </div>

    <div style="clear:both;"></div>

@endsection
