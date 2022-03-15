@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/brand.css')}}">
    <div style="width: 100%;height: auto;margin: auto">
        <style>
            .cases-top-title{
                padding: 2.8rem 240px 1.45rem 240px;
            }

            .cases-top-title a{
                margin-right: 2.4rem;
                font-family: 'Arial Normal', 'Arial', sans-serif;
                font-weight: 400;
                font-style: normal;
                font-size: 16px;
                color: #484848;
            }
        </style>
        <div class="cases-top-title" @if(\Illuminate\Support\Facades\Request::path() == 'supply')style="position: fixed;
    width: 100%;
    top: 120px;
    background-color: #ffffff;z-index: 9998;"@endif>
            <a href="{{route('supply')}}">伙伴</a>
            <a href="{{route('supply')}}#foward">共同推动行业前进</a>
            <a href="{{route('brand')}}">服务的品牌</a>
            <a href="{{route('cases')}}">案例</a>
        </div>

        <div class="brand-banner" style="margin-top: 210px;">
            <img src="{{URL::asset('images/gongyingshang.jpg')}}">
        </div>

        <div style="width: 91%;margin:0 auto;">
            <div class="brand-title" style="padding-right: 240px;">供应商合作</div>
            <div class="brand-desc" style="padding-right: 240px;">
			<div class="cusytdesc">上海正域公司认为“优质的设备要由优质安全的产品来构成，而优质安全的产品又是用优质的原材料来制作”
这一基本理念，在遵守伦理及法令、重视品质和交货期、保护环境等多个方面上正在不断地
加强合作关系。以追求更高的品质和服务为目标，严格的质量把控、及时的交付是我们
欣赏的优良品质，这也可以使上海正域与供应商之间的关系更加紧密。</div></div>


            <div class="brand-title" style="padding-right: 240px;">倾听员工心声</div>
            <div class="brand-desc" style="padding-right: 240px;"><div class="cusytdesc">我们为员工感到骄傲。我们鼓励员工大胆思考，提出棘手问题并挑战传统思维——无需担心失败。
员工公开分享自己的才华和想法之时将诞生创意。所以我们致力于营造一种尊重与接受的文化氛围，
使上海正域的每位员工及其创新思想都能在其中蓬勃发展。</div></div>

            <!--<div style="height: 180px;width: 1920px;" id="foward"></div>-->
            <div class="brand-title" id="foward" style="padding-right: 240px;padding-top:200px; margin-top:-200px;">共同推动行业前进</div>
            <div class="brand-desc" style="padding-right: 240px;">
                <div class="cusytdesc">1. 采购态度，本公司的采购员对待供应商要注重礼仪，要公平公正并且诚实地应对处理。<br/>
·  应以社会一员的良知和礼仪，带着责任心去执行采购业务。<br/>
·  和供应商保持友好的关系，和供应商之间不发生任何私人的利害关系。<br/>
·  遵守法令法规以及公司内部规定，按照社会伦理去执行业务。<br/>

2. 与供应商进行交易时 <br/>
选择供应商时，应针对品质，价格，交货时期，供给的连续性，环境保护，财务，对人权和劳动安全卫生等<br/>
各个方面的考虑，以及IT引进程度等，根据以上这些合理的基准，公正公平地进行评估选择。<br/>
·  不得收受供应商赠与的钱物，不得委托供应商办理私人事务。<br/>
·  不得接受供应商提供的违反社会常识的款待与接待。<br/>
·  不得强制供应商购买本公司的产品。<br/>
·  对于供应商提供的被规定为机密的信息要严格管理，严守机密。<br/>
·  随时随地考虑环境保护，推进“绿色采购”。<br/>
·  不得持有供应商的非公开股票，不得根据没有对大众公开的信息购买供应商的股票。<br/>
·  万一出现事故或者投诉，要迅速采取措施，彻底防止再次发生。<br/>
                </div>
            </div>



        </div>
    </div>
<style type="text/css">
.cusytdesc{
	font-family:Microsoft YaHei;
	font-size:1.3em;
}
.brand-desc{
	width:78%;
}
</style>



@endsection
