@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="css/service.css">
    <div style="width: 100%;height: auto;margin: auto">
        <div class="service-top-title" @if(\Illuminate\Support\Facades\Request::path() == 'service')style="position: fixed;
    width: 100%;
    top: 120px;
    background-color: #ffffff;z-index: 9998;"@endif>
            <a href="{{route('service',['q'=>'gold'])}}">金牌服务</a>
            <a href="{{route('service')}}">定制与试用</a>
        </div>

        <div class="service-banner" style="margin-top: 210px;">
            <img src="{{empty($banner->file)?URL::asset('images/try-banner.jpg'):URL::asset('uploads/'.$banner->file)}}">
        </div>

        <div style="width: 91%;margin:auto;padding-right: 160px;">

            <div style="margin-left: 50px;">
                <div class="brand-title">定制服务</div>
                <div class="brand-desc"><pre>
我们的设计生产团队提供专业的定制服务为您的业务提高效率。
在“为安全而生”的宗旨上，我们深知：产品越容易使用，您越容易受益。
同时，降低成本并提高效率是一个挑战，我们为此在不断努力。
例如，在保持原有电压不变，保持原有设备完好的情况下做出符合您要求的产品。
这就需要我们为您提供灵活的、个性的解决方案。
无论是定制小型机柜、定制安装配件，还是录制专属语音、更改控制方式......
提供高质量的定制服务，是上海正域自动化对您的郑重承诺。
                </pre>
                    <p style="font-size: 14px;">*根据定制内容收取费用。</p></div>
                <div class="brand-title">零风险试用</div>
                <div class="brand-desc"><pre>
我们有信心提供让您感到满意的产品。
在申请免费试用的30天内，您可以自己安装安全可靠的灯具。
如果您有任何不满意，请在30天内与我们联系并退回产品。
我们将视情况为您选择更合适您的产品。
上海正域自动化的销售工程师将以高度的要求来确保正确的产品配置
                </pre>
                </div>
            </div>

            <div class="apply-box">
                <div class="apply-box-left">
                    <img src="{{URL::asset('images/try.jpg')}}" alt="">
                </div>
                <div class="apply-box-right">
                    <div class="apply-box-right-title">立即申请</div>
                    <div class="apply-box-right-desc">在这里，您可以根据您的需要申请免费试用产品。</div>
                    <div class="apply-box-right-email">产品试用申请表请发送至：<span class="font-color-black">{{empty($config['产品使用邮件']['value'])?'':$config['产品使用邮件']['value']}}</span>
                        @if(!empty($config['产品下载附件']['value']))
                            <div class="apply-box-right-btn font-color-white">
                                <a href="/uploads/{{$config['产品下载附件']['value']}}">
                                    点击下载附件
                                </a>
                            </div>
                        @else
                            <div class="apply-box-right-btn font-color-white">点击下载附件</div>
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script>
        $(document).ready(function () {
            $(".content font").each(function () {
                $(this).css({'font-size': $(this).attr('size') / 3 + 'rem'})
            })
        })
    </script>

@endsection
