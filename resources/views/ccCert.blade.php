@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/cert.css')}}">

    <div style="width: 100%;height: auto;margin: auto">
        @include('_bread_news')
        <div class="cert-banner">
            <img src="{{empty($banner->file)?URL::asset('images/news-banner.jpeg'):URL::asset('uploads').'/'.$banner->file}}">
        </div>

        <div>
            <div class="cert-title">产品认证</div>
            <div class="cert-title-2">我们将不懈努力，与您共同发展！</div>
            <div class="cert-img-box">
                @if($certs->count()>0)
                    @foreach($certs as $cert)
                        <div class="cert-img-item inline-block"><img src="{{URL::asset('uploads/'.$cert->file)}}">
                            <div class="sm-title">{{$cert->title}}</div>
                        </div>
                    @endforeach
                @else
                @endif


            </div>
        </div>


    </div>


@endsection
