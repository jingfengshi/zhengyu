<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <style>
            .mainBody{
                padding-left:11rem;
                width:95%;
                height:50rem;
                padding-top: 2rem;
            }
            li{
                list-style: none;
                font-size:1rem;
            }
            .tileLi{
                float: left;
                padding-right:5%;
            }
            .classLi{
                width: 20rem;
                height: 6rem;
                line-height: 6rem;
            }
            .classLi div{
                width: 26rem;
                height: 6rem;
            }
            .banner{
                width:65rem;
                height:36rem;
                padding-top: 1rem;
            }
            #floatUl li{
                float: left;
                padding-left:1.5rem;
                padding-bottom:1.5rem;
            }
            .floatUlDiv{
                width:20rem;
                height:20rem;
                background-color:whitesmoke;
                border-radius: 0rem 0rem 1rem 1rem;
            }

            .floatUlDivDiv {
                width:20rem;height:10rem;overflow:hidden;
            }

            .floatUlDivDivFont {
                padding-left: 3rem;
                padding-top: 3rem;
            }

            .floatUlDiv div img{
                width:20rem;height:20rem;
            }

            .moreProduct{
                background-color: blue;
                width: 7rem;
                height: 2rem;
                float: right;
                text-align: center;
                position: relative;
                top: 4.5rem;
                right: 2rem;
                line-height: 2rem;
                border-radius: 3rem;
                font-size: 0.5rem;
                color:whitesmoke;
            }
            .modelTitleDiv{
                text-align: center; font-size:1.5rem;width: 95rem;
            }

            .modelThreeOnePartDiv{
                width: 41.5rem;height: 12rem;background-color: green;border-radius: 1rem; overflow:hidden;
            }
            .modelThreeOnePartDiv img{
                width: 41.5rem;height: 12rem;
            }

            .modelThree ul {
                float:left;width:100%
            }
            .modelThree ul li {
                display:inline-block;
                padding-left:2rem;
            }

            .ulOnePartDivFont{
                position: relative;
                top: -7rem;
                left: 17rem;
                color: whitesmoke;
            }

            .ulTwoPartDivFont1{
                position: relative;
                top: -10rem;
                left: 1rem;
                color: whitesmoke;
            }
            .ulTwoPartDivFont2{
                position: relative;
                top: -7rem;
                left: 1rem;
                color: whitesmoke;
            }

            .ulTwoPartDivFont3{
                position: relative;
                top: -7rem;
                left: 1rem;
                color: whitesmoke;
                font-size:1rem;
            }

            .modelThreeTwoPartDiv{
                width: 27rem;
                height: 12rem;
                border-radius: 1rem;
                overflow: hidden;
            }
            .callUs{
                background-color: blue;
                width: 7rem;
                height: 2rem;
                float: right;
                text-align: center;
                position: relative;
                top: -4.5rem;
                right: 54rem;
                line-height: 2rem;
                border-radius: 3rem;
                font-size: 0.5rem;
                color:whitesmoke;
            }
        </style>
    </head>
    <body >
    <div>
        <div class="modelOne">
            <div class="mainBody">
                <div style=" line-height:6rem; width:94rem; height:6rem;">
                    <ul>
                        <li class="tileLi">行业</li>
                        <li class="tileLi">产品</li>
                        <li class="tileLi">关键时刻值得信赖</li>
                        <li class="tileLi">项目</li>
                    </ul>
                </div>
                <div>
                    <img id="changeBanner" class="banner" src="./images/保护人们在危险环境安全工作/u214.jpg">
                    <div style="float:right;height:38rem;padding-right: 33rem;width:7rem">
                        <ul style="padding-left: 0rem">
                            <li class="classLi">
                                <div id="flny1" style="background-color:#81D3F8;color:#FFF;padding-left: 2rem;">
                                    风电能源
                                </div>
                                <div id="flny2" title="./images/保护人们在危险环境安全工作/u214.jpg" hidden style="background-color: white;color: #000;padding-left: 2rem;position: relative;right: 5rem;">
                                    <img style="width: 5.95rem;position: relative;right: 2rem;" src="./images/保护人们在危险环境安全工作/1642921002016.jpg">
                                    <div style="position: relative;bottom: 9rem;left: 5rem;">风电能源</div>
                                    <div style="position: relative;bottom: 13rem;left: 5rem;color: grey;">
                                        赋能风电能源
                                    </div>
                                </div>
                            </li>
                            <li class="classLi">
                                <div id="gkmt1" style="background-color:#58AFDC;color:#FFF;padding-left: 2rem;">
                                    港口码头
                                </div>
                                <div id="gkmt2" title="./images/保护人们在危险环境安全工作/u216.jpg" hidden style="background-color: white;color: #000;padding-left: 2rem;position: relative;right: 5rem;">
                                    <img style="width: 5.95rem;position: relative;right: 2rem;" src="./images/保护人们在危险环境安全工作/1642921002016.jpg">
                                    <div style="position: relative;bottom: 9rem;left: 5rem;">港口码头</div>
                                    <div style="position: relative;bottom: 13rem;left: 5rem;color: grey;">
                                        赋能智慧港口
                                    </div>
                                </div>
                            </li>
                            <li class="classLi">
                                <div id="hkxh1" style="background-color:#0392CC;color:#FFF;padding-left: 2rem;">
                                    航空信号
                                </div>
                                <div id="hkxh2" title="./images/保护人们在危险环境安全工作/u218.jpg" hidden style="background-color: white;color: #000;padding-left: 2rem;position: relative;right: 5rem;">
                                    <img style="width: 5.95rem;position: relative;right: 2rem;" src="./images/保护人们在危险环境安全工作/1642921002016.jpg">
                                    <div style="position: relative;bottom: 9rem;left: 5rem;">航空信号</div>
                                    <div style="position: relative;bottom: 13rem;left: 5rem;color: grey;">
                                        赋能航空信号
                                    </div>
                                </div>
                            </li>
                            <li class="classLi">
                                <div id="gcjx1" style="background-color:#017DC5;color:#FFF;padding-left: 2rem;">
                                    工程机械
                                </div>
                                <div id="gcjx2" title="./images/保护人们在危险环境安全工作/u221.jpg" hidden style="background-color: white;color: #000;padding-left: 2rem;position: relative;right: 5rem;">
                                    <img style="width: 5.95rem;position: relative;right: 2rem;" src="./images/保护人们在危险环境安全工作/1642921002016.jpg">
                                    <div style="position: relative;bottom: 9rem;left: 5rem;">工程机械</div>
                                    <div style="position: relative;bottom: 13rem;left: 5rem;color: grey;">
                                        赋能工程机械
                                    </div>
                                </div>

                            </li>
                            <li class="classLi">
                                <div id="syhg1" style="background-color:#0072C1;color:#FFF;padding-left: 2rem;">
                                    石油化工
                                </div>
                                <div id="syhg2" title="./images/保护人们在危险环境安全工作/u224.jpg" hidden style="background-color: white;color: #000;padding-left: 2rem;position: relative;right: 5rem;">
                                    <img style="width: 5.95rem;position: relative;right: 2rem;" src="./images/保护人们在危险环境安全工作/1642921002016.jpg">
                                    <div style="position: relative;bottom: 9rem;left: 5rem;">石油化工</div>
                                    <div style="position: relative;bottom: 13rem;left: 5rem;color: grey;">
                                        赋能石油化工
                                    </div>
                                </div>
                            </li>
                            <li class="classLi">
                                <div id="tljg1" src="./images/保护人们在危险环境安全工作/u221.jpg" style="background-color:#095C99;color:#FFF;padding-left: 2rem;">
                                    铁路交轨
                                </div>
                                <div id="tljg2" title="./images/保护人们在危险环境安全工作/u226.jpg" hidden style="background-color: white;color: #000;padding-left: 2rem;position: relative;right: 5rem;">
                                    <img style="width: 5.95rem;position: relative;right: 2rem;" src="./images/保护人们在危险环境安全工作/1642921002016.jpg">
                                    <div style="position: relative;bottom: 9rem;left: 5rem;">铁路交轨</div>
                                    <div style="position: relative;bottom: 13rem;left: 5rem;color: grey;">
                                        赋能铁路交轨
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

        </div>
        </div>
        <div class="modelTwo" >
            <div class="mainBody" style="height: 58rem;!important">

                <div style="float: left;width: 94rem;height: 58rem;padding-left: 1rem;background-color: lightgrey;">
                    <div class="modelTitleDiv"><h2>更强安全性   更高生产力</h2></div>
                    <ul id="floatUl">
                        <li>
                            <div class="floatUlDiv">
                                <div class="floatUlDivDiv">
                                    <img src="./images/保护人们在危险环境安全工作/u178.jpg">
                                </div>
                                <div class="floatUlDivDivFont">
                                    <span>广播通讯</span>
                                </div>
                                <div class="moreProduct">
                                    查看更多产品
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="floatUlDiv">
                                <div class="floatUlDivDiv">
                                    <img src="./images/保护人们在危险环境安全工作/u178.jpg">
                                </div>
                                <div class="floatUlDivDivFont">
                                    <span>广播通讯</span>
                                </div>
                                <div class="moreProduct">
                                    查看更多产品
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="floatUlDiv">
                                <div class="floatUlDivDiv">
                                    <img src="./images/保护人们在危险环境安全工作/u178.jpg">
                                </div>
                                <div class="floatUlDivDivFont">
                                    <span>广播通讯</span>
                                </div>
                                <div class="moreProduct">
                                    查看更多产品
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="floatUlDiv">
                                <div class="floatUlDivDiv">
                                    <img src="./images/保护人们在危险环境安全工作/u178.jpg">
                                </div>
                                <div class="floatUlDivDivFont">
                                    <span>广播通讯</span>
                                </div>
                                <div class="moreProduct">
                                    查看更多产品
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="floatUlDiv">
                                <div class="floatUlDivDiv">
                                    <img src="./images/保护人们在危险环境安全工作/u178.jpg">
                                </div>
                                <div class="floatUlDivDivFont">
                                    <span>广播通讯</span>
                                </div>
                                <div class="moreProduct">
                                    查看更多产品
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="floatUlDiv">
                                <div class="floatUlDivDiv">
                                    <img src="./images/保护人们在危险环境安全工作/u178.jpg">
                                </div>
                                <div class="floatUlDivDivFont">
                                    <span>广播通讯</span>
                                </div>
                                <div class="moreProduct">
                                    查看更多产品
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="floatUlDiv">
                                <div class="floatUlDivDiv">
                                    <img src="./images/保护人们在危险环境安全工作/u178.jpg">
                                </div>
                                <div class="floatUlDivDivFont">
                                    <span>广播通讯</span>
                                </div>
                                <div class="moreProduct">
                                    查看更多产品
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="floatUlDiv">
                                <div class="floatUlDivDiv">
                                    <img src="./images/保护人们在危险环境安全工作/u178.jpg">
                                </div>
                                <div class="floatUlDivDivFont">
                                    <span>广播通讯</span>
                                </div>
                                <div class="moreProduct">
                                    查看更多产品
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="modelThree" >
            <div class="mainBody" >
                <div class="modelTitleDiv"><h2>正域  值得信赖</h2></div>
                <div>
                    <ul>
                        <li>
                            <div class="modelThreeOnePartDiv" ><img src="./images/保护人们在危险环境安全工作/u178.jpg"></div>
                            <div class="ulOnePartDivFont">值得信赖</div>
                        </li>
                        <li >
                            <div class="modelThreeOnePartDiv" ><img src="./images/保护人们在危险环境安全工作/u178.jpg"></div>
                            <div class="ulOnePartDivFont">值得信赖</div>
                        </li>
                    </ul>

                </div>
                <div class="modelTitleDiv"><h2>我们的解决方案</h2></div>
                <div>
                    <ul>
                        <li>
                            <div class="modelThreeTwoPartDiv" ><img style="width:100%;height:100%;" src="./images/保护人们在危险环境安全工作/u178.jpg"></div>
                            <div class="ulTwoPartDivFont1">项目</div>
                            <div class="ulTwoPartDivFont2">中铁集团</div>
                            <div class="ulTwoPartDivFont3">数字无线通讯系统</div>
                        </li>

                        <li>
                            <div class="modelThreeTwoPartDiv" ><img style="width:100%;height:100%;" src="./images/保护人们在危险环境安全工作/u178.jpg"></div>
                            <div class="ulTwoPartDivFont1">项目</div>
                            <div class="ulTwoPartDivFont2">中铁集团</div>
                            <div class="ulTwoPartDivFont3">数字无线通讯系统</div>
                        </li>

                        <li>
                            <div class="modelThreeTwoPartDiv" ><img style="width:100%;height:100%;" src="./images/保护人们在危险环境安全工作/u178.jpg"></div>
                            <div class="ulTwoPartDivFont1">项目</div>
                            <div class="ulTwoPartDivFont2">中铁集团</div>
                            <div class="ulTwoPartDivFont3">数字无线通讯系统</div>
                        </li>
                    </ul>

                </div>
            </div>

            <div class="callUs">
                联系我们
            </div>
        </div>
    </div>
    </body>
