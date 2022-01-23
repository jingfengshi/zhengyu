@extends("main")

@section("content")

    <div style="width: 78%;margin:0 auto; padding: 2rem 4rem;" >
        <a href="" style="color: #484848;margin-right: 1.5rem;">关于正域</a>
        <a href="" style="color: #484848;margin-right: 1.5rem;">新闻</a>
        <a href="" style="color: #484848;margin-right: 1.5rem;">企业荣誉</a>
        <a href="" style="color: #484848;margin-right: 1.5rem;">产品认证</a>
        <a href="" style="color: #484848;margin-right: 1.5rem;">联系我们</a>
    </div>


    <div class="w-full min-h-[15rem]" style="background-color: rgba(242, 242, 242, 1);">
        <div style="width: 80%;margin: 0 auto;height: 10rem;">
            <div style="padding-left:8rem;padding-top:5rem">
                <div style=";\font-weight: 700;font-size: 2.5rem;color: #555555">
                    {{$news->title}}
                </div>
                <div style="font-weight: 200;font-size: 1.2rem;margin-top: 1rem">
                    {{$news->created_at->format("Y-m-d")}}
                </div>
            </div>

        </div>

    </div>
    <div style="width: 70%;margin: 0 auto;height: 10rem;margin-top: 2rem;min-height: 20rem;">
        <div>
                {!!$news->content!!}

        </div>
        <div class="flex justify-end" >
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






@endsection
