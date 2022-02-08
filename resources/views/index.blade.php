@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/index.css')}}">
    <link rel="stylesheet" href="{{URL::asset('swiper/css/idangerous.swiper.css')}}">
    <script src="{{URL::asset('swiper/js/idangerous.swiper.min.js')}}"></script>

    <div style="width: 1920px;">
        {{--  banner  --}}
        <div class="banner-box">
            <div class="item active">
                <img
                    src="{{empty($banner_left->file)?URL::asset('uploads/default.png'):URL::asset('uploads').'/'.$banner_left->file}}">
                <div class="mask"></div>
                <div class="text" style="margin-left: 420px;margin-top: 15px;">
                    <div
                        style="font-family: 'PingFangSC-Semibold', 'PingFang SC Semibold', 'PingFang SC', sans-serif;font-weight: 650;font-style: normal;font-size: 40px;color:rgba(255, 255, 255, 0.996078431372549);">
                        让安全提高生产力。
                    </div>
                    <div class="hidden-box">
                        <div
                            style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 25px;color: rgba(255, 255, 255, 0.996078431372549);line-height: 38px;margin-top: 23px;">
                            专为保护危险环境中工作的人员而设计。
                        </div>
                        <div
                            style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 25px;color: rgba(255, 255, 255, 0.996078431372549);line-height: 38px;">
                            适应严峻的工业安全挑战，创造更安全的未来。
                        </div>
                        <div
                            style="width: 180px;height: 40px;font-family: 'PingFangSC-Regular', 'PingFang SC', sans-serif;font-weight: 400;font-style: normal;font-size: 16px;line-height: 40px;text-align: center;color: #FFFFFF;background: inherit;background-color: rgba(3, 100, 210, 1);border: none;border-radius: 20px;margin-top: 20px">
                            了解更多
                        </div>
                        <div class="links font-color-white">
                            <div><a href=""
                                    style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 13px;letter-spacing: normal;">广播通讯</a>
                            </div>
                            <div><a href=""
                                    style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 13px;letter-spacing: normal;">通讯显示</a>
                            </div>
                            <div><a href=""
                                    style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 13px;letter-spacing: normal;">照明</a>
                            </div>
                            <div><a href=""
                                    style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 13px;letter-spacing: normal;">风速仪</a>
                            </div>
                            <div><a href=""
                                    style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 13px;letter-spacing: normal;">障碍物标记</a>
                            </div>
                            <div><a href=""
                                    style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 13px;letter-spacing: normal;">声光报警</a>
                            </div>
                            <div><a href=""
                                    style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 13px;letter-spacing: normal;">声音信号</a>
                            </div>
                            <div><a href=""
                                    style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 13px;letter-spacing: normal;">视觉信号</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item ml-2">
                <img
                    src="{{empty($banner_right->file)?URL::asset('uploads').'/default.png':URL::asset('uploads').'/'.$banner_right->file}}">
                <div class="mask"></div>
                <div class="text" style="margin-left: 420px;margin-top: 15px;">
                    <div
                        style="font-family: 'PingFangSC-Semibold', 'PingFang SC Semibold', 'PingFang SC', sans-serif;font-weight: 650;font-style: normal;font-size: 40px;color:rgba(255, 255, 255, 0.996078431372549);">
                        智慧工业计量
                    </div>
                    <div class="hidden-box">
                        <div
                            style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 25px;color: rgba(255, 255, 255, 0.996078431372549);line-height: 38px;margin-top: 23px;">
                            专为科学流体的计量而设计。
                        </div>
                        <div
                            style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 25px;color: rgba(255, 255, 255, 0.996078431372549);line-height: 38px;">
                            保证产品质量、提高生产效率、促进科学技术。
                        </div>
                        <div
                            style="width: 180px;height: 40px;font-family: 'PingFangSC-Regular', 'PingFang SC', sans-serif;font-weight: 400;font-style: normal;font-size: 16px;line-height: 40px;text-align: center;color: #FFFFFF;background: inherit;background-color: rgba(3, 100, 210, 1);border: none;border-radius: 20px;margin-top: 20px">
                            了解更多
                        </div>
                        <div class="links font-color-white">
                            <div><a href=""
                                    style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 13px;letter-spacing: normal;">工业通讯</a>
                            </div>
                            <div><a href=""
                                    style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 13px;letter-spacing: normal;">温度测量</a>
                            </div>
                            <div><a href=""
                                    style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 13px;letter-spacing: normal;">物位测量</a>
                            </div>
                            <div><a href=""
                                    style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 13px;letter-spacing: normal;">压力测量</a>
                            </div>
                            <div><a href=""
                                    style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 13px;letter-spacing: normal;">液体、气体和蒸汽流量测量</a>
                            </div>
                            <div><a href=""
                                    style="font-family: 'Arial Normal', 'Arial', sans-serif;font-weight: 400;font-style: normal;font-size: 13px;letter-spacing: normal;">应用中液体、气体分析</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--  title  --}}
        <div class="header-bottom"
             style="font-family:'Arial Normal', 'Arial', sans-serif;font-weight:400;font-style:normal">我们每天都寻求更好的方法来提高
            <span
                style="font-family:'Arial Negreta', 'Arial Normal', 'Arial', sans-serif;font-weight:700;font-style:normal;">安全性</span>
            和 <span
                style="font-family:'Arial Negreta', 'Arial Normal', 'Arial', sans-serif;font-weight:700;font-style:normal;">生产力</span>
        </div>

        {{--  about  --}}
        <div class="about-box">
            <div class="mask"></div>
            <div class="text-top font-color-white">
                上海正域融合智能化和数字化，
                <br>
                应对安全的极限挑战，成为全球客户信赖和社会信赖的公司。
            </div>
            <a href="/about">
                <div class="more font-color-white">了解更多</div>
            </a>
        </div>

        <div class="title">创新产品</div>

        {{--  product  --}}
        <div class="product-box swiper-container">
            <div class="swiper-wrapper">
                @foreach($products as $product)
                    <div class="swiper-slide item">
                        <div class="item-top">
                            <a href="/product-info/{{$product->id}}">
                                <img src="{{URL::asset('/uploads').'/'.$product->image}}">
                            </a>
                        </div>
                        <div class="item-bottom">
                            <div class="item-bottom-title">
                                <a href="/product-info/{{$product->id}}">{{$product->title}}</a>
                            </div>
                            <div class="item-bottom-desc">
                                <a href="/product-info/{{$product->id}}">{{$product->desc}}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="product-arrow-box">
            <div class="pagination"></div>
        </div>

        {{--  news  --}}
        <div style="width: 1440px;
    height: 890px;
    margin: 100px auto;">
            <div class="left-box">
                <div class="left-box-about"
                     style='background: url("{{URL::asset('images/static/banner-3.jpg')}}"); background-size: 100% 100%; background-repeat: no-repeat;'>
                    <div style="
                    position: relative;
                    z-index: 999;
                    font-family: 'PingFangSC-Regular', 'PingFang SC', sans-serif;
                    font-weight: 400;
                    font-style: normal;
                    font-size: 40px;
                    color: #FFFFFF;
                    top: 65px;
