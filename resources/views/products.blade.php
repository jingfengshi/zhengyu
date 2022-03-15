@extends("main")

@section("content")


    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/products.css')}}">
    <div style="width: 100%;margin: auto">
        <div class="nav" style="padding: 20px 240px 0 240px;
    font-family: 'Arial Normal', 'Arial', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 16px;
    color: #484848;"><a href="/">首页</a> > @if($product->category->type =='protected')<a style="font-size: 16px;"
                                                     href="{{route('cate',['type'=>'protected'])}}">保护人们在危险环境安全工作</a> @else
                <a style="font-size: 16px;color:#7F7F7F" href="{{route('cate',['type'=>'cal'])}}">智慧计量单位</a> @endif > 产品
        </div>

        <div class="top-banner"
             style='background: url({{URL::asset('images/static/pd1.png')}});background-size: 100% 100%;background-repeat: no-repeat;'>
            <div class="top-banner-title font-color-white">{{$product->category->name}}</div>
        </div>
    </div>


    <div style="width: 100%;margin: auto">
        <div class="product-box">
            @if(!empty($categories))
                <div class="product-box-left-box">
                    @foreach($categories as $category)
                        @if($category->type == $product->category->type)
                            <div class="product-box-left-item">
                                <div class="inline-block" style="float: left;margin-top: 9px;"><img
                                        src="{{URL::asset('images/static/check.svg')}}" alt=""></div>
                                <div class="inline-block product-box-left-item-nav" style="width: 200px">
                                    <a style="font-size: 1.15rem;
    color: #484848;" href="/cate/{{$category->id}}">{{$category->name}}</a> <a href="javascript:void(0)" class="excolitem" cl="+" >+</a>
                                    @foreach($category->products as $p)
                                        @if(!$p->is_creative)
                                        <div class="product-box-left-item-nav-child excolproduct"><a href="/product-info/{{$p->id}}">{{$p->title}}</a></div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        @endif


                    @endforeach
                </div>
            @endif

            <div class="product-box-right-box">
                <div class="product-box-right-box-nav">产品 / {{$product->category->name}} / {{$product->title}}</div>
                <div class="product-box-right-box-title">{{$product->title}}</div>
                <div class="product-box-right-box-banner-box">
                    <div class="product-box-right-box-banner-preview inline-block"><img
                            src="{{URL::asset('uploads/'.$product->image)}}" alt=""></div>
                    <div class="product-box-right-box-banner-list inline-block">
                        @if($product && $product->sub_image)
                            @foreach($product->sub_image as $img)
                                <div class="product-box-right-box-banner-item"><img
                                        src="{{URL::asset('uploads/'.$img)}}">
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="product-box-right-box-rightmost-box inline-block">
                        <div class="product-box-right-box-rightmost-cert"></div>
                        <div class="new-box font-color-white">NEW</div>
                    </div>
                </div>
                <div class="product-box-right-box-tab-list">
                    <div class="product-box-right-box-tab">
                        <div data-index="0" class="product-box-right-box-tab-item inline-block">优势与特点</div>
                        <div data-index="1" class="product-box-right-box-tab-item inline-block">应用范围</div>
                        <div data-index="2" class="product-box-right-box-tab-item inline-block">技术规格</div>
                        <div data-index="3" class="product-box-right-box-tab-item inline-block">外形尺寸</div>
                        <div data-index="4" class="product-box-right-box-tab-item inline-block">资料下载</div>
                        <div data-index="5" class="product-box-right-box-tab-item inline-block">视频介绍</div>
                        <div data-index="6" class="product-box-right-box-tab-item inline-block">现场安装</div>
                    </div>
                    <div class="product-box-right-box-tab-box">
                        <div class="product-box-right-box-tab-box-item"><h5 class="product-box-right-box-tab-box-item-title">优势与特点</h5>{!! $product->description !!}</div>
                        <div class="product-box-right-box-tab-box-item"><h5 class="product-box-right-box-tab-box-item-title">应用范围</h5>{{$product->apply_area}}</div>
                        <div class="product-box-right-box-tab-box-item" style="display:table">
                            <h5 class="product-box-right-box-tab-box-item-title" >技术规格</h5>
                            @foreach($product->extra3 as $type=>$value)
                             <div class="guigeitem">
								<h5 class="product-box-right-box-tab-box-item-title" style="margin-bottom:10px">{{$type}}</h5><hr/>
									@foreach($value as $k =>$v)
										<div class="techparm">
											<div class="teahparmtitle"><p>{{$k}}</p></div>
											<div class="techparmdesc">
												@foreach($v as $vv)
													{{$vv['value']}}
												@endforeach
											</div>
										</div>
									@endforeach
							</div>
							@endforeach
                        </div>
						<br/>
                        <div class="product-box-right-box-tab-box-item">
                            <h5 class="product-box-right-box-tab-box-item-title">外形尺寸</h5>
                            <img src="{{URL::asset('uploads/'.$product->sharp)}}" alt="" />
                        </div>
                        <div class="product-box-right-box-tab-box-item" style="margin-bottom:33px">
                             <h5 class="product-box-right-box-tab-box-item-title">资料下载</h5>
							 <div>
                              <img src="{{URL::asset('images/ipdf.png')}}" style="width:30px;float:left;margin-right:10px" /><a href="{{URL::asset('uploads').'/'.$product->file}}" class="zldownload">{{$product->file}}</a>
							  </div>
							 <div style="margin-top:29px"><hr/></div>
                        </div>
                        <div class="product-box-right-box-tab-box-item">
                        <h5 class="product-box-right-box-tab-box-item-title">视频介绍</h5>
                            <video class="product-box-right-box-tab-box-item-video" id="videocontrol" src="{{URL::asset('uploads').'/'.$product->video}}" controls="controls">
                                您的浏览器不支持 video 标签。
                            </video>
                        </div>
                        <div class="product-box-right-box-tab-box-item product-box-right-box-tab-box-item-install" style="max-width: 1104px;margin-top:40px">
                        <h5 class="product-box-right-box-tab-box-item-title">现场安装</h5>
                            @if($product)
                                <div style="width: 313px;height: 254px;display: inline-block; margin-right:20px">
                                    @if($product->install1)
                                        <img style="width: 313px;height: 218px" src="{{URL::asset('uploads/'.$product->install1)}}" alt="">
                                        @if($product->install1_desc)
                                            <div style="    padding-left: 20px;
    padding-top: 10px;">{{$product->install1_desc}}</div>
                                        @endif
                                    @endif
                                </div>

                                <div style="width: 313px;height: 254px;display: inline-block;margin-right:20px">
                                @if($product->install2)
                                    <img style="width: 313px;height: 218px" src="{{URL::asset('uploads/'.$product->install2)}}" alt="">
                                        @if($product->install2_desc)
                                            <div style="    padding-left: 20px;
    padding-top: 10px;">{{$product->install2_desc}}</div>
                                        @endif
                                @endif
                                </div>

                                <div style="width: 313px;height: 254px;display: inline-block">
                                @if($product->install3)
                                    <img style="width: 313px;height: 218px" src="{{URL::asset('uploads/'.$product->install3)}}" alt="">
                                        @if($product->install3_desc)
                                            <div style="    padding-left: 20px;
    padding-top: 10px;">{{$product->install3_desc}}</div>
                                        @endif
                                @endif
                                </div>

                            @endif
                        </div>
                    </div>
                </div>
                <div class="product-box-right-box-recommend-box" style="margin-top:55px;width:88%;height:287px">
                    <div class="product-box-right-box-recommend-title">推荐产品</div>
                    @if(!empty($recommendProducts))
                        @foreach($recommendProducts as $recommendProduct)
                            <div class="product-box-right-box-recommend-item inline-block" style="width:265px">
                                <a href="/product-info/{{$recommendProduct['id']}}">
                                    <img src="{{URL::asset('uploads/'.$recommendProduct['image'])}}" alt="" style="width:294px;height:auto;padding-left:53px">
                                    <div style="width:294px" class="product-box-right-box-recommend-item-title">{{$recommendProduct['title']}}</div>
                                </a>

                            </div>
                        @endforeach
                    @endIf
                </div>
            </div>
        </div>
    </div>

    <div style="clear: both;"></div>

    <script type="text/javascript">

        $(function () {
            // default show first product img
            $('.product-box-right-box-banner-preview').find('img').attr('src', $('.product-box-right-box-banner-item').first().find('img').attr('src'));
            // default show first tab
            $('.product-box-right-box-tab-item').removeClass('tab-item-active');
            $('.product-box-right-box-tab-item').first().addClass('tab-item-active');
            $('.product-box-right-box-tab-box-item').removeClass('tab-box-item-active');
            $('.product-box-right-box-tab-box-item').first().addClass('tab-box-item-active');
			var strzltxt=$(".zldownload").text().split('files/')[1];
			$(".zldownload").text(strzltxt);

			var strvideo=$("#videocontrol").attr("src");
			var st=strvideo.substring(strvideo.lastIndexOf('uploads/'))
			if(st=="uploads/"){
				$("#videocontrol").hide();
			}
			$(".product-box-right-box-tab-box").css("line-height","30px");
			$(".product-box-right-box-tab-box p font").css("font-size","17px");
			
			$(".excolitem").click(function(){
				var cureleattr=$(this).attr("cl");
				if(cureleattr=="+"){
					var allitem=$(this).nextAll(".excolproduct");
					$(allitem).show(500);
					$(this).attr("cl","-");
					$(this).text("-");
					$(this).css("color","red");
				}else{
					var allitem=$(this).nextAll(".excolproduct");
					$(allitem).hide(500);
					$(this).attr("cl","+");
					$(this).text("+");
					$(this).css("color","#0000006b");
				}
			});
			
			var curpathname=document.location.pathname;
			$(".product-box-left-box").find(".excolproduct").each(function(index,item){
				$(item).find("a").each(function(ins,item2){
					var strhref=$(item2).attr("href");
					if(strhref==curpathname){
						$(item).eq(index).show();
					}
				})
				
			});
        })

        $(document).on('mouseover', '.product-box-left-item', function () {
            $('.product-box-left-item').find('img').attr('src', '{{URL::asset('images/static/check.svg')}}');
            $('.product-box-left-item-child').removeClass('show');
            $(this).find('img').attr('src', '{{URL::asset('images/static/checked.svg')}}');
            $(this).find('.product-box-left-item-child').addClass('show');
        })

        $(document).on('mouseover', '.product-box-right-box-banner-item', function () {
            $('.product-box-right-box-banner-preview').find('img').attr('src', $(this).find('img').attr('src'));
        })

        $(document).on('mouseover', '.product-box-right-box-tab-item', function () {
            $('.product-box-right-box-tab-box-item').removeClass('tab-box-item-active');
            $('.product-box-right-box-tab-box-item').eq($(this).index()).addClass('tab-box-item-active');
        })

        var top_ = $('.product-box-right-box-tab').offset().top-118

        $(document).on('click', '.product-box-right-box-tab-item', function () {
            var index = $(this).attr('data-index')
            $(this).addClass('tab-item-active').siblings().removeClass('tab-item-active')
            $(window).scrollTop($('.product-box-right-box-tab-box-item').eq(index).offset().top - 180)
        })
		

    </script>
	<style type="text/css">
	.product-box-right-box-tab-box{
		line-height:30px;
	}
	.product-box-right-box-tab-box p font{
		font-size:16px !important;
		font-weight:300;
		color:#555555;
	}
	.guigeitem{
		float:left;
		width:400px;
	}
	.techparm{
		display:flex;
		border-bottom:1px solid #00000026;
	}
	.teahparmtitle{
		float:left;
	}
	.techparmdesc{
		float:left;
		margin-left:50px;
	}
	.excolproduct{
		display:none;
	}
	.excolitem{
		margin-left:15px;
		font-size:1.35rem;
		color:#0000006b;
	}
	</style>

@endsection
