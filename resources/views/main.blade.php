<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','正域')</title>
    <script src="{{URL::asset('js/tailwind.js')}}"></script>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/global.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/header.css')}}">
</head>
<body>

<div class="text-gray-900 text-sm fixed top-0 right-0 left-0 shadow-xl"
     style="z-index:10000;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;width: 100%;margin: auto;height: 130px;">
    <nav style="background-color: rgba(51, 51, 51, 1); height:35px" class="text-white  py-3 flex">
        <div style="width: 80%;">

        </div>
        <style>
            .nav-title a:hover {
                text-decoration: underline
            }
        </style>
        <div id="nav-title" class="nav-title flex items-center space-x-8"
             style="width:255px;margin-right:162px;margin-top: 7px">
            <a style="font-size: 14px;" href="/service?q=gold">服务</a>
            <a style="font-size: 14px" href="{{route('supply')}}">伙伴</a>
            <a style="font-size: 14px" href="{{route('occupation')}}">职业</a>
            <a style="font-size: 14px" href="/about">关于我们</a>
        </div>
        <div class="nav-title flex" style="margin-right: 2rem">
            <a href="">中文</a>
        </div>
    </nav>
    <div class="bg-white text-black flex justify-between pr-8 " style="height: 95px;">
        <div style="margin-left:240px;margin-top: 40px;font-family: 'Arial Normal', 'Arial', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 16px;
    color: #7F7F7F;" class="flex">
            <a href="/"><img style="width:288px;height:25px;" src="{{URL::asset('/images/首页/u125.png')}}" alt=""></a>
            <div class="flex space-x-8" style="margin-left: 100px;margin-top: 8px">
                <div>
                    <a class="header-a" @if(!empty($type) && $type == 'cal') style="color:#7F7F7F !important;"
                       @else style="color:#303030;"
                       @endif href="{{route('cate',['type'=>'protected'])}}">保护人们在危险环境安全工作</a>
                </div>
                <div>
                    <a class="header-a" @if(!empty($type) && $type == 'protected') style="color:#7F7F7F !important;"
                       @else style="color:#303030;"
                       @endif href="{{route('cate',['type'=>'cal'])}}">智慧计量工具</a>
                </div>
            </div>
        </div>
        <div style="margin-left:13rem;margin-top: 1rem;margin-right: 205px;" class="flex items-center space-x-3  ">
            <input style="    width: 182px;
    height: 25px;
    background: inherit;
    background-color: rgba(255, 255, 255, 1);
    box-sizing: border-box;
    border-width: 1px;
    border-style: solid;
    border-color: rgba(159, 156, 156, 1);
    border-radius: 0px;
    -moz-box-shadow: none;
    -webkit-box-shadow: none;
    box-shadow: none;" id="search_product_input" type="text">
            <div>
                <img id="search_product_btn" src="{{URL::asset('/images/首页/u115.svg')}}" style="cursor: pointer;">
            </div>
        </div>

        <script>
            $(document).on('click', '#search_product_btn', function () {
                if (!$('#search_product_input').val() || $('#search_product_input').val() == null) {
                    alert('请输入产品名称');
                } else {
                    window.location.href = '{{URL::route('search','')}}' + '/' + $('#search_product_input').val();
                }
            })
        </script>
    </div>
</div>

<div class="main-content">
    @yield("content")
    <div id="cookie_box" style="display: none;">
        <div
            style="width: 100%;height: 1000px;background-color: #CCCCCC;opacity: 0.6;position: fixed;z-index: 999;top:0;"></div>
        <div
            style="width: 700px;height: 200px;position: fixed;top: 50%;left:27%;background-color: #FFFFFF; z-index: 1000;">
            <div style="font-size: 16px;
    font-weight: 500;
    margin-left: 30px;
    margin-top: 30px;">我们尊重您的隐私
            </div>
            <div style="color: #646464;
    font-size: 14px;
    margin-top: 3px;
    margin-left: 30px;">点击"接受全部 Cookie"即表示您同意将 Cookie 存储在您的设备上，以增强网站导航、分析网站使用情况并协助我们开展营销和性能改进活动。
            </div>
            <div style="width: 158px;
    height: 36px;
    font-family: 'PingFangSC-Regular', 'PingFang SC', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 15px;
    line-height: 36px;
    text-align: center;
    color: #FFFFFF;
    background: inherit;
    background-color: rgba(3, 100, 210, 1);
    border: none;
    border-radius: 20px;
    margin-top: 29px;
    margin-left: 500px;
cursor: pointer;" onclick="allow_cookie();">接受全部 Cookie
            </div>
        </div>
    </div>
</div>

