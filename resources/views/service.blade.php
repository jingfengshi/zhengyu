@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="css/service.css">

    <div style="width: 100%;height: auto;margin: 0 auto">
        <div class="service-top-title" @if(\Illuminate\Support\Facades\Request::path() == 'service')style="position: fixed;
    width: 100%;
    top: 120px;
    background-color: #ffffff;z-index: 9998;"@endif>
            <a href="{{route('service',['q'=>'gold'])}}">金牌服务</a>
            <a href="{{route('service')}}">定制与试用</a>
        </div>

        <div class="service-banner" style="margin-top: 210px;">
            <img src="{{empty($banner->file)?URL::asset('uploads/default.png'):URL::asset('uploads/'.$banner->file)}}">
        </div>

        <div style="width: 100%;margin:auto; margin: 0 auto">
            <div class="brand-title">金牌客户服务</div>
            <div class="brand-desc"><pre>
*  我们提供服务的目的就是为了客户满意。
*  在这里，你可以找到与我们解决方案和产品相关的所有服务和支持。
*  你可以随时通过电话在工作时间获得正确的帮助和信息。
*  我们会确保这里的内容是全新，简单的和全面的。
                </pre>
            </div>

            <div class="brand-title">服务说明</div>
            <div class="brand-desc">
                <pre>
*  在我们为您服务时，请您出示有效的购机发票和产品保修卡；如您不能出示以上证明，该产品的免费
   保修期将按照机身的编码显示的出厂日期向后顺延90天开始计算。
*  自客户收到产品7日内，如产品未经过使用，或非人为损坏的性能故障，可以选择按发票价格退清货款
   或更换同型号同规格的产品。
*  自客户收到产品第8日至15日（包含15日）内，若产品未经过使用，或非人为损坏的性能故障，可以选
   择更换同型号同规格的产品，或者选择修理。
*  在免费保修期内，产品须经过上海正域检测，确认故障后，上海正域可以自行选择采取更换、修理或其
   它方式为您提供本文件所承诺的保修服务，如采用更换方式，更换下来的零部件归上海正域所有；对于
   检测无故障产品，将原样退回。
*  上海正域不承担客户取送产品的费用及风险。
*  因产品不符合保修条件需收取费用的，客户需要支付费用维修。
                </pre>
            </div>

            <div class="brand-title">服务与支持</div>
            <div class="brand-desc">
                <pre>
{{--*  售后服务承诺--}}
*  服 务 热 线：<p style="display: inline-block;font-size: 24px;">021-3752 9125</p>
*  终 身 服 务：正域对其产品提供终身维修服务。
*  保&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;修：上海正域自动化产品一律保修12个月。
*  回&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;访：定期回访并做详细记录。
*  维&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;修：接客户报修后2小时内作出回应，如需上门服务，48小时内到达用户现场。
*  备&nbsp;件&nbsp;更&nbsp;换：上海正域在产品设计上十分注重零部件的“通用性”和“互换性”。
&emsp; &emsp; &emsp; &emsp; &emsp;  并且对每一台产品建有完善的技术档案，以确保用户的产品能得到及时快捷的维修。
*  保 修 条 列：上海正域自动化承担由上海正域自动化制造的产品的保修责任。
&nbsp;&ensp; 保 修 期 限：产品发货之日起12个月。
&nbsp;&ensp; 保 修 限 制：1、产品安装不符合国家规范及正域技术文件规定的准则
&emsp; &emsp; &emsp; &emsp; &emsp;&ensp; 2、人为因素和不可抗拒的因素。
*  其&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 他：由保修产生的所有直接费用（含材料、人工、差旅费）全部由上海正域自动化承担。

                </pre>
            </div>


        </div>
    </div>


    <script>
        $(document).ready(function () {
            $(".content font").each(function () {
                $(this).css({'font-size': $(this).attr('size') / 3 + 'rem'})
            })
        })
    </script>
	<style type="text/css">
	.brand-desc pre{
		font-family:Microsoft YaHei;
	}
	<!--.brand-desc{
		width:63%;
		margin:0 auto;
	}-->
	</style>
@endsection
