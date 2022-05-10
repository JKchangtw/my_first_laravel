@extends('bootstrap.Template')
@section('title')
    Step01
@endsection
@section('css')
    #shopping-step01 {
    background-color: whitesmoke;

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
    width: 50%;
    height: 100%;
    background-color: green;
    display: block;
    border-radius: 5px;
    }

    #shopping-step01 .buy-list {
    height: 40px;
    }

    .list .row {
    width: 100%;
    height: 100px;
    }
    .list .row .col-10, .list .row .col-2{
    height: 100%;
    }
    .list .row.line{

    width: 100%;
    height: 1px;
    background-color: gainsboro;
    margin:0 auto;
    }
    .img1{
    position:relative;
    }
    .img1 img{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-position: center;
    background-size: contain;
    margin-right: 10px;
    position:absolute;
    top:50%;
    transform:translateY(-50%);
    }


    .row.total {
    position: relative;
    }

    .total .totalbox {
    height: 100%;
    width: 20%;
    position: absolute;
    right: 0;
    }

    .row.next {
    padding-top: 30px;
    }

    .row.next .back {
    left: 0;
    width: 120px;
    height: 30px;
    }

    .row.next .back i {
    line-height: ;
    }

    .row.next .next {
    width: 80px;
    height: 30px;
    border: unset;
    background-color: aquamarine;
    font-size: 14px;
    }
    .count{
    position:relative;
    }
    #qty{
    width:60px;
    height:30px;
    position:absolute;
    top:50%;
    transform:translateY(-50%);

    }
    .totalbox span{
    font-size:20px;
    }
    .row.total{
    height:150px;
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
                    <div class="step" data-text="付款與運送方式">2</div>
                    <div class="buy-progress-bar"></div>
                    <div class="step" data-text="填寫資料">3</div>
                    <div class="buy-progress-bar"></div>
                    <div class="step" data-text="完成訂購">4</div>
                </div>
            </div>
            <div class="buy-list"></div>
        </div>
    </section>
    <section class="list mt-1">
        <form action="/shop02" method="post" class="container d-flex flex-column" style="background-color: whitesmoke">
            @csrf
            <div class="row line"></div>
            <div class="row">
                <h2>訂單明細</h2>
            </div>
            <div class="row line"></div>
            @foreach ($shopping as $i => $item)
                <div class="row d-flex flex-row">
                    <div class="col-8 d-flex flex-row">
                        <div class="img1">
                            <img src="{{ $item->product->goods_img }}" alt="">
                        </div>
                        <div class="buywhat ms-5">
                            <h3 style="line-height: 100px">{{ $item->product->goods_name }}</h3>
                            {{-- <h6>#41551</h6> --}}
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-between">
                        <div class="count d-flex">
                            <span class="me-3" id="minus" style="font-size:18px; font-weight:bold;">-</span>
                            {{-- 表單吃name 加上[]就變陣列 才會有很多個商品 的數量 --}}
                            <input class="me-3" type="number" id="qty" name='qty[]' value="{{ $item->qty }}">
                            <span id="plus" style="font-size:18px; font-weight:bold;">+</span>
                        </div>
                        <div class="price" style="font-family: monospace; font-size:18px; line-height: 100px">
                            ${{ $item->product->goods_price * $item->qty }}</div>
                    </div>
                </div>
                <div class="row line"></div>
            @endforeach

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
                <div class="back d-flex">
                    <i class="fa-solid fa-arrow-left"></i>
                    <a class="back" href="/bootstrap">返回購物</a>
                </div>
                <button class="next" type="submit">下一步</button>
            </div>
        </form>
    </section>
@endsection
@section('script')
    <script>
        const minus = document.querySelector('#minus');
        const qty = document.querySelector('#qty');
        const plus = document.querySelector('#plus');
        minus.onclick = function() {
            //用parseInt將字串轉換成數字
            if (parseInt(qty.value) > 1) {
                qty.value = parseInt(qty.value) - 1;
            }
        }
    </script>
@endsection
