@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="css/connect.css">

    <div class="connect-top-title">
        <a href="">关于正域</a>
        <a href="">新闻</a>
        <a href="">企业荣誉</a>
        <a href="">产品认证</a>
        <a href="">联系我们</a>
    </div>

    <div class="connect-banner">
        <img src="{{URL::asset('images/服务的品牌/u4314.jpg')}}">
    </div>

    <div>
        <div class="connect-title">找到我们</div>
        <div class="connect-desc-box">
            <div class="connect-desc-left connect-desc">地址：<br>上海市嘉定区汇贤路758号3号楼3层（外冈高新技术产业园）</div>
            <div class="connect-desc-right connect-desc">联系：<br>T -86-21-37529125 / 86-21-37529312<br>F
                -86-21-37529135<br>E -ZY37529125@163.com
            </div>
        </div>
        {{--  地图API需要手机号注册账号获取秘钥才能使用  --}}
        <div class="connect-addr-box"></div>
    </div>

    <script>
        $(document).on('click', '.connect-addr-box', function () {
            window.open('https://map.baidu.com/search/%E4%B8%8A%E6%B5%B7%E5%B8%82%E5%98%89%E5%AE%9A%E5%8C%BA%E6%B1%87%E8%B4%A4%E8%B7%AF758%E5%8F%B73%E5%8F%B7%E6%A5%BC3%E5%B1%82/@13488876.125,3661721,19z?querytype=s&da_src=shareurl&wd=%E4%B8%8A%E6%B5%B7%E5%B8%82%E5%98%89%E5%AE%9A%E5%8C%BA%E6%B1%87%E8%B4%A4%E8%B7%AF758%E5%8F%B73%E5%8F%B7%E6%A5%BC3%E5%B1%82&c=289&src=0&pn=0&sug=0&l=19&b=(13488498.125,3661527.25;13489254.125,3661914.75)&from=webmap&biz_forward=%7B%22scaler%22:2,%22styles%22:%22pl%22%7D&device_ratio=2', '_blank');
        })
    </script>

@endsection
