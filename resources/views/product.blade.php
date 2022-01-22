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
                height:38rem;
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
                width: 40rem;height: 12rem;background-color: green;border-radius: 1rem; overflow:hidden;
            }
            .modelThreeOnePartDiv img{
                width: 40rem;height: 12rem;
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
                width: 25rem;
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
                    <img class="banner" src="./images/保护人们在危险环境安全工作/u214.jpg">
                    <div style="float:right;height:38rem;padding-right: 33rem;width:7rem">
                        <ul>
                            <li class="classLi">
                                <div style="background-color:darkgreen">
                                    风电能源
                                </div>
                            </li>
                            <li class="classLi">
                                <div style="background-color:firebrick">
                                    港口码头
                                </div>
                            </li>
                            <li class="classLi">
                                <div style="background-color:fuchsia">
                                    航空信号
                                </div>

                            </li>
                            <li class="classLi">
                                <div style="background-color:palegreen">
                                    工程机械
                                </div>

                            </li>
                            <li class="classLi">
                                <div style="background-color:burlywood">
                                    石油化工
                                </div>

                            </li>
                            <li class="classLi">
                                <div style="background-color:lightblue">
                                    铁路交轨
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
