@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="css/service.css">

    <div class="service-top-title">
        <a href="/">金牌服务</a>
        <a href="">定制与试用</a>
    </div>

    <div class="service-banner">
        <img src="{{URL::asset('uploads/'.$banner->file)}}">
    </div>

    <div>
        <div class="content"><!--todo 富文本内容放在这里--></div>
        <div class="apply-box">
            <div class="apply-box-left"></div>
            <div class="apply-box-right">
                <div class="apply-box-right-title">立即申请</div>
                <div class="apply-box-right-desc">在这里，您可以根据您的需要申请免费试用产品。</div>
                <div class="apply-box-right-email">产品试用申请表请发送至：<span class="font-color-black">{{empty($config['产品使用邮件']['value'])?'':$config['产品使用邮件']['value']}}</span></div>
                <div class="apply-box-right-btn font-color-white">点击下载附件</div>
            </div>
        </div>
    </div>

@endsection
