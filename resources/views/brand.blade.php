@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/brand.css')}}">
    <div style="width: 100%;height: auto;margin: auto">
        @include('_bread_case')

        <div class="brand-banner">
            <img src="{{URL::asset('images/static/about-banner.png')}}">
        </div>

        <div style="width:1255px;margin:auto">
            <div class="brand-title">服务的品牌</div>
            <div class="brand-desc">我们诚挚的为您提供高效高质的服务，期待您由衷的称赞与信赖，携手面向未来。</div>
            <div class="brand-img-box">
                @foreach($brands as $brand)
                    <div class="brand-img-item inline-block"><img src="{{URL::asset('uploads').'/'.$brand->file}}"></div>
                @endforeach
            </div>
        </div>
    </div>




@endsection
