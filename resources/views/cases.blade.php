@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/cases.css')}}">

    <div class="cases-top-title">
        <a href="">伙伴</a>
        <a href="">共同推动行业前进</a>
        <a href="">服务的品牌</a>
        <a href="">案例</a>
    </div>

    <div class="cases-banner">
        <img src="{{empty($banner->file)?URL::asset('uploads/default.png'):URL::asset('uploads').'/'.$banner->file}}">
    </div>

    <div>
        <div class="cases-title">客户案例</div>
        <div class="cases-desc">客户的认可才是对我们最大的肯定！客户的认可才是对我们最大的肯定！客户的认可才是对我们最大的肯定！客户的认可才是对我们最大的肯定！</div>
        <div class="cases-list-box">
            @foreach($cases as $case)
                <div class="cases-item-box inline-block">
                    <a href="/cases/{{$case->id}}"><img src="{{URL::asset('uploads').'/'.$case->covers}}" alt=""></a>
                    <a href="/cases/{{$case->id}}">
                        <div class="cases-item-title text-overflow">{{$case->title}}</div>
                    </a>
                    <a href="/cases/{{$case->id}}">
                        <div class="cases-item-desc">{{$case->desc}}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
