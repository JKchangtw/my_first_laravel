@extends('bootstrap.Template')
@section('title')
    Step01
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
        }

        .list .img1, .img2, .img3 {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-position: center;
            background-size: contain;
            margin-right: 10px;
        }
        .list .img1{
            background-image: url(/image/Gluten-Free-Pizza-3.2.jpg);
        }
        .list .img2{
            background-image: url(/image/gluten-free-thin-crust-pizza.jpg);
        }
        .list .img3{
            background-image: url(/image/pizza-3007395__480.jpg);
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
        <section class="list">
            <div class="container d-flex flex-column">
                <div class="row line"></div>
                <div class="row">
                    <h2>訂單明細</h2>
                </div>
                <div class="row d-flex flex-row">
                    <div class="col-10 d-flex">
                        <div class="img1"></div>
                        <div class="buywhat">
                            <h3>Chicken momo</h3>
                            <h6>#41551</h6>
                        </div>
                    </div>
                    <div class="col-2 d-flex justify-content-between">
                        <div class="count d-flex">
                            <h6>-</h6>
                            <div>1</div>
                            <h6>+</h6>
                        </div>
                        <div class="price">$10.50</div>
                    </div>
                </div>
                <div class="row line"></div>
                <div class="row d-flex flex-row">
                    <div class="col-10 d-flex">
                        <div class="img2"></div>
                        <div class="buywhat">
                            <h3>Spicy Mexican potatoes</h3>
                            <h6>#66999</h6>
                        </div>
                    </div>
                    <div class="col-2 d-flex justify-content-between">
                        <div class="count d-flex">
                            <h6>-</h6>
                            <div>1</div>
                            <h6>+</h6>
                        </div>
                        <div class="price">$10.50</div>
                    </div>
                </div>
                <div class="row line"></div>
                <div class="row d-flex flex-row">
                    <div class="col-10 d-flex">
                        <div class="img3"></div>
                        <div class="buywhat">
                            <h3>Breakfast</h3>
                            <h6>#86577</h6>
                        </div>
                    </div>
                    <div class="col-2 d-flex justify-content-between">
                        <div class="count d-flex">
                            <h6>-</h6>
                            <div>1</div>
                            <h6>+</h6>
                        </div>
                        <div class="price">$10.50</div>
                    </div>
                </div>
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
                    <div class="back d-flex">
                        <i class="fa-solid fa-arrow-left"></i>
                        <a class="back" href="/bootstrap">返回購物</a>
                    </div>
                    <button class="next">
                        <a href="/shop02">
                        下一步</a></button>
                </div>
            </div>
        </section>
 @endsection






