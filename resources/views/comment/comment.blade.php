@extends('bootstrap.Template')
@section('title')
    留言板
@endsection
@section('css')
    #shopping-step01{
    background-color: cornflowerblue;

    }
    #shopping-step01 .container-xxl{
    background-color: aliceblue;
    border-radius: 15px;
    }
    #shopping-step01 .buy-progress{

    }
    #shopping-step01 .steps{
    display: flex;
    /* flex-direction: ; */
    align-items: center;
    justify-content: center;
    }
    #shopping-step01 .steps .step{
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: white;
    line-height: 40px;
    text-align: center;
    position: relative;
    }
    #shopping-step01 .steps .step::before{
    content: attr(data-text);
    position: absolute;
    width: 120px;
    bottom: -30px;
    left: 50%;
    transform: translateX(-50%);
    text-align: center;
    /* 不換行 */
    word-break: keep-all;
    color: black;

    }
    #shopping-step01 .buy-progress .buy-progress-bar{
    width: 180px;
    height: 10px;
    border-radius: 5px;
    background-color: darkgray;
    margin: 0px 8px;
    }
    #shopping-step01 .steps .green{
    background-color: green;
    color: white;
    }
    #shopping-step01 .steps .progress-25::before{
    content: '';
    width: 100%;
    height: 100%;
    background-color: green;
    display: block;
    border-radius: 5px;
    }
    #shopping-step01 .steps .progress-50::before{
    content: '';
    width: 100%;
    height: 100%;
    background-color: green;
    display: block;
    border-radius: 5px;
    }
    #shopping-step01 .steps .progress-75::before{
    content: '';
    width: 50%;
    height: 100%;
    background-color: green;
    display: block;
    border-radius: 5px;
    }
    #shopping-step01 .buy-list{
    height: 40px;
    }

    .form .row{
    width: 100%;
    {{-- margin:0 auto; --}}
    height: 40px;
    }
    .form .row.input{
    width:90%;
    margin:0 auto;
    }




    .form .row.line {
    width: 100%;
    height: 3px;
    background-color: yellow ;
    margin:0 auto;
    }
    .form .row.total{
    height: 100px;
    }
    .form .row.button{
    padding-top: 30px;
    height: 100px;
    }
    .form .row.button .col-3{
    margin:0 auto;

    }
    .form .row.button .clear{
    background-color:pink;
    }
    .form .row.button .submit{
    background-color:yellowgreen;
    }
    .form .row.button button{
    {{-- border: unset; --}}
    width: 120px;
    height: 50px;
    background-color: white;
    }
    .form .container-xl{
    margin:0 auto;
    background-color:lightgray;
    }
    .form .row.comment{
    height:100px;
    }
    .form .row.comment .col-4{
    {{-- border:1px solid; --}}
    }
    .form .row.comment .col-12{

    {{-- height:300px; --}}
    }
    h1{
    color:yellow;
    font-weight:bold;
    }
    .form .comment .title span{
    float:left;
    {{-- width:250px; --}}
    {{-- height:30px; --}}
    margin: 10px 40px 20px 10px;
    text-decoration:underline;
    font-size:36px;
    }
    .form .comment .user span{
    float:left;
    {{-- width:100px; --}}
    height:30px;
    margin-top:25px;
    text-decoration:underline;
    font-size:24px;
    }
    .form .comment .time{
    float:right;
    width:250px;
    height:20px;
    margin-top:25px;

    }
    .form .comment .content{
    clear:both;
    width:100%;
    height:100px;
    border:4px double white;
    }

    form #content{
        height:200px;
    }
@endsection
@section('main')
    <section class="form">
        <div class="container-xl">

            <div class="row">
                <h1>留言板</h1>
            </div>
            <div class="row"></div>

            @foreach ($comment1 as $comments)
            <div class="comment">
                <div class="title">
                    <span>{{ $comments->title }}</span>
                </div>
                <div class="user">
                    <span>{{ $comments->name }}</span>
                </div>
                <div class="time">
                    <span>{{ $comments->created_at }}</span>
                </div>
                <div class="content">
                    <p>
                        {{ $comments->content}}
                    </p>
                </div>
                {{-- 新增編輯和刪除鈕 --}}
                <div>
                    {{-- 刪留言step1 --}}


                     {{-- 認證方法一 --}}
                {{-- @if(Auth::check())
                有登入
                @else
                沒登入 --}}
                {{-- 認證方法二 --}}

                @auth
                <a href="/comment/delete/{{$comments->id}}">刪除</a>
                <a href="/comment/edit/{{$comments->id}}">編輯</a>
                @endauth
                @guest

                @endguest

                </div>
            </div>
            <div class="row"></div>
            <div class="row line"></div>
            @endforeach




            <div class="row mt-5 mb-5">
                <h1>歡迎底下留言討論</h1>

            </div>
            <form class="form" action="/comment/save" method="GET">
                <div class="row">
                    <h4>標題</h4>
                </div>
                <div class="row input">
                    <input type="text" placeholder="請輸入標題" name="title">
                </div>
                <div class="row">
                    <h4>姓名</h4>
                </div>
                <div class="row input">
                    <input type="text" placeholder="請輸入姓名" name="name">
                </div>
                <div class="row">
                    <h4>內容</h4>
                </div>
                <div class="row input">
                    <input type="text" placeholder="請輸入內容" name="content" id="content">
                </div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>



                <div class="row button">
                    <div class="col-3 d-flex justify-content-between">
                        <button class="clear" type="submit">
                            清除
                        </button>

                        <button class="submit" type="submit">
                            送出評論
                        </button>
                    </div>
                </div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
                <div class="row"></div>
            </form>
        </div>
    </section>
@endsection
