@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="css/service.css">

    <div class="service-top-title">
        <a href="{{route('service',['q'=>'gold'])}}">金牌服务</a>
        <a href="{{route('service')}}">定制与试用</a>
    </div>

    <div class="service-banner">
        <img src="{{empty($banner->file)?URL::asset('uploads/default.png'):URL::asset('uploads/'.$banner->file)}}">
    </div>

    <div>
        <div class="content">
                {!! $config['金牌服务']['value'] !!}
        </div>
    </div>

@endsection
