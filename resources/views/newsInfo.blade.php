@extends("main")

@section("content")


    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/news.css')}}">
    <style>
        .new-info-box p{
            font-size: 24px;
            line-height: 40px;
            font-weight: 200;
            font-style: normal;
            text-align: left;
        }
    </style>

    <div style="width: 100%;height: auto;margin: auto">
        @include('_bread_news')


        <div class="w-full" style="background-color: rgba(242, 242, 242, 1);height: 207px;padding-top:33px">
            <div style="width: 80%;margin: 0 auto;">
                <div style="padding-left:8rem;padding-top:4rem">
                    <div style="font-weight: 700;font-size: 36px;color: #555555">
                        {{$news->title}}
                    </div>
                    <div style="font-weight: 200;font-size:20px;margin-top: 1rem">
                        {{$news->created_at?$news->created_at->format("Y-m-d"):''}}
                    </div>
                </div>
            </div>
        </div>

        <div style="width: 70%;margin: 0 auto;margin-top: 2rem;min-height: 20rem;">
            <div class="new-info-box" style="width: 1300px;margin: auto">
                {!!$news->content!!}
            </div>
            <div class="flex justify-end">
                <div class="flex mr-[1rem]">
                    <img class="rotate-180" src="{{URL::asset('images/案例详情/u4512.svg')}}">
                    <a href="{{route('news.show',[$prevId])}}" style="font-size:1.4rem;font-weight: 200;">上一篇</a>
                </div>
                <div class="flex">
                    <a href="{{route('news.show',[$nextId])}}" style="font-size:1.4rem;font-weight: 200;">下一篇</a>
                    <img src="{{URL::asset('images/案例详情/u4512.svg')}}">
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function () {
                $(".new-info-box font").each(function () {
                    $(this).css({'font-size': $(this).attr('size') / 3 + 'rem'})
                })
            })
        </script>

    </div>




@endsection
