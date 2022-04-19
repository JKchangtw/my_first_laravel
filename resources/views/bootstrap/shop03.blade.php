@extends('bootstrap.Template')
@section('title')
    Step03
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
    height: 40px;
    }




    .form .row.line {
    width: 100%;
    height: 1px;
    background-color: gainsboro;
    }
    .form .row.total{
    height: 100px;
    }
    .form .row.next{
    padding-top: 30px;
    height: 100px;
    }
    .form .row.next button{
    border: unset;
    width: 80px;
    height: 30px;
    background-color: aqua;
    }
@endsection
@section('main')
    <section id="shopping-step01" class="pt-3 pb-3">
        <div class="container-xxl">
            <div class="buy-progress">
                <h1>購物車</h1>
                <div class="steps">
                    <div class="step green" data-text="確認購物車">1</div>
                    <div class="buy-progress-bar progress-25" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                        aria-valuemax="100"></div>
                    <div class="step green" data-text="付款與運送方式">2</div>
                    <div class="buy-progress-bar progress-50"></div>
                    <div class="step green" data-text="填寫資料">3</div>
                    <div class="buy-progress-bar progress-75"></div>
                    <div class="step" data-text="完成訂購">4</div>
                </div>
            </div>
            <div class="buy-list"></div>
        </div>
    </section>
    <section class="form">
        <div class="container">
            <div class="row">
                <h2>寄送資料</h2>
            </div>
            <div class="row">
                <h4>姓名</h4>
            </div>
            <div class="row">
                <input type="text" placeholder="王小明">
            </div>
            <div class="row">
                <h4>電話</h4>
            </div>
            <div class="row">
                <input type="number" placeholder="09xxxxxxxx">
            </div>
            <div class="row">
                <h4>Email</h4>
            </div>
            <div class="row">
                <input type="text" placeholder="abc123@gmail.com">
            </div>
            <div class="row">
                <h4>地址</h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="text" placeholder="城市">
                </div>
                <div class="col-6">
                    <input type="number" placeholder="郵遞區號">
                </div>
            </div>
            <div class="row">
                <input type="text" placeholder="地址">
            </div>
            <div class="row"></div>
            <div class="row line"></div>
            <div class="row total d-flex flex-column">
                <div class="totalbox">
                    <div>
                        <span class="left">數量：</span>
                        <span class="right">3</span>
                    </div>
                    <div>
                        <span class="left">小計：</span>
                        <span class="right">$24.90</span>
                    </div>
                    <div>
                        <span class="left">運費：</span>
                        <span class="right">$24.90</span>
                    </div>
                    <div>
                        <span class="left">總計：</span>
                        <span class="right">$24.90</span>
                    </div>
                </div>
            </div>
            <div class="row line"></div>
            <div class="row next d-flex justify-content-between">
                <div class="col-1">
                    <button class="back">
                        <a href="/shop02">
                            上一步
                        </a>
                    </button>

                </div>
                <div class="col-1">
                    <button class="next">
                        <a href="/shop04">
                            前往付款
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection
