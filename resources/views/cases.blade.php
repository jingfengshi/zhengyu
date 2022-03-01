@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/cases.css')}}">
    <div style="width: 1920px;height: auto;margin: auto">
        @include('_bread_case')
        <div class="cases-banner">
            <img src="{{empty($banner->file)?URL::asset('images/cases.jpg'):URL::asset('uploads').'/'.$banner->file}}">
        </div>

        <div>
            <div class="cases-title">客户案例</div>
            <div class="cases-desc">客户的认可是对我们最大的肯定！</div>
            <div class="cases-list-box">
                @foreach($cases as $case)
                    <div class="cases-item-box inline-block">
                        <a href="/cases/{{$case->id}}"><img src="{{URL::asset('uploads').'/'.$case->covers}}"
                                                            alt=""></a>
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

        <div style="margin:auto;margin-top: 4rem;width: 1300px;height: 25px;">
            <div class="flex" style="float: right">
                <div style="margin-right: 3rem">
                    <a href="{{$cases->previousPageUrl()}}">
                        <img src="{{URL::asset('images/案例/u4449.svg')}}" alt="">
                    </a>

                </div>
                <div>
                    <a href="{{$cases->nextPageUrl()}}">
                        <img class="rotate-180" src="{{URL::asset('images/案例/u4449.svg')}}" alt="">
                    </a>

                </div>
            </div>
        </div>
    </div>




@endsection
