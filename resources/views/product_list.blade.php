@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/product_list.css')}}">

    <div style="width:100%;height: auto;margin: auto">
        <div class="nav"><a href="/">首页 </a> > @if($cate->type =='protected')<a style="font-size: 16px;"
                                                               href="{{route('cate',['type'=>'protected'])}}">保护人们在危险环境安全工作</a> @else
                <a class="protypename" style="font-size: 16px;" href="{{route('cate',['type'=>'cal'])}}">智慧计量单位</a> @endif> 产品
        </div>

        <div class="top-banner"
             style='background: url("{{URL::asset('images/cat-info.jpg')}}");background-size: 100% 100%;background-repeat: no-repeat;'>
            <div class="top-banner-title font-color-white">{{$cate->name}}</div>
        </div>

        <div style="width: 100%;">
            <div class="desc-box">
                <div class="desc-box-top-text">
                    {{$cate ->desc}}
                </div>
                <div class="desc-box-icon-box">
                    <div class="desc-box-icon-item">
                        <div class="desc-box-icon"
                             style='width:113px;height:99px;background: url("{{URL::asset('uploads').'/'.$cate->f_icon}}");background-size: 100% 100%;background-repeat: no-repeat;'></div>
                        <div class="desc-box-icon-desc">{{empty($cate->f_icon_desc)?"":$cate->f_icon_desc}}</div>
                    </div>
                    <div class="desc-box-icon-item">
                        <div class="desc-box-icon"
                             style='width:102px;height:101px;background: url("{{URL::asset('uploads').'/'.$cate->s_icon}}");background-size: 100% 100%;background-repeat: no-repeat;'></div>
                        <div class="desc-box-icon-desc">{{empty($cate->s_icon_desc)?"":$cate->s_icon_desc}}</div>
                    </div>
                    <div class="desc-box-icon-item">
                        <div class="desc-box-icon"
                             style='width:117px;height:100px;background: url("{{URL::asset('uploads').'/'.$cate->l_icon}}");background-size: 100% 100%;background-repeat: no-repeat;'></div>
                        <div class="desc-box-icon-desc">{{empty($cate->l_icon_desc)?"":$cate->l_icon_desc}}</div>
                    </div>
                </div>
            </div>
        </div>

        <div style="width: 100%;">
            <div class="product-box">
                @if(!empty($allCategories))
                    <div class="product-box-left-box">
                        @foreach($allCategories as $cat)
                            <div class="product-box-left-item">
                                <div class="inline-block" style="float: left;margin-top: 17px;"><img
                                        @if($cat['id'] == $cate->id)
                                        src="{{URL::asset('images/static/checked.svg')}}"
                                        @else
                                        src="{{URL::asset('images/static/check.svg')}}"
                                        @endif></div>
                                <a href="/cate/{{$cat->id}}">
                                    <div class="inline-block product-box-left-item-nav"
                                         style="width: 200px">{{$cat->name}}</div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif

                <div class="product-box-right-box">
                    @foreach($cate->products->sortByDesc('sort') as $product )
                        @if(($product->is_creative ==0 && $product->on_sale==1))
                            <div class="product-box-right-item inline-block">
                                <a href="/product-info/{{$product->id}}">
                                    <div class="product-item-img"
                                         style='background: url("{{URL::asset('uploads').'/'.$product->image}}");/*background-size: 100% 100%;background-repeat: no-repeat;*/'></div>
                                </a>
                                <div class="tips-box">
                                    @if($product->is_new)
                                        <div class="new-box font-color-white">NEW</div>
                                    @endif
                                </div>
                                <a href="/product-info/{{$product->id}}">
                                    <div class="product-item-title">{{$product->title}}</div>
                                </a>
                                <div class="product-item-color proxinghao">颜色：{{$product->extra['color']}}</div>
                                <div class="product-item-power proxinghao">功率：{{$product->extra['power']}}</div>
                            </div>
                        @endif

                    @endforeach
                </div>
            </div>
        </div>

        <div style="clear: both;"></div>
    </div>


    <script type="text/javascript">
        $(document).on('mouseover', '.product-box-left-item', function () {
            $('.product-box-left-item').find('img').attr('src', '{{URL::asset('images/static/check.svg')}}');
            $('.product-box-left-item-child').removeClass('show');
            $(this).find('img').attr('src', '{{URL::asset('images/static/checked.svg')}}');
            $(this).find('.product-box-left-item-child').addClass('show');
        })
		$(function(){
			$(".product-box-right-box-tab-box").css("line-height","30px");
			$(".product-box-right-box-tab-box p font").css("font-size","18px");
			
			var curprotype=$(".protypename").text();
			if(curprotype=="智慧计量单位"){
				$(".proxinghao").hide();
				$(".product-item-img").css("height","267px");
				$(".product-item-img").css("background-repeat","no-repeat");
			}
		});
    </script>

@endsection
