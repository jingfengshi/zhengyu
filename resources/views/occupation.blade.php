@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/occupation.css')}}">




    <div style="width: 1920px;margin: auto;">
        <style>
            .cases-top-title{
                padding: 2.8rem 240px 1.45rem 240px;
            }

            .cases-top-title a{
                margin-right: 2.4rem;
                font-family: 'Arial Normal', 'Arial', sans-serif;
                font-weight: 400;
                font-style: normal;
                font-size: 16px;
                color: #484848;
            }
        </style>
        <div class="cases-top-title" @if(\Illuminate\Support\Facades\Request::path() == 'occupation')style="position: fixed;
    width: 1920px;
    top: 120px;
    background-color: #ffffff;z-index: 99999;"@endif>
            <a href="">职业</a>
            <a href="#jiazhiguan">价值观</a>
            <a href="">职位描述</a>
        </div>
        <div style="width: 1920px;height: 500px;margin: auto;overflow:hidden;" >
            <img style="height:1001px;width: 1920px;margin-top:-22rem;" src="{{URL::asset('images/职业/u4605.jpg')}}" alt="">
        </div>


        <div style="width: 1920px;margin: auto;margin-top:6.2rem;">
            <div style="width: 288px;height: 45px;font-weight: 200;
    font-style: normal;
    font-size: 32px;
    color:#333333;
    text-align: center;margin: auto">
                与上海正域一起成长
            </div>
            <div style="width: 1120px;height:75px;font-weight: 200;
        font-style: normal;
        font-size: 24px;
           color:#333333;
       margin: auto;margin-top: 2rem;">
                我们的团队成员在快节奏的协作环境中茁壮成长，他们在其中为全球的极大挑战创造解决方案。我们是目标一致的问题解决者：推动创新，让世界变得更加健康、更加安全、更加智能，并更具可持续性。
            </div>
        </div>


        <div style="width: 1920px;height: 150px;" id="jiazhiguan"></div>
        <div style="width: 192px;height: 45px; font-weight: 200;
    font-style: normal;
    font-size: 32px;
    text-align: center;margin: auto;  color:#333333;margin-top:10rem;">
            我们的价值观
        </div>


        <div style="width: 1440px;margin-left: 26rem;height:800px;">
            <div style="display:flex;margin-top: 4rem;">
                <div style="width: 440px;height: 370px">
                    <img src="{{URL::asset('images/jiazhi.jpeg')}}" alt="">
                    <div style="font-weight: 200;
    font-style: normal;
    font-size: 26px;margin-top: 2rem;margin-bottom: 2rem">
                        诚实守信
                    </div>
                    <div style="width: 378px;height: 85px;font-weight: 200;
    font-style: normal;
    font-size: 18px;
    color: #7F7F7F;
    line-height: 30px;">
                        我们对诚实和道德的坚持从不打折扣，只有这样行事，才能与他人、客户、供应商和社区建立值得信任的关系。
                    </div>
                </div>
                <div style="width: 440px;height: 370px">
                    <img src="{{URL::asset('images/anquanyuzhiliang.jpeg')}}" alt="">
                    <div style="font-weight: 200;
    font-style: normal;
    font-size: 26px;margin-top: 2rem;margin-bottom: 2rem">
                        安全与质量
                    </div>
                    <div style="width: 378px;height: 85px;font-weight: 200;
    font-style: normal;
    font-size: 18px;
    color: #7F7F7F;
    line-height: 30px;">
                        我们坚定不移地为我们自己和客户提供最高标准的安全和质量。
                    </div>
                </div>
                <div style="width: 440px;height: 370px">
                    <img src="{{URL::asset('images/kehuzhishang.jpg')}}" alt="">
                    <div style="font-weight: 200;
    font-style: normal;
    font-size: 26px;margin-top: 2rem;margin-bottom: 2rem">
                        客户至上
                    </div>
                    <div style="width: 378px;height: 85px;font-weight: 200;
    font-style: normal;
    font-size: 18px;
    color: #7F7F7F;
    line-height: 30px;">
                        我们主动聆听客户的意见，深入了解他们的需要，并提供可确保他们成功的独特解决方案。
                    </div>
                </div>
            </div>

            <div style="display:flex;margin-top: 4rem;">
                <div style="width: 440px;height: 370px">
                    <img src="{{URL::asset('images/buduanjinbu.jpg')}}" alt="">
                    <div style="font-weight: 200;
    font-style: normal;
    font-size: 26px;margin-top: 2rem;margin-bottom: 2rem">
                       不断进步
                    </div>
                    <div style="width: 378px;height: 85px;font-weight: 200;
    font-style: normal;
    font-size: 18px;
    color: #7F7F7F;
    line-height: 30px;">
                        我们不懈地改进业务的所有方面，利用标准、反馈和纪律严明的管理流程因势利导。
                    </div>
                </div>
                <div style="width: 440px;height: 370px">
                    <img src="{{URL::asset('images/hezuo.jpg')}}" alt="">
                    <div style="font-weight: 200;
    font-style: normal;
    font-size: 26px;margin-top: 2rem;margin-bottom: 2rem">
                      合作
                    </div>
                    <div style="width: 378px;height: 85px;font-weight: 200;
    font-style: normal;
    font-size: 18px;
    color: #7F7F7F;
    line-height: 30px;">
                        我们在不同地域、平台、业务单位和职能部门之间密切无间地合作，充分发挥我们无比深厚的实力和专长。
                    </div>
                </div>
                <div style="width: 440px;height: 370px">
                    <img src="{{URL::asset('images/jijichuangxin.jpg')}}" alt="">
                    <div style="font-weight: 200;
    font-style: normal;
    font-size: 26px;margin-top: 2rem;margin-bottom: 2rem">
                        积极创新
                    </div>
                    <div style="width: 378px;height: 85px;font-weight: 200;
    font-style: normal;
    font-size: 18px;
    color: #7F7F7F;
    line-height: 30px;">
                        我们充满激情地追寻新技术、能力和方法，目的是为客户创造切实的价值
                    </div>
                </div>
            </div>
        </div>

        <div style="width: 588px;height: 47px;font-weight: 400;
    font-style: normal;
    font-size: 42px;
    color: #2D2D2D;
    text-align: center;margin: auto;padding-top: 4rem;padding-bottom: 4rem;">
            想知道我们更新、更多的消息？
        </div>


        <div style="width: 1440px;margin-left: 26rem;height:400px;display: flex">
            <div style="display:flex;margin-top: 4rem;margin-left: 6rem">
                <div style="width: 500px;height: 280px;background-color: #EAEAEA;border: none;
    border-radius: 20px;">

                    <div style="margin-top: 4rem;margin-left: 4rem">
                        <div style="width: 128px;height: 36px;font-weight: 400;
    font-style: normal;font-size: 32px;">
                            <a style="font-weight: 400;
    font-style: normal;font-size: 32px;" href="{{route('about')}}">关于正域</a>

                        </div>
                        <div style="font-weight: 200;
    font-style: normal;
    text-align: left;font-size: 24px;padding-top: 2rem">
                            了解更多正域企业文化
                        </div>
                    </div>

                    <div style="width: 140px;height: 40px;background-color: rgba(3, 100, 210, 1);
    border: none;
    border-radius: 20px;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    font-size: 16px;text-align: center;padding-top: 0.5rem;float: right ;margin-right: 2rem;margin-top: 4rem">
                        <a href="{{route('about')}}" style="font-size: 16px;color: #FFFFFF;margin-top: 1rem">了解更多</a>
                    </div>


                </div>
            </div>


            <div style="display:flex;margin-top: 4rem;margin-left: 6rem">
                <div style="width: 500px;height: 280px;background-color: #EAEAEA;border: none;
    border-radius: 20px;">

                    <div style="margin-top: 4rem;margin-left: 4rem">
                        <div style="width: 128px;height: 36px;font-weight: 400;
    font-style: normal;font-size: 32px;">
                            职位描述
                        </div>
                        <div style="font-weight: 200;
    font-style: normal;
    text-align: left;font-size: 24px;padding-top: 2rem">
                           了解具体职位描述
                        </div>
                    </div>

                    <div style="width: 140px;height: 40px;background-color: rgba(3, 100, 210, 1);
    border: none;
    border-radius: 20px;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;
    font-size: 16px;text-align: center;padding-top: 0.5rem;float: right ;margin-right: 2rem;margin-top: 4rem">
                        <a href="{{route('occupation',['q'=>'info'])}}" style="font-size: 16px;color: #FFFFFF;margin-top: 1rem">了解更多</a>
                    </div>


                </div>
            </div>
        </div>
    </div>










@endsection