</html>
<script src="https://cdn.staticfile.org/jquery/1.10.2/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $("#flny1").mouseenter(function(){
            $("#flny1").hide();
            $("#flny2").show();
            $("#changeBanner").attr("src", $("#flny2")[0].getAttribute("title"));
        });
        $("#flny1").mouseleave(function(){
            $("#flny1").show();
            $("#flny2").hide();
            $("#changeBanner").attr("src", $("#flny2")[0].getAttribute("title"));
        });

        $("#gkmt1").mouseenter(function(){
            $("#gkmt1").hide();
            $("#gkmt2").show();
            $("#changeBanner").attr("src", $("#gkmt2")[0].getAttribute("title"));
        });
        $("#gkmt1").mouseleave(function(){
            $("#gkmt1").show();
            $("#gkmt2").hide();
            $("#changeBanner").attr("src", $("#flny2")[0].getAttribute("title"));
        });

        $("#hkxh1").mouseenter(function(){
            $("#hkxh1").hide();
            $("#hkxh2").show();
            $("#changeBanner").attr("src", $("#hkxh2")[0].getAttribute("title"));
        });
        $("#hkxh1").mouseleave(function(){
            $("#hkxh1").show();
            $("#hkxh2").hide();
            $("#changeBanner").attr("src", $("#flny2")[0].getAttribute("title"));
        });

        $("#gcjx1").mouseenter(function(){
            $("#gcjx1").hide();
            $("#gcjx2").show();
            $("#changeBanner").attr("src", $("#gcjx2")[0].getAttribute("title"));
        });
        $("#gcjx1").mouseleave(function(){
            $("#gcjx1").show();
            $("#gcjx2").hide();
            $("#changeBanner").attr("src", $("#flny2")[0].getAttribute("title"));
        });


        $("#syhg1").mouseenter(function(){
            $("#syhg1").hide();
            $("#syhg2").show();
            $("#changeBanner").attr("src", $("#syhg2")[0].getAttribute("title"));
        });
        $("#syhg1").mouseleave(function(){
            $("#syhg1").show();
            $("#syhg2").hide();
            $("#changeBanner").attr("src", $("#flny2")[0].getAttribute("title"));
        });

        $("#tljg1").mouseenter(function(){
            $("#tljg1").hide();
            $("#tljg2").show();
            $("#changeBanner").attr("src", $("#tljg2")[0].getAttribute("title"));
        });
        $("#tljg1").mouseleave(function(){
            $("#tljg1").show();
            $("#tljg2").hide();
            $("#changeBanner").attr("src", $("#flny2")[0].getAttribute("title"));
        });
    });
</script>
