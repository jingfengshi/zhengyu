@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/product_info.css')}}">
    <link rel="stylesheet" href="{{URL::asset('swiper/css/idangerous.swiper.css')}}">
    <script src="{{URL::asset('swiper/js/idangerous.swiper.min.js')}}"></script>

    <div class="nav" style="padding: 1.5rem 240px 1.45rem 240px;font-family: 'Arial Normal', 'Arial', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 16px;
    color: #484848;">首页 > 保护人们在危险环境安全工作 > 产品</div>

    <div style="width: 1920px;">
        <div class="product-info-title" style="width: 1440px;margin: 0 auto;font-family: 'Arial Normal', 'Arial', sans-serif;
    font-weight: 400;
    font-style: normal;font-size: 40px;
    color: #484848;
    line-height: 50px;">{{$product->title}}</div>

        <div class="product-info-box" style="width: 1440px;margin: 0 auto;">{!! $product->description !!}</div>

        @if(!empty($product->file))
            <div class="product-info-file-box" style="width: 1440px;margin:40px auto 0 auto;">
                点击下载
                <a href="{{URL::asset('uploads').'/'.$product->file}}">{{$product->title}}</a>
                相关资料
            </div>
        @endif

        <div class="more-product-box" style="width: 1440px;margin: 0 auto;">
            <div class="more-product-box-title" style="margin-top: 30px;">想知道我们更多产品消息？</div>
            <div class="more-product-box-list-box swiper-container">
                <div class="swiper-wrapper">
                    @foreach($products as $product)
                        <div class="more-product-box-list-box-item swiper-slide"
                             style='background: url("{{URL::asset('uploads').'/'.$product->image}}"); background-size: 100% 100%; background-repeat: no-repeat;'>
                            <div class="more-product-box-list-box-item-mask"></div>
                            <a href="/product-info/{{$product->id}}">
                                <div
                                    class="more-product-box-list-box-item-button font-color-white text-overflow">{{$product->title}}</div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="arrow-box">
                <div class="pagination"></div>
            </div>
        </div>
    </div>

    <script>
        var _swiper = new Swiper('.swiper-container', {
            autoplay: 3000,
            slidesPerView: 4,
            slidesPerGroup: 1,
            pagination: '.pagination',
            paginationClickable: true,
        });

        $(document).ready(function () {
            $(".product-info-box font").each(function () {
                $(this).css({'font-size': $(this).attr('size') / 3 + 'rem'})
            })
        })
    </script>

@endsection
