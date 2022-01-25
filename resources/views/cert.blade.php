@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="css/cert.css">

    <div class="cert-top-title">
        <a href="">伙伴</a>
        <a href="">共同推动行业前进</a>
        <a href="">服务的品牌</a>
        <a href="">案例</a>
    </div>

    <div class="cert-banner">
        <img src="{{URL::asset('uploads').'/'.$banner->file}}">
    </div>

    <div>
        <div class="cert-title">企业荣誉</div>
        <div class="cert-title-2">我们将不懈努力，与您共同发展！</div>
        <div class="cert-img-box">
            @foreach($certs as $cert)
                <div class="cert-img-item inline-block"><img src="{{URL::asset('uploads/'.$cert->file)}}"><div class="sm-title">{{$cert->title}}</div></div>
            @endforeach

        </div>
    </div>

@endsection
