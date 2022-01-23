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
        <img src="{{URL::asset('images/static/about-banner.png')}}">
    </div>

    <div>
        <div class="connect-title">找到我们</div>
        <div class="connect-desc-box">
            <div class="connect-desc-left connect-desc">地址：<br>上海市嘉定区汇贤路758号3号楼3层（外冈高新技术产业园）</div>
            <div class="connect-desc-right connect-desc">联系：<br>T -86-21-37529125 / 86-21-37529312<br>F
                -86-21-37529135<br>E -ZY37529125@163.com
            </div>
        </div>
        <div class="connect-addr-box" id="container"></div>
    </div>

    <script type="text/javascript" src="https://api.map.baidu.com/api?v=1.0&type=webgl&ak={{$ak}}"></script>
    <script>
        var map = new BMapGL.Map("container");
        var point = new BMapGL.Point(121.171762, 31.394696);
        var marker = new BMapGL.Marker(point);
        map.centerAndZoom(point, 18);
        map.enableScrollWheelZoom(true);
        map.addOverlay(marker);
    </script>

@endsection
