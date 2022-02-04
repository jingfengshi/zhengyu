@extends("main")

@section("content")
    <style>
        div font{
            font-size: 24px;
            font-weight: 300;
            font-style: normal;
        }
        div font b{
            font-size: 24px;
            font-weight: bold;
            font-style: normal;
        }
    </style>
   <div style="background-color: rgba(242, 242, 242, 1);height: 166px">
        <div style="margin-top: 1rem;padding-top: 4rem;padding-left: 19rem;" >
            <div style="width: 144px;height: 50px; font-size: 36px;font-weight: 700;color: #555555;font-style: normal;">
               隐私声明
            </div>
            <div style="width: 300px;height: 25px;margin-top:1rem;font-weight: 200;
    font-style: normal;
    font-size: 18px;
    color: #AAAAAA;">
                更新日期：{{$content->updated_at->format('Y').'年'.$content->updated_at->format('m').'月'.$content->updated_at->format('d').'日'}}
            </div>
        </div>
   </div>


    <div style="margin-top: 1rem;padding-top: 4rem;padding-left: 19rem;   font-family: '苹方 细体', '苹方 中等', '苹方', sans-serif;
    font-weight: 300;
    font-style: normal;
    font-size: 2rem;
    line-height: 48px;" class="container">

             {!! $content->value !!}


    </div>








@endsection

