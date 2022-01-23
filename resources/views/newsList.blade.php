@extends("main")

@section("content")


    <link rel="stylesheet" type="text/css" href="css/cases.css">

    <div class="cases-top-title">
        <a href="">伙伴</a>
        <a href="">共同推动行业前进</a>
        <a href="">服务的品牌</a>
        <a href="">案例</a>
    </div>

    <div class="cases-banner">
        <img src="{{URL::asset('images/服务的品牌/u4314.jpg')}}">
    </div>


    <div class="cases-title">
        新闻活动
    </div>
    <div class="grid grid-cols-2 justify-items-center" style="margin-left: 12rem;margin-top: 2rem">

        @foreach($newsList as $news)
            <div class="flex w-full min-h-[17rem]" style="margin-right: 2rem">
                <div class="min-h-[12rem]  w-2/5" >
                    <img src="uploads/{{$news->cover}}" alt="" style="width: 100%;height: 100%;">
                </div>
                <div class="min-h-[12rem] bg-black-100 " style="margin-left: 1rem;width: 50%">
                    <div class="h-1/3  w-full " style="font-size: 1.2rem;font-weight: 400;">
                       {{$news->title}}
                    </div>
                    <div class="h-1/3  w-full" style="font-size: 1rem;line-height: 1.5rem;font-weight: 200;">
                       {{$news->desc}}
                    </div>
                    <div class="h-1/3  w-full" style="text-align: right;font-size: 1rem;font-weight: 200;">
                        <a href="{{route('news.show',[$news->id])}}" style="position: relative;right: 0;bottom: -4rem">>更多详情</a>
                    </div>
                </div>


            </div>
        @endforeach




    </div>







@endsection