<footer class="text-white"
        style="width: 100%;margin:auto;height: auto;margin-top:5rem;font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 20px;">
    <div class="to-top" id="to-top"
         style="width:3.35rem;text-align:center;float:right;margin-top:-4rem;margin-right:5rem;cursor: pointer;">
        <div class="to-top-icon"
             style='background: url("{{URL::asset('images/static/to_top.svg')}}");background-size: 100% 100%;background-repeat: no-repeat;height: 1rem;width: 1.8rem;margin: 0 auto;'></div>
        <div class="to-top-text" style="font-size:0.8rem;color: #303030;margin-top: 0.3rem;">回到顶部</div>
    </div>
    <div style="width: 100%">
        <div class="w-full" style="height: 400px;background-color: rgba(72, 72, 72, 1);">
            <div class="flex" style="margin-left: 240px;">
                <div class=" w-3/4 " style="height: 300px;">
                    <div class="flex justify-around  ">
                        <div style="background-color: rgba(72, 72, 72, 1);" class="w-[23rem]">
                            <div class="flex" style="height: 26px;margin-top: 3rem">
                                <img src="{{URL::asset('/images/首页/u38.svg')}}" alt="">
                                <img src="{{URL::asset('/images/首页/u34.svg')}}" alt="">
                                <img src="{{URL::asset('/images/首页/u35.svg')}}"
                                     style="width: 14px;height: 15px;margin-top: 6px;" alt="">
                                <img src="{{URL::asset('images/首页/u36.svg')}}" alt="" style="margin-left:-14px;">
                                <div
                                    style="width:12px;height: 2px;background-color: rgba(255, 255, 255, 1);margin-top: 23px;margin-left: -22px;">
                                    <div style="visibility: hidden">
                                        <p>aaa</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-[46rem]">

                        </div>
                        <div class="flex w-[23rem] " style="margin-top: 3rem">
                            <img style="height: 30px;margin-left: -3.2rem;"
                                 src="{{URL::asset('/images/首页/u30.png')}}" alt="">
                            <a href="/cases" style="height: 22px;font-size: 20px;padding-left: 1rem"> 客户故事</a>

                        </div>
                        <div class="ml-3 flex w-[23rem] " style="margin-top: 3rem">
                            <img style="height: 30px;margin-left: -3.2rem;"
                                 src="{{URL::asset('/images/首页/u31.png')}}" alt="">
                            <a href="/news" style="height: 22px;font-size: 20px;padding-left: 1rem">新闻活动</a>
                        </div>
                    </div>
                    <div class="flex h-[300px] justify-around mt-[5rem]">
                        <div class="flex flex-col space-y-3 w-[46rem]">
                            <div>
                                <a style="font-size: 20px" href="{{route('cate')}}">业务</a>
                            </div>
                            <div>
                                <a style="font-size: 20px"
                                   href="{{route('cate',['type'=>'protected'])}}">保护人们在危险环境中安全工作</a>
                            </div>
                            <div>
                                <a style="font-size: 20px" href="{{route('cate',['type'=>'cal'])}}">智慧工业计量</a>
                            </div>

                        </div>
                        <div class="flex flex-col space-y-3 w-[26rem]">
                            <div>
                                <a style="font-size: 20px" href="{{route('service')}}">服务</a>
                            </div>
                            <div>
                                <a style="font-size: 20px" href="{{route('supply')}}#foward">共同推进行业前进</a>
                            </div>
                            <div>
                                <a style="font-size: 20px" href="{{route('brand')}}">服务的品牌</a>
                            </div>
                            <div>
                                <a style="font-size: 20px" href="{{route('cases')}}">案例</a>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-3 w-[23rem]">
                            <div>
                                <a style="font-size: 20px" href="{{route('occupation')}}">职业</a>
                            </div>
                            <div>
                                <a style="font-size: 20px" href="{{route('occupation')}}#jiazhiguan">价值观</a>
                            </div>
                            <div>
                                <a style="font-size: 20px" href="{{route('occupation',['q'=>'info'])}}">职业描述</a>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-3 w-[23rem]">
                            <div>
                                <a style="font-size: 20px" href="/about">关于我们</a>
                            </div>
                            <div>
                                <a style="font-size: 20px" href="/about">我们是正域</a>
                            </div>
                            <div>
                                <a style="font-size: 20px" href="/about">企业文化</a>
                            </div>
                            <div>
                                <a style="font-size: 20px" href="/cert">企业荣誉</a>
                            </div>
                            <div>
                                <a style="font-size: 20px" href="/connect">联系我们</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="w-1/4 flex flex-col justify-center space-y-6 mt-[10rem]">
                    <div>
                        <div style="width: 68px;height: 68px;">
                            <img style="width: 68px;height: 68px;" src="{{URL::asset('/images/首页/u28.png')}}" alt="">
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <div style="width: 31px;height: 25px;">
                            <img style="width: 31px;height: 25px;" src="{{URL::asset('/images/首页/u14.svg')}}" alt="">
                        </div>
                        <div style="width: 31px;height: 25px;margin-left: 1rem">
                            <img src="{{URL::asset('/images/首页/u15.svg')}}" alt="">
                        </div>
                    </div>
                    <div>
                        <div>
                            <span style="font-size: 20px">咨询服务</span>
                        </div>
                        <div>
                            <span style="font-size: 20px">400-0000-000</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="flex text-white space-y-2"
             style="height:50px;background-color: rgba(48, 48, 48, 1);font-size: 16px;">
            <div class="flex w-3/4   space-y-2" style="margin-left: 240px;">
                <div style="line-height: 2.45rem;">
                    <a class="space-y-2" href="">©️ 2022 上海正域自动化设备有限公司</a>
                </div>
                <div style="margin-left: 15px;">
                    <a href="https://beian.miit.gov.cn"> @if(!empty($sys_icp->value)) {{$sys_icp->value}} @endif </a>
                </div>
                <div style="margin-left: 15px;">
                    <a href="https://beian.miit.gov.cn"> @if(!empty($sys_wa->value)) {{$sys_wa->value}} @endif </a>
                </div>

            </div>
            <div class="flex w-1/4 space-x-2">
                <a href="javascript:;" onclick="showCookikBox();">Cookies</a>
                <a href="{{route('private')}}">隐私声明</a>
                <a href="{{route('coInfo')}}">企业信息</a>
            </div>
        </div>
    </div>
</footer>

<script>
    $("#to-top").click(function () {
        $('body,html').animate({
                scrollTop: 0
            },
            500);
        return false;
    });

    const allow_get_cookie = localStorage.getItem("allow_get_cookie");
    if (allow_get_cookie == null) {
        $('#cookie_box').show();
    }

    function allow_cookie() {
        localStorage.setItem("allow_get_cookie", true)
        $('#cookie_box').hide();
    }

    function showCookikBox() {
        $('#cookie_box').show();
    }
</script>

</body>
</html>
