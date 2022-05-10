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
        <form method="post" action="/shop04" class="container">
            @csrf
            <div class="row" style="background-color: black;color:white;">
                <h2>寄送資料</h2>
            </div>
            <div class="row"></div>
            <label for="name" class="row">
                <h4 style="font-weight: bold">姓名</h4>
            </label>
            <div class="row">
                <input type="text" placeholder="王小明" id="name" name="name">
            </div>
            <label for="phone" class="row">
                <h4 style="font-weight: bold">電話</h4>
            </label>
            <div class="row">
                <input type="number" placeholder="09xxxxxxxx" id="phone" name="phone">
            </div>
            <label for="email" class="row">
                <h4 style="font-weight: bold">Email</h4>
            </label>
            <div class="row">
                <input type="text" placeholder="abc123@gmail.com" id="email" name="email">
            </div>
            <label for="address" class="row">
                <h4 style="font-weight: bold">
                    @if ($deliver==1)
                    寄送地址
                    @else
                    店到店地址
                    @endif
                </h4>
            </label for="address">
            <div class="row">
                <div class="col-6">
                    <input class="w-100" type="text" placeholder="城市" id="address" name="city">
                </div>
                <div class="col-6">
                    <input class="w-100" type="number" placeholder="郵遞區號" name="code">
                </div>
            </div>
            <div class="row">
                <input type="text" placeholder="地址" name="address">
            </div>
            <div class="row"></div>
            <div class="row line"></div>
            <div class="row total d-flex flex-column">
                <div class="totalbox">
                    <div>
                        <span class="left">數量：</span>
                        <span class="right">{{ count($shopping) }}</span>
                    </div>
                    <div>
                        {{-- 寫一個php來算小計 --}}
                        {{-- 理想狀況在controller就要算好在帶進來 --}}
                        <?php
                        $subtotal = 0;
                        foreach ($shopping as $value) {
                            $subtotal += $value->qty * $value->product->goods_price;
                        }
                        ?>
                        <span class="left">小計：</span>
                        <span class="right">${{ $subtotal }}</span>
                    </div>
                    <div>

                        @if ($deliver==1)
                        <span class="left">宅配運費：</span>
                        <span class="right">$150</span>
                        @else
                        <span class="left">店到店運費：</span>
                        <span class="right">$60</span>
                        @endif
                    </div>
                    <div>
                        <span class="left">總計：</span>
                        @if ($deliver==1)
                        <span class="right">${{ $subtotal + 150 }}</span>
                        @else
                        <span class="right">${{ $subtotal + 60 }}</span>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row line"></div>
            <div class="row next d-flex justify-content-between">
                <div class="col-1">
                    <button class="back" type="button">
                        <a href="/shop02" role="button">
                            上一步
                        </a>
                    </button>

                </div>
                <div class="col-1">
                    <button class="next" type="submit">前往付款</button>
                </div>
            </div>
        </div>
    </section>
@endsection
