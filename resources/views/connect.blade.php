@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/connect.css')}}">
    <div style="width: 1920px;height: auto;margin: auto">
        <div class="connect-top-title">
            <a href="/about">关于正域</a>
            <a href="/news">新闻</a>
            <a href="/cases">企业荣誉</a>
            <a href="/cert">产品认证</a>
            <a href="/connect">联系我们</a>
        </div>

        <div class="connect-banner">
            <img src="{{URL::asset('images/static/about-banner.png')}}">
        </div>

        <div style="width: 75%;margin:auto;padding-right: 192px;">

            <div class="connect-title">找到我们</div>
            <div class="connect-desc-box">
                <div class="connect-desc-left connect-desc">地址 <br> / <br>上海市嘉定区汇贤路758号3号楼3层（外冈高新技术产业园）</div>
                <div class="connect-desc-right connect-desc">联系 <br> / <br>T -86-21-37529125 / 86-21-37529312<br>F
                    -86-21-37529135<br>E -ZY37529125@163.com
                </div>
            </div>
            <div class="connect-addr-box"  style="" id="container"></div>
        </div>
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
