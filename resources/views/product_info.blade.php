@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/product_info.css')}}">
    <link rel="stylesheet" href="{{URL::asset('swiper/css/idangerous.swiper.css')}}">
    <script src="{{URL::asset('swiper/js/idangerous.swiper.min.js')}}"></script>



    <div style="width: 1920px;margin: auto" >
        <div class="nav" style="padding: 1.5rem 240px 1.45rem 240px;font-family: 'Arial Normal', 'Arial', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 16px;
    color: #484848;">首页 > @if($type =='protected')<a style="font-size: 16px;"
                                                           href="{{route('cate',['type'=>'protected'])}}">保护人们在危险环境安全工作</a> @else
                <a style="font-size: 16px;" href="{{route('cate',['type'=>'cal'])}}">智慧计量单位</a> @endif > 产品</div>
        <div class="product-info-title" style="width: 1440px;margin: 0 auto;font-family: 'Arial Normal', 'Arial', sans-serif;
    font-weight: 400;
    font-style: normal;font-size: 40px;
    color: #484848;
    line-height: 50px;">{{$product->title}}</div>

        <div class="product-info-box" style="width: 1440px;margin: 30px auto 0 auto;">
{{--            首图标题 --}}
            <div>
                <div>
                    {{isset($product->extra['f_title'])?$product->extra['f_title']:""}}
                </div>
                <div>
                    {{isset($product->extra['f_mark'])?$product->extra['f_mark']:""}}
                </div>

                <img src="{{URL::asset('uploads/'.$product->c_f_image)}}" alt="">

            </div>

            <div>
                <img src="{{URL::asset('uploads/'.$product->c_s_image)}}" alt="">
                <div>
                    {{isset($product->extra['s_desc'])?$product->extra['s_desc']:""}}
                </div>

                <video class="product-box-right-box-tab-box-item-video" src="{{URL::asset('uploads').'/'.$product->c_video}}" controls="controls">
                    您的浏览器不支持 video 标签。
                </video>
            </div>

            <div>
                {{isset($product->extra['l_title'])?$product->extra['l_title']:""}}
                @if(!empty($product->properties))
                <div>
                    @foreach($product->properties as $pro)
                        <div>
                            {{$pro->name}}
                        </div>
                        <div>
                            {{$pro->value}}
                        </div>
                    @endforeach
                </div>
                @endif
                <img src="{{URL::asset('uploads/'.$product->c_l_image)}}" alt="">
            </div>

        </div>

        @if(!empty($product->file))
            <div class="product-info-file-box" style="width: 1440px;margin: 0 auto;">
                点击下载
                <a href="{{URL::asset('uploads').'/'.$product->file}}">{{$product->title}}</a>
                相关资料
            </div>
        @endif

        <div class="more-product-box" style="width: 1440px;margin: 0 auto;">
            <div class="more-product-box-title" style="margin-top: 30px;">想知道我们更多产品消息？</div>
            <div class="more-product-box-list-box swiper-container">
                <div class="swiper-wrapper">
                    @foreach($categories as $cate)
                        <div class="more-product-box-list-box-item swiper-slide"
                             style='background: url("{{URL::asset('uploads').'/'.$cate->image}}"); background-size: 100% 100%; background-repeat: no-repeat;'>
                            <div class="more-product-box-list-box-item-mask"></div>
                            <a href="/cate/{{$cate->id}}">
                                <div
                                    class="more-product-box-list-box-item-button font-color-white text-overflow">{{$cate->name}}</div>
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
