@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/case.css')}}">

    <div class="case-top-nav">
        <a href="">伙伴</a>
        <a href="">共同推动行业前进</a>
        <a href="">服务的品牌</a>
        <a href="">案例</a>
    </div>

    <div class="case-top">
        <div class="case-top-title">{{$case->title}}</div>
        <div class="case-top-date">{{$case->updated_at}}</div>
    </div>

    <div class="case-content">{!! $case->content !!}</div>

    <div class="case-btn-box">
        <div class="case-btn-prev-box inline-block">
            <img class="f-left" src="{{URL::asset('images/static/next.svg')}}">
            <a class="f-right" @if($prev) href="/cases/{{$prev}}" @else href="javascript:;" @endif>上一篇</a>
        </div>
        <div class="case-btn-next-box inline-block">
            <a class="f-left" @if($next) href="/cases/{{$next}}" @else href="javascript:;" @endif>下一篇</a>
            <img class="f-right" src="{{URL::asset('images/static/next.svg')}}">
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $(".case-content font").each(function () {
                $(this).css({'font-size': $(this).attr('size') / 3 + 'rem'})
            })
        })
    </script>

@endsection
