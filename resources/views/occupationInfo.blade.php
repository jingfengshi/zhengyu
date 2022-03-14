@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/occupation.css')}}">




    <div style="width: 100%;margin: auto;">
        <div class="brand-top-title" style="position: fixed;
    width: 100%;
    top: 120px;
    background-color: #ffffff;z-index: 9998;">
            <a href="{{route('occupation')}}">职业</a>
            <a href="{{route('occupation')}}#jiazhiguan">价值观</a>
            <a href="{{route('occupation',['q'=>'info'])}}">职位描述</a>
        </div>

        <div style="width: 100%;height: 500px;margin: auto;overflow:hidden;margin-top: 210px;">
            <img style="height:1001px;width: 100%;margin-top:-22rem;" src="{{URL::asset('images/职业/u4605.jpg')}}"
                 alt="">
        </div>


        <div style="width: 100%;margin: auto;margin-top:6.2rem;">
            <div style="width: 288px;height: 45px;font-weight: 200;
    font-style: normal;
    font-size: 32px;
    color:#333333;
    text-align: center;margin: auto">
                加入我们
            </div>
            <div style="width: 1120px;height:75px;font-weight: 200;
        font-style: normal;
        font-size: 24px;
           color:#333333;
       margin: auto;margin-top: 2rem;">
                在上海正域，我们关心。为您、我们的业务和我们的环境。我们对员工的承诺坚如磐石：我们共同成长，享受工作，互相激励。加入并感受不同。
            </div>
        </div>

        <div style="width: 100%;margin: auto;margin-top:6.2rem;">
            <div style="width: 288px;height: 45px;font-weight: 200;
    font-style: normal;
    font-size: 32px;
    color:#333333;
    text-align: center;margin: auto">
                什么是好工作？
            </div>
            <div style="width: 1120px;height:75px;font-weight: 200;
        font-style: normal;
        font-size: 24px;
           color:#333333;
       margin: auto;margin-top: 2rem;">
                了解如何与上海正域一起成长、享受和激励。
            </div>
        </div>

        <div style="display: flex;margin:auto;width:1310px;">
            <div style="width:420px;height: 459px;margin-right: 2rem">
                <div style="height: 252px;overflow: hidden">
                    <img src="{{URL::asset('images/peixun.jpg')}}" alt="">
                </div>
                <div style="padding-left: 3rem;padding-top: 2rem">
                    <div style="width: 112px;height: 40px;ont-weight: 200;
    font-style: normal;
    text-align: left;font-size: 28px;">
                        培训发展
                    </div>
                    <div style="font-weight: 200;
    font-style: normal;
    font-size: 24px;
    color: #7F7F7F;
    line-height: 46px;">
                        让员工主动参与培训，让培训成果 转化更直观、更高效
                    </div>

                </div>


            </div>


            <div style="width:420px;height: 459px;margin-right: 2rem">
                <div style="height: 252px;overflow: hidden">
                    <img src="{{URL::asset('images/fuli.jpg')}}" alt="">
                </div>
                <div style="padding-left: 3rem;padding-top: 2rem">
                    <div style="width: 112px;height: 40px;ont-weight: 200;
    font-style: normal;
    text-align: left;font-size: 28px;">
                        福利待遇
                    </div>
                    <div style="font-weight: 200;
    font-style: normal;
    font-size: 24px;
    color: #7F7F7F;
    line-height: 46px;">
                        让员工主动参与培训，让培训成果 转化更直观、更高效
                    </div>

                </div>


            </div>

            <div style="width:420px;height: 459px;">
                <div style="height: 252px;overflow: hidden">
                    <img src="{{URL::asset('images/chengzhang.jpeg')}}" alt="">
                </div>
                <div style="padding-left: 3rem;padding-top: 2rem">
                    <div style="width: 112px;height: 40px;ont-weight: 200;
    font-style: normal;
    text-align: left;font-size: 28px;">
                        员工成长
                    </div>
                    <div style="font-weight: 200;
    font-style: normal;
    font-size: 24px;
    color: #7F7F7F;
    line-height: 46px;">
                        让员工与公司共同成长
                    </div>

                </div>


            </div>
        </div>


        <div style="display: flex;margin:auto;margin-top: 6rem;width:1310px">
            <div>
                <img src="{{URL::asset('images/job.jpg')}}" alt="">
            </div>
            <div style="margin-left: 3rem">
                <div style="width: 128px;height: 45px;font-weight: 200;
    font-style: normal;
    font-size: 32px;
    text-align: center;">
                    立即申请
                </div>

                <div style="width: 781px;height: 46px;font-weight: 200;
    font-style: normal;
    font-size: 24px;
    color: #7F7F7F;
    line-height: 46px;padding-top: 2rem">
                    在这里，您可以根据您的喜好查看我们的工作机会
                </div>

                <div style="padding-top: 11rem">
                    <span style="color:#02A7F0;font-weight: 400;
    font-style: normal;font-size: 24px; ">所有岗位请点击：</span>
                    <span style="font-weight: 400;
    font-style: normal;font-size: 24px;">https://qy.58.com/3027416113927</span>
                    <div style="width: 140px;height: 40px;background-color: rgba(3, 100, 210, 1);
    border: none;
    border-radius: 20px;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    font-size: 16px;text-align: center;padding-top: 0.5rem;float: right ;margin-right: 2rem;">
                        <a href="https://qy.58.com/3027416113927"
                           style="font-size: 16px;color: #FFFFFF;margin-top: 1rem" target="_blank">了解更多</a>
                    </div>

                </div>

            </div>
        </div>


    </div>










@endsection


