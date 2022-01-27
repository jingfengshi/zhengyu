<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title','正域')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/global.css')}}">
</head>
<body>

<div class="text-gray-900 text-sm fixed top-0 right-0 left-0 shadow-xl"
     style="z-index:9999;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;">
    <nav style="background-color: rgba(51, 51, 51, 1); height:35px" class="text-white px-4 py-3 flex justify-end">
        <div class="flex items-center space-x-8" style="margin-right: 15rem;margin-top: 7px">
            <a href="/service">服务</a>
            <a href="/brand">伙伴</a>
            <a href="/connect">职业</a>
            <a href="/about">关于我们</a>
        </div>
        <div class="flex" style="margin-right: 2rem">
            <a href="">中文</a>
        </div>
    </nav>
    <div class="bg-white text-black flex justify-between py-6 pr-8 ">
        <div style="margin-left:13rem;margin-top: 1rem;font-family: 'Arial Normal', 'Arial', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 16px;
    color: #7F7F7F;" class="flex">
            <a href="/"><img style="width:288px;height:25px;" src="{{URL::asset('/images/首页/u125.png')}}" alt=""></a>
            <div class="flex space-x-8" style="margin-left: 5rem;margin-top: 8px">
                <div>
                    <a href="">保护人们在危险环境安全工作</a>
                </div>
                <div>
                    <a href="">智慧计量工具</a>
                </div>
            </div>

        </div>
        <div style="margin-left:13rem;margin-top: 1rem;" class="flex items-center space-x-3  mr-8">
            <input class="border-black-600 border-2" type="text">
            <div>
                <img src="{{URL::asset('/images/首页/u115.svg')}}" alt="">
            </div>
        </div>

    </div>
</div>

<div class="main-content">@yield("content")</div>

<footer class="text-white"
        style="width: 100%;height: auto;margin-top:5rem;font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 20px;">
    <div class="to-top" id="to-top"
         style="width:3.35rem;text-align:center;float:right;margin-top:-4rem;margin-right:5rem;cursor: pointer;">
        <div class="to-top-icon"
             style='background: url("{{URL::asset('images/static/to_top.svg')}}");background-size: 100% 100%;background-repeat: no-repeat;height: 1rem;width: 1.8rem;margin: 0 auto;'></div>
        <div class="to-top-text" style="font-size:0.8rem;color: #303030;margin-top: 0.3rem;">回到顶部</div>
    </div>
    <div style="width: 100%">
        <div class="w-full" style="height: 400px;background-color: rgba(72, 72, 72, 1);">
            <div class="flex">
                <div class=" w-3/4 " style="height: 300px;">
                    <div class="flex">
                        <div class="w-2/3 " style="background-color: rgba(72, 72, 72, 1);">
                            <div class="flex" style="width: 400px;height: 26px;margin-top: 3rem;margin-left: 13rem">
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
                        <div class="w-1/3">
                            <div class="flex text-white space-x-28 justify-around"
                                 style="margin-top: 3rem;width:400px;font-size: 20px">
                                <div class="flex justify-around" style="width:140px">
                                    <img style="width: 30px;height: 30px;"
                                         src="{{URL::asset('/images/首页/u30.png')}}" alt="">
                                    <a href="/cases" style="width: 80px;height: 22px;"> 客户故事</a>
                                </div>
                                <div class="ml-3 flex justify-around" style="width:140px">
                                    <img style="width: 30px;height: 30px;"
                                         src="{{URL::asset('/images/首页/u31.png')}}" alt="">
                                    <a href="/news" style="width: 80px;height: 22px;">新闻活动</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex h-[300px] justify-around mt-[5rem] ml-[9rem]">
                        <div class="flex flex-col space-y-3">
                            <div>
                                <a href="">业务</a>
                            </div>
                            <div>
                                <a href="">保护人们在危险环境中安全工作</a>
                            </div>
                            <div>
                                <a href="">智慧工业计量</a>
                            </div>

                        </div>
                        <div class="flex flex-col space-y-3">
                            <div>
                                <a href="">服务</a>
                            </div>
                            <div>
                                <a href="">共同推进行业前进</a>
                            </div>
                            <div>
                                <a href="">服务的品牌</a>
                            </div>
                            <div>
                                <a href="">案例</a>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <div>
                                <a href="">职业</a>
                            </div>
                            <div>
                                <a href="">价值观</a>
                            </div>
                            <div>
                                <a href="">职业描述</a>
                            </div>
                            <div>
                                <a href="">智慧工业计量</a>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <div>
                                <a href="">关于我们</a>
                            </div>
                            <div>
                                <a href="">我们是正域</a>
                            </div>
                            <div>
                                <a href="">企业文化</a>
                            </div>
                            <div>
                                <a href="">企业荣誉</a>
                            </div>
                            <div>
                                <a href="">联系我们</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="w-1/4 flex flex-col justify-center space-y-6 mt-[10rem]">
                    <div>
                        <div style="width: 68px;height: 68px;">
                            <img src="{{URL::asset('/images/首页/u28.png')}}" alt="">
                        </div>
                    </div>
                    <div class="flex space-x-2">
                        <div style="width: 31px;height: 25px;">
                            <img src="{{URL::asset('/images/首页/u14.svg')}}" alt="">
                        </div>
                        <div style="width: 31px;height: 25px;">
                            <img src="{{URL::asset('/images/首页/u15.svg')}}" alt="">
                        </div>
                    </div>
                    <div>
                        <span>咨询服务</span>
                        <span>400-0000-000</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex text-white space-y-2"
             style="height:50px;background-color: rgba(48, 48, 48, 1);font-size: 16px;">
            <div class="flex w-3/4  space-x-3 ml-[12rem] space-y-2">
                <div style="line-height: 2.45rem;">
                    <a class="space-y-2" href="">@2022 上海正域自动化设备有限公司</a>
                </div>
                <div>
                    <a href=""> 沪ICP备17032420号 </a>
                </div>
                <div>
                    <a href="">沪公网安备 31010402018099号</a>
                </div>

            </div>
            <div class="flex w-1/4 space-x-2">
                <a href="">Cookies</a>
                <a href="">隐私声明</a>
                <a href="">企业信息</a>
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
        var confirm_res = window.confirm('是否允许我们使用 cookie 来增强用户体验。您可以选择将网络浏览器设置为拒绝 cookie，或在发送 cookie 时提醒您。');
        localStorage.setItem("allow_get_cookie",confirm_res)
    }

</script>

</body>
</html>
