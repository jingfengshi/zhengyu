@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/product_info.css')}}">
    <link rel="stylesheet" href="{{URL::asset('swiper/css/idangerous.swiper.css')}}">
    <script src="{{URL::asset('swiper/js/idangerous.swiper.min.js')}}"></script>



    <div style="width:100%;margin: auto" class="ytclass">
        <div class="nav" style="padding: 1.5rem 240px 1.45rem 176px;font-family: 'Arial Normal', 'Arial', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 16px;
    color: #484848;"><a href="/">首页</a> > @if($type =='protected')<a style="font-size: 16px;"
                                                           href="{{route('cate',['type'=>'protected'])}}">保护人们在危险环境安全工作</a> @else
                <a style="font-size: 16px;" href="{{route('cate',['type'=>'cal'])}}">智慧计量单位</a> @endif > 产品</div>
        <div class="product-info-title" style="width: 1320px;margin: 0 auto;font-family: 'Arial Normal', 'Arial', sans-serif;
    font-weight: 400;
    font-style: normal;font-size: 40px;
    color: #484848;
    line-height: 50px;">{{$product->title}}</div>

        <div class="product-info-box" style="width: 1320px;margin: 30px auto 0 auto;">
{{--            首图标题 --}}
            <div>
                <div>
                    {{isset($product->extra['f_title'])?$product->extra['f_title']:""}}
                </div>
                <div>
                    {{isset($product->extra['f_mark'])?$product->extra['f_mark']:""}}
                </div>

                <img src="{{URL::asset('uploads/'.$product->c_f_image)}}" alt="" style="width:1320px">

            </div>


            <div>
                <img src="{{URL::asset('uploads/'.$product->c_s_image)}}" alt="" style="width:1320px">
                <div>
                    {{isset($product->extra['s_desc'])?$product->extra['s_desc']:""}}
                </div>

                @if(!empty($product->c_video))
                    <button id="play" style="font-size: 16px;
    color: #FFFFFF;
    font-family: 'Arial Normal', 'Arial', sans-serif;
    font-weight: 400;
    font-style: normal;
    height: 2.7rem;
    line-height: 2.7rem;
    width: 12rem;
    background-color: rgba(3, 100, 210, 1);
    border-radius: 3rem;
    text-align: center;
    margin-top: 4rem;
    cursor: pointer;
    position: relative;
    left: 828px;
    top: -192px;
">
                        观看视频
                    </button>
                    <video id="diveoID" style="visibility:hidden" class="product-box-right-box-tab-box-item-video" src="{{URL::asset('uploads').'/'.$product->c_video}}" controls="controls">
                        您的浏览器不支持 video 标签。
                    </video>

                    <script>
                        $(function(){
                            $("#play").click(function(){
                                //此处写点击触发的操作
                                $(this).css("display","none");
                                //1、取得播放器的对象
                                var objVideo=$("#diveoID");
                                //2、调用视频播放API
                                $('#diveoID').css('visibility',"visible")
                                objVideo.play();

                                //视频停止API
                                //objVideo.pause();
                            });
                        });
                    </script>
                @endif

            </div>

            <div style="text-indent:20px">
                {{isset($product->extra['l_title'])?$product->extra['l_title']:""}}
                @if(!empty($product->properties))
                <div>
                    @foreach($product->properties as $pro)
                        <div>
                            {{$pro->name}}      {{$pro->value}}
                        </div>

                    @endforeach
                </div>
                @endif
                <img src="{{URL::asset('uploads/'.$product->c_l_image)}}" alt="" style="width:1320px">
            </div>
        </div>

        @if(!empty($product->file))
            <div class="product-info-file-box" style="width: 1440px;margin: 0 auto;">
                点击下载
                <a href="{{URL::asset('uploads').'/'.$product->file}}">{{$product->title}}</a>
                相关资料
            </div>
        @endif

        <div class="more-product-box" style="width: 1350px;margin: 0 auto;margin-top: 64px">
            <div class="more-product-box-title" style="margin-top: 30px;">想知道我们更多产品消息？</div>
            <div class="more-product-box-list-box swiper-container" style="width:1385px;height:281px;">
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
				<div class="ytdivinfo"></div>
            </div>
            <div class="arrow-box" style="margin-top:20px">
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
            //$(".product-info-box font").each(function () {
            //    $(this).css({'font-size': $(this).attr('size') / 3 + 'rem'})
            //})
			setTimeout(function(){
				$(".product-box-right-box-tab-box").css("line-height","30px");
			$(".product-box-right-box-tab-box p font").css("font-size","18px");
			},2000);
			
        })
    </script>
	<style type="text/css">
	.product-box-right-box-tab-box{
		line-height:30px;
	}
	.product-box-right-box-tab-box p font{
		font-size:18px;
	}
	.ytdivinfo{
		position:relative;
		margin-top:-288px;
		background-color:white;
		float:right;
		width:14px;
		height:251px
	}
	</style>

@endsection
