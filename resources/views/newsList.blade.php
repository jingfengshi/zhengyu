@extends("main")

@section("content")


    <link rel="stylesheet" type="text/css" href="css/news.css">



    <div style="width: 1920px;height: auto;margin: auto">
        <div class="cases-top-title">
            <a href="{{route('about')}}">关于正域</a>
            <a href="{{route('news')}}">新闻</a>
            <a href="">企业荣誉</a>
            <a href="">产品认证</a>
            <a href="">联系我们</a>
        </div>

        <div class="cases-banner">
            <img src="{{URL::asset('images/xinwen.jpg')}}">
        </div>


        <div class="cases-title">
            新闻活动
        </div>
        <div class="grid grid-cols-2 justify-items-center" style="margin:auto;margin-top: 4rem;width: 1500px;height: auto">

            @foreach($newsList as $news)
                <div class="flex w-full min-h-[17rem]" style="margin-right: 2rem;width: 708px;height: 256px;">
                        <img src="uploads/{{$news->cover}}" alt="" style="width: 255px;height:200px;">
                    <div class="min-h-[12rem] bg-black-100 " style="margin-left:1rem;width: 50%">
                        <div style="width:380px;height: 56px;font-family: 'Arial Normal', 'Arial', sans-serif;
    font-weight: 400;
    font-style: normal;
    font-size: 18px;
    line-height: 28px;">
                            {{$news->title}}
                        </div>
                        <div  style="width: 375px;height: 77px;
font-weight: 200;
    font-style: normal;
    text-align: left;    font-size: 15px;
    line-height: 28px;">
                            {{$news->desc}}
                        </div>
                        <div class="h-1/3  w-full" style="text-align: right;font-size: 1rem;font-weight: 200;">
                            <a href="{{route('news.show',[$news->id])}}" style="position: relative;right: 0;bottom: -4rem;font-weight: 400;
    font-style: normal;
    font-size: 12px;
    color: rgba(111, 111, 111, 0.996078431372549);
    text-align: right;
    line-height: 28px;">>更多详情</a>
                        </div>
                    </div>


                </div>
            @endforeach





        </div>
        <div style="margin:auto;margin-top: 4rem;width: 1300px;height: 25px;">
            <div class="flex" style="float: right">
                <div  style="margin-right: 3rem">
                    <a href="{{$newsList->previousPageUrl()}}">
                        <img src="{{URL::asset('images/案例/u4449.svg')}}" alt="">
                    </a>

                </div>
                <div>
                    <a href="{{$newsList->nextPageUrl()}}">
                        <img class="rotate-180"  src="{{URL::asset('images/案例/u4449.svg')}}" alt="">
                    </a>

                </div>
            </div>
        </div >


    </div>









@endsection