left: 70px;">关于我们
                    </div>
                    <div style="position: relative;
    top: 110px;
    z-index: 999;
    font-weight: 400;
    font-style: normal;
    font-size: 25px;
    color: #FFFFFF;
    text-align: justify;
    text-justify: inter-word;
    line-height: 40px;
    font-family: 'PingFangSC-Regular', 'PingFang SC', sans-serif;
left: 70px;
width: 595px;">上海正域自动化设备有限公司于2010年6月成立，2010年8月正式投产，专注于研究声音与光产品的研发与生产……
                    </div>
                    <a href="/about">
                        <div style="float: right;
    position: relative;
    right: 100px;
    top: 100px;
    width: 140px;
    height: 40px;
    line-height: 40px;
    font-size: 16px;
    background-color: rgba(3, 100, 210, 1);
    text-align: center;
    cursor: pointer;
    font-family: 'Arial Normal', 'Arial', sans-serif;
    font-weight: 400;
    font-style: normal;
    border-radius: 20px;color: #FFFFFF;z-index: 999;">了解更多
                        </div>
                    </a>
                </div>
                <div class="left-box-about-mask"></div>
                <div class="left-box-invite"
                     style='background: url("{{URL::asset('images/static/invite.jpg')}}"); background-size: 100% 100%; background-repeat: no-repeat;'>
                    <div class="left-box-invite-title font-color-white">招贤纳士</div>
                    <div class="left-box-invite-desc">员工能持续不断地自我成长，并提供内外部研讨会和培训帮助员工找到合适的发展通道。</div>
                    <a href="/connect">
                        <div class="more left-box-invite-more font-color-white">了解更多</div>
                    </a>
                </div>
                <div class="left-box-invite-mask"></div>
            </div>
            <div class="right-box">
                <div class="right-box-top-img"
                     style='background: url("{{URL::asset('images/static/news.jpg')}}"); background-size: 100% 100%; background-repeat: no-repeat;'>
                    <div class="right-box-top-img-title">新闻活动</div>
                </div>
                <div class="right-box-top-img-mask"></div>
                <div class="news">
                    @foreach($news as $news_item)
                        <div class="news-item">
                            <div class="news-item-left">
                                <a href="/news/{{$news_item->id}}"><img
                                        src="{{URL::asset('uploads').'/'.$news_item->cover}}"></a>
                            </div>
                            <div class="news-item-right">
                                <a href="/news/{{$news_item->id}}">
                                    <div class="news-item-right-title">{{$news_item->title}}</div>
                                </a>
                                <a href="/news/{{$news_item->id}}">
                                    <div class="news-item-right-desc">{{$news_item->desc}}</div>
                                </a>
                                <a href="/news/{{$news_item->id}}">
                                    <div class="news-item-right-more"> > 更多信息</div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <a href="/news">
                    <div style="
