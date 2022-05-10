@extends('bootstrap.Template')
@section('title')
    Step02
@endsection
@section('css')
    #shopping-step01 {
    background-color: cornflowerblue;

    }

    #shopping-step01 .container-xxl {
    background-color: aliceblue;
    border-radius: 15px;
    }

    #shopping-step01 .buy-progress {}

    #shopping-step01 .steps {
    display: flex;
    /* flex-direction: ; */
    align-items: center;
    justify-content: center;
    }

    #shopping-step01 .steps .step {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: white;
    line-height: 40px;
    text-align: center;
    position: relative;
    }

    #shopping-step01 .steps .step::before {
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

    #shopping-step01 .buy-progress .buy-progress-bar {
    width: 180px;
    height: 10px;
    border-radius: 5px;
    background-color: darkgray;
    margin: 0px 8px;
    }

    #shopping-step01 .steps .green {
    background-color: green;
    color: white;
    }

    #shopping-step01 .steps .progress-25::before {
    content: '';
    width: 100%;
    height: 100%;
    background-color: green;
    display: block;
    border-radius: 5px;
    }
    #shopping-step01 .steps .progress-50::before {
    content: '';
    width: 50%;
    height: 100%;
    background-color: green;
    display: block;
    border-radius: 5px;
    }
    #shopping-step01 .buy-list {
    height: 40px;
    }

    .pay .row {
    width: 100%;
    height: 50px;
    }
    .pay .row.total{
    height: 100px;
    }

    .pay .row.line {
    width: 100%;
    height: 1px;
    background-color: gainsboro;
    }
    .pay .row.next{
    padding-top: 30px;
    }
    .pay .row.next button{
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
                    <div class="step" data-text="填寫資料">3</div>
                    <div class="buy-progress-bar"></div>
                    <div class="step" data-text="完成訂購">4</div>
                </div>
            </div>
            <div class="buy-list"></div>
        </div>
    </section>
    <section class="pay d-flex">
        <form action='/shop03' method="post" class="container">
            @csrf
            <div class="row line"></div>
            <div class="row">
                <h2>付款方式</h2>
            </div>
            <div class="row">
                <div class="col-1">
                    <input type="radio" name="howtopay" id='credit' value="1">
                </div>
                <div class="col-11">
                    <label for='credit'>信用卡付款</label>
                </div>
            </div>
            <div class="row line"></div>
            <div class="row">
                <div class="col-1">
                    <input type="radio" name="howtopay" id="atm" value="2">
                </div>
                <div class="col-11">
                    <label for="atm">網路ATM</label>
                </div>
            </div>
            <div class="row line"></div>
            <div class="row">
                <div class="col-1">
                    <input type="radio" name="howtopay" id="code" value="3">
                </div>
                <div class="col-11">
                    <label for="code">超商代碼</label>
                </div>
            </div>
            <div class="row line"></div>
            <div class="row">
                <h2>運送方式</h2>
            </div>
            <div class="row">
                <div class="col-1">
                    <input type="radio" name="howtodev" id="cat" value="1">
                </div>
                <div class="col-11">
                    <label for="cat">黑貓宅配</label>
                </div>
            </div>
            <div class="row line"></div>
            <div class="row">
                <div class="col-1">
                    <input type="radio" name="howtodev"  id="store" value="2">
                </div>
                <div class="col-11">
                    <label for="store">超商店到店</label>
                </div>
            </div>
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
                        <span class="left">運費：</span>
                        <span class="right">待計算</span>
                    </div>
                    <div>
                        <span class="left">總計：</span>
                        <span class="right">${{ $subtotal}}</span>
                    </div>
                </div>
            </div>
            <div class="row line"></div>
            <div class="row next d-flex justify-content-between">
                <div class="col-1">
                    <button class="back" type="button">
                        <a href="/shop01">
                            上一步
                        </a></button>
                </div>
                <div class="col-1">
                    <button type="submit"  class="next"> 下一步</button>
                </div>
            </div>
        </form>
    </section>
@endsection
