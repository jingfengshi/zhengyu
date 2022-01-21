@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="css/index.css">
    <link rel="stylesheet" href="swiper/css/idangerous.swiper.css">
    <script src="swiper/js/idangerous.swiper.min.js"></script>

    {{--  banner  --}}
    <div class="banner-box">
        <div class="item bg-green active">
            <img src="images/static/banner-1.png">
            <div class="mask"></div>
            <div class="text">
                <div class="font-color-white font-size-title">让安全提高生产力</div>
                <div class="hidden-box">
                    <div class="font-color-white font-size-s-title line-height-s-title mt-1rem">
                        专为保护危险环境中工作的人员而设计
                    </div>
                    <div class="font-color-white  font-size-s-title line-height-s-title">
                        适应严峻的工业安全挑战，创造更安全的未来
                    </div>
                    <div class="more font-color-white">了解更多</div>
                    <div class="links font-color-white">
                        <div><a href="">广播通讯</a></div>
                        <div><a href="">通讯显示</a></div>
                        <div><a href="">照明</a></div>
                        <div><a href="">风速仪</a></div>
                        <div><a href="">障碍物标记</a></div>
                        <div><a href="">声光报警</a></div>
                        <div><a href="">声音信号</a></div>
                        <div><a href="">视觉信号</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="item bg-black ml-5">
            <img src="images/static/banner-2.png">
            <div class="mask"></div>
            <div class="text">
                <div class="font-color-white font-size-title">智慧工业计量</div>
                <div class="hidden-box">
                    <div class="font-color-white font-size-s-title line-height-s-title mt-1rem">
                        专为科学流体的计量而设计
                    </div>
                    <div class="font-color-white font-size-s-title line-height-s-title">
                        保证产品质量、提高生产效率、促进科学技术
                    </div>
                    <div class="more font-color-white">了解更多</div>
                    <div class="links font-color-white">
                        <div><a href="">工业通讯</a></div>
                        <div><a href="">温度测量</a></div>
                        <div><a href="">物位测量</a></div>
                        <div><a href="">压力测量</a></div>
                        <div><a href="">液体、气体和蒸汽流量测量</a></div>
                        <div><a href="">应用中液体、气体分析</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--  title  --}}
    <div class="header-bottom">我们每天都寻求更好的方法来提高安全性和生产力</div>

    {{--  about  --}}
    <div class="about-box">
        <div class="mask"></div>
        <div class="text-top font-color-white">
            上海正域融合智能化和数字化，
            <br>
            应对安全的极限挑战，成为全球客户信赖和社会信赖的公司
        </div>
        <div class="more font-color-white">了解更多</div>
    </div>

    <div class="title">创新产品</div>

    {{--  product  --}}
    <div class="product-box swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide item">
                <div class="item-top"><a href=""><img src="images/static/banner-3.jpg" alt=""></a></div>
                <div class="item-bottom">
                    <div class="item-bottom-title"><a href="">视觉信号1</a></div>
                    <div class="item-bottom-desc"><a
                            href="">设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号</a></div>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="item-top"><a href=""><img src="images/static/banner-3.jpg" alt=""></a></div>
                <div class="item-bottom">
                    <div class="item-bottom-title"><a href="">视觉信号2</a></div>
                    <div class="item-bottom-desc"><a
                            href="">设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号</a></div>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="item-top"><a href=""><img src="images/static/banner-3.jpg" alt=""></a></div>
                <div class="item-bottom">
                    <div class="item-bottom-title"><a href="">视觉信号3</a></div>
                    <div class="item-bottom-desc"><a
                            href="">设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号</a></div>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="item-top"><a href=""><img src="images/static/banner-3.jpg" alt=""></a></div>
                <div class="item-bottom">
                    <div class="item-bottom-title"><a href="">视觉信号4</a></div>
                    <div class="item-bottom-desc"><a
                            href="">设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号</a></div>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="item-top"><a href=""><img src="images/static/banner-3.jpg" alt=""></a></div>
                <div class="item-bottom">
                    <div class="item-bottom-title"><a href="">视觉信号5</a></div>
                    <div class="item-bottom-desc"><a
                            href="">设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号</a></div>
                </div>
            </div>
            <div class="swiper-slide item">
                <div class="item-top"><a href=""><img src="images/static/banner-3.jpg" alt=""></a></div>
                <div class="item-bottom">
                    <div class="item-bottom-title"><a href="">视觉信号6</a></div>
                    <div class="item-bottom-desc"><a
                            href="">设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号设别信号</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-arrow-box">
        <div class="pagination"></div>
    </div>

    {{--  news  --}}
    <div class="news-box">
        <div class="left-box">
            <div class="left-box-about"
                 style='background: url("images/static/banner-3.jpg"); background-size: 100% 100%; background-repeat: no-repeat;'>
                <div class="title left-box-about-title font-color-white">关于我们</div>
                <div class="left-box-about-desc">上海正域自动化设备有限公司于2010年6月成立，2010年8月正式投产，专注于研究声音与光产品的研发与生产……</div>
                <div class="more left-box-about-more font-color-white">了解更多</div>
            </div>
            <div class="left-box-about-mask"></div>
            <div class="left-box-invite"
                 style='background: url("images/static/invite.jpg"); background-size: 100% 100%; background-repeat: no-repeat;'>
                <div class="title left-box-invite-title" font-color-white>招贤纳士</div>
                <div class="left-box-invite-desc">员工能持续不断地自我成长，并提供内外部研讨会和培训帮助员工找到合适的发展通道</div>
                <div class="more left-box-invite-more font-color-white">了解更多</div>
            </div>
            <div class="left-box-invite-mask"></div>
        </div>
        <div class="right-box">
            <div class="right-box-top-img"
                 style='background: url("images/static/news.jpg"); background-size: 100% 100%; background-repeat: no-repeat;'>
                <div class="title right-box-top-img-title">新闻活动</div>
            </div>
            <div class="right-box-top-img-mask"></div>
            <div class="news">
                <div class="news-item">
                    <div class="news-item-left">
                        <a href=""><img src="images/static/newsitem.jpg" alt=""></a>
                    </div>
                    <div class="news-item-right">
                        <div class="news-item-right-title text-overflow">2021年南宁集装箱码头自动化推进与技术交流会</div>
                        <div class="news-item-right-desc">
                            信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品
                        </div>
                        <div class="news-item-right-more"> > 更多信息</div>
                    </div>
                </div>
                <div class="news-item">
                    <div class="news-item-left">
                        <img src="images/static/newsitem.jpg" alt="">
                    </div>
                    <div class="news-item-right">
                        <div class="news-item-right-title text-overflow">2021年南宁集装箱码头自动化推进与技术交流会</div>
                        <div class="news-item-right-desc">
                            信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品
                        </div>
                        <div class="news-item-right-more"> > 更多信息</div>
                    </div>
                </div>
                <div class="news-item">
                    <div class="news-item-left">
                        <img src="images/static/newsitem.jpg" alt="">
                    </div>
                    <div class="news-item-right">
                        <div class="news-item-right-title text-overflow">2021年南宁集装箱码头自动化推进与技术交流会</div>
                        <div class="news-item-right-desc">
                            信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品信号设备产品
                        </div>
                        <div class="news-item-right-more"> > 更多信息</div>
                    </div>
                </div>
            </div>
            <div class="more right-box-more font-color-white">了解更多</div>
        </div>
    </div>

    <div class="title" style="margin-top: -4rem">主要项目</div>

    {{--  project  --}}
    <div class="project swiper-container-project">
        <div class="swiper-wrapper">
            <div class="project-item swiper-slide"
                 style='background: url("images/static/project.jpg"); background-size: 100% 100%; background-repeat: no-repeat;'>
                <div class="project-item-content-box">
                    <div class="project-item-content-box-title font-color-white">中铁集团</div>
                    <div class="project-item-content-box-desc font-color-white">数字无线通讯系统</div>
                </div>
                <div class="project-item-content-box-mask"></div>
            </div>
            <div class="project-item swiper-slide"
                 style='background: url("images/static/project.jpg"); background-size: 100% 100%; background-repeat: no-repeat;'>
                <div class="project-item-content-box">
                    <div class="project-item-content-box-title font-color-white">中铁集团</div>
                    <div class="project-item-content-box-desc font-color-white">数字无线通讯系统</div>
                </div>
                <div class="project-item-content-box-mask"></div>
            </div>
            <div class="project-item swiper-slide"
                 style='background: url("images/static/project.jpg"); background-size: 100% 100%; background-repeat: no-repeat;'>
                <div class="project-item-content-box">
                    <div class="project-item-content-box-title font-color-white">中铁集团</div>
                    <div class="project-item-content-box-desc font-color-white">数字无线通讯系统</div>
                </div>
                <div class="project-item-content-box-mask"></div>
            </div>
            <div class="project-item swiper-slide"
                 style='background: url("images/static/project.jpg"); background-size: 100% 100%; background-repeat: no-repeat;'>
                <div class="project-item-content-box">
                    <div class="project-item-content-box-title font-color-white">中铁集团</div>
                    <div class="project-item-content-box-desc font-color-white">数字无线通讯系统</div>
                </div>
                <div class="project-item-content-box-mask"></div>
            </div>
        </div>
    </div>
    <div class="project-arrow-box">
        <div class="pagination-project"></div>
{{--        <div class="left-arrow"><img src="images/static/left.svg" alt=""></div>--}}
{{--        <div class="right-arrow"><img src="images/static/left.svg" alt=""></div>--}}
    </div>

    <script type="text/javascript">
        $(document).on('mouseover', '.banner-box .item', function () {
            $('.banner-box .item').removeClass('active');
            $(this).addClass('active');
        })

        var _swiper = new Swiper('.swiper-container', {
            // loop: true,
            autoplay: 3000,
            slidesPerView: 3,
            slidesPerGroup: 1,
            pagination: '.pagination',
            paginationClickable: true,
        });

        var _swiper_project = new Swiper('.swiper-container-project', {
            // loop: true,
            autoplay: 3000,
            slidesPerView: 3,
            slidesPerGroup: 1,
            pagination: '.pagination-project',
            paginationClickable: true,
        });

    </script>

@endsection
