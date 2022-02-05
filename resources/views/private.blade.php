@extends("main")

@section("content")
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/private.css')}}">
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
   <div class="private-title">
        <div class="private-title-big">
            <div class="private-title-big-font">
               隐私声明
            </div>
            <div class="private-title-small-font">
                更新日期：{{$content->updated_at->format('Y').'年'.$content->updated_at->format('m').'月'.$content->updated_at->format('d').'日'}}
            </div>
        </div>
   </div>

    <div style="height: auto;width: 1920px;margin: auto">
        <div style="margin-top: 1rem;padding-top: 4rem;padding-left: 19rem;
        font-weight: 300;
        font-style: normal;
        font-size: 2rem;
        line-height: 48px;" class="container">

                 {!! $content->value !!}


        </div>
    </div>








@endsection

