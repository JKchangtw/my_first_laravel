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
    height: 2px;
    background-color: white ;
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
    .form .comment .title{
    float:left;
    width:150px;
    height:30px;
    margin: 10px 0px 20px 10px;
    }
    .form .comment .user{
    float:left;
    width:50px;
    height:30px;
    margin-top:20px;
    }
    .form .comment .time{
    float:right;
    width:150px;
    height:20px;
    margin-top:25px;

    }
    .form .comment .content{
    clear:both;
    width:100%;
    height:100px;
    border:1px dotted yellow;
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


            <div class="comment">
                <div class="title">
                    <h2> 五星好評</h2>
                </div>
                <div class="user">
                    <h5>張XX</h5>
                </div>
                <div class="time">
                    <p>20200419 14:03</p>
                </div>
                <div class="content">
                    <p>
                        dosfqwdmkqmd;kewmfkmfv
                    </p>
                </div>
            </div>
            <div class="row"></div>
            <div class="row line"></div>
            <div class="row"></div>
            <div class="comment">
                <div class="title">
                    <h2> 五星好評</h2>
                </div>
                <div class="user">
                    <h5>張XX</h5>
                </div>
                <div class="time">
                    <p>20200419 14:03</p>
                </div>
                <div class="content">
                    <p>
                        dosfqwdmkqmd;kewmfkmfv
                    </p>
                </div>
            </div>
            <div class="row"></div>
            <div class="row line"></div>
            <div class="row"></div>
            <div class="comment">
                <div class="title">
                    <h2> 五星好評</h2>
                </div>
                <div class="user">
                    <h5>張XX</h5>
                </div>
                <div class="time">
                    <p>20200419 14:03</p>
                </div>
                <div class="content">
                    <p>
                        dosfqwdmkqmd;kewmfkmfv
                    </p>
                </div>
            </div>
            <div class="row"></div>
            <div class="row line"></div>


            <div class="row mt-5 mb-5">
                <h1>歡迎底下留言討論</h1>
            </div>
            <form class="form" action="/comment/save" method="GET">
                <div class="row">
                    <h4>姓名</h4>
                </div>
                <div class="row input">
                    <input type="text" placeholder="請輸入姓名" name="name">
                </div>
                <div class="row">
                    <h4>標題</h4>
                </div>
                <div class="row input">
                    <input type="text" placeholder="請輸入標題" name="title">
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
