@extends("main")

@section("content")

    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/case.css')}}">
    <style>
        .case-content p{
            font-size: 24px;
            font-weight: 200;
            font-style: normal;
            text-align: left;
            line-height: 40px;
        }
    </style>
	
    <div style="width: 100%;height: auto;margin: auto">
        @include('_bread_case')
        <div class="case-top">
            <div style="margin-left: 240px;">
                <div class="case-top-title">{{$case->title}}</div>
                <div class="case-top-date">{{$case->updated_at?$case->updated_at->format('Y-m-d'):''}}</div>
            </div>

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
    </div>


    <script>
        $(document).ready(function () {
            $(".case-content font").each(function () {
                $(this).css({'font-size': $(this).attr('size') / 3 + 'rem'})
            })
        })
    </script>
	
	<style type="text/css">
	.case-content{
		display:table;
	}
.case-content p img{
	float:left;
	width:550px !important;
	padding-left:10px;
	padding-top:10px;
}
.case-btn-box{
	padding-top:70px;
}
</style>

@endsection
