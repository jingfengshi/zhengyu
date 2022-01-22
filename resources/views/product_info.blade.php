@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="css/product_info.css">
    <link rel="stylesheet" href="swiper/css/idangerous.swiper.css">
    <script src="swiper/js/idangerous.swiper.min.js"></script>

    <div class="nav">首页 > 保护人们在危险环境安全工作 > 产品</div>

    <div class="product-info-title">Z00系列数字电话机</div>

    <div class="product-info-box">产品详情</div>

    <div class="product-info-file-box">点击下载 xxxxxxxx使用说明书.pdf</div>

    <div class="more-product-box">
        <div class="more-product-box-title">想知道我们更多产品消息？</div>

        <div class="more-product-box-list-box swiper-container">
            <div class="swiper-wrapper">
                <div class="more-product-box-list-box-item swiper-slide" style='background: url("images/static/project.jpg"); background-size: 100% 100%; background-repeat: no-repeat;'>
                    <div class="more-product-box-list-box-item-mask"></div>
                    <div class="more-product-box-list-box-item-button font-color-white">广播通讯</div>
                </div>
                <div class="more-product-box-list-box-item swiper-slide" style='background: url("images/static/project.jpg"); background-size: 100% 100%; background-repeat: no-repeat;'>
                    <div class="more-product-box-list-box-item-mask"></div>
                    <div class="more-product-box-list-box-item-button font-color-white">广播通讯</div>
                </div>
                <div class="more-product-box-list-box-item swiper-slide" style='background: url("images/static/project.jpg"); background-size: 100% 100%; background-repeat: no-repeat;'>
                    <div class="more-product-box-list-box-item-mask"></div>
                    <div class="more-product-box-list-box-item-button font-color-white">广播通讯</div>
                </div>
                <div class="more-product-box-list-box-item swiper-slide" style='background: url("images/static/project.jpg"); background-size: 100% 100%; background-repeat: no-repeat;'>
                    <div class="more-product-box-list-box-item-mask"></div>
                    <div class="more-product-box-list-box-item-button font-color-white">广播通讯</div>
                </div>
                <div class="more-product-box-list-box-item swiper-slide" style='background: url("images/static/project.jpg"); background-size: 100% 100%; background-repeat: no-repeat;'>
                    <div class="more-product-box-list-box-item-mask"></div>
                    <div class="more-product-box-list-box-item-button font-color-white">广播通讯</div>
                </div>
                <div class="more-product-box-list-box-item swiper-slide" style='background: url("images/static/project.jpg"); background-size: 100% 100%; background-repeat: no-repeat;'>
                    <div class="more-product-box-list-box-item-mask"></div>
                    <div class="more-product-box-list-box-item-button font-color-white">广播通讯</div>
                </div>
            </div>
        </div>
        <div class="arrow-box">
            <div class="pagination"></div>
        </div>

    </div>

    <script>
        var _swiper = new Swiper('.swiper-container', {
            // loop: true,
            autoplay: 3000,
            slidesPerView: 4,
            slidesPerGroup: 1,
            pagination: '.pagination',
            paginationClickable: true,
        });
    </script>

@endsection