position: relative;
    z-index: 999;
    float: right;
    width: 140px;
    height: 40px;
    line-height: 40px;
    font-size: 16px;
    background-color: rgba(3, 100, 210, 1);
    text-align: center;
    cursor: pointer;
    font-family: 'Arial Normal', 'Arial', sans-serif;
    font-weight: 400;
    font-style: normal;
    border-radius: 20px;
    color: #FFFFFF;
        right: 46px;
top: 35px;
">了解更多
                    </div>
                </a>
            </div>
        </div>

        <div style="font-family: 'PingFangSC-Regular', 'PingFang SC', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 45px;letter-spacing: normal;
    color: #333333;width: 1440px;
    margin: -40px auto 50px auto;">主要项目</div>

        {{--  project  --}}
        <div class="project swiper-container-project">
            <div class="swiper-wrapper">
                @foreach($cases as $case)
                    <div class="project-item swiper-slide"
                         style='background: url("{{URL::asset('uploads').'/'.$case->covers}}"); background-size: 100% 100%; background-repeat: no-repeat;'>
                        <div class="project-item-content-box">
                            <div
                                class="project-item-content-box-title font-color-white text-overflow">{{$case->title}}</div>
                            <div
                                class="project-item-content-box-desc font-color-white text-overflow">{{$case->desc}}</div>
                        </div>
                        <div class="project-item-content-box-mask"></div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="project-arrow-box">
            <div class="pagination-project"></div>
        </div>
    </div>

    <script type="text/javascript">
        $(document).on('mouseover', '.banner-box .item', function () {
            $('.banner-box .item').removeClass('active');
            $(this).addClass('active');
        })

        var _swiper = new Swiper('.swiper-container', {
            autoplay: 3000,
            slidesPerView: 3,
            slidesPerGroup: 1,
            pagination: '.pagination',
            paginationClickable: true,
        });

        var _swiper_project = new Swiper('.swiper-container-project', {
            autoplay: 3000,
            slidesPerView: 3,
            slidesPerGroup: 1,
            pagination: '.pagination-project',
            paginationClickable: true,
        });
    </script>

@endsection
