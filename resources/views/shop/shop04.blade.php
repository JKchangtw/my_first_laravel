@extends('bootstrap.Template')
@section('title')
    Step04
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
    width: 100%;
    height: 100%;
    background-color: green;
    display: block;
    border-radius: 5px;
    }
    #shopping-step01 .buy-list{
    height: 40px;
    }
    .list .row h1{
    text-align: center;
    }
    .list .img1{
    position:relative;
    }
    .list .img1 img{
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



    .list .row.line{

    width: 100%;
    height: 1px;
    background-color: gainsboro;
    }
    .list .row.next{
    position: relative;
    height: 50px;
    }
    .list .row button{
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    width: 100px;
    border: unset;
    background-color:aquamarine;
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
                    <div class="step green" data-text="完成訂購">4</div>
                </div>
            </div>
            <div class="buy-list"></div>
        </div>
    </section>
    <section class="list">
        <div class="container d-flex flex-column">
            <div class="row line"></div>
            <div class="row d-flex flex-row">
                <div class="col-5">
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                </div>
                <h1 class="col-2"><b>訂單成立</b></h1>
                <div class="col-5">
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                    <i class="fa-solid fa-star-of-david col-1" style="color: yellow"></i>
                </div>
            </div>
            <div class="row">
                <h3>訂單明細</h3>
            </div>
            @foreach ($order->detail as $item)
                <div class="row d-flex flex-row">
                    <div class="col-8 d-flex flex-row">
                        <div class="img1">
                            <img src="{{ $item->product->goods_img }}" alt="">
                        </div>
                        <div class="buywhat ms-5">
                            <h3 style="line-height: 100px">{{ $item->product->goods_name }}</h3>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-between">
                        <div class="count d-flex">
                            {{-- <span class="me-3" id="minus" style="font-size:18px; font-weight:bold;">-</span> --}}
                            {{-- 表單吃name 加上[]就變陣列 才會有很多個商品 的數量 --}}
                            {{-- <input class="me-3" type="number" id="qty" name='qty[]' value="{{ $item->qty }}"> --}}
                            <p style="line-height: 100px">數量：{{ $item->qty }}</p>
                            {{-- <span id="plus" style="font-size:18px; font-weight:bold;">+</span> --}}
                        </div>
                        <div class="price" style="font-family: monospace; font-size:18px; line-height: 100px">
                            ${{ $item->price * $item->qty }}</div>
                    </div>
                </div>
            @endforeach
            <div class="row line"></div>
            <div class="row">
                <h5>寄送資料</h5>
            </div>
            <div class="row">
                <div class="col-2">姓名：</div>
                <div class="col-1">{{ $order->name }}</div>
            </div>
            <div class="row">
                <div class="col-2">電話：</div>
                <div class="col-1">{{ $order->phone }}</div>
            </div>
            <div class="row">
                <div class="col-2">Email:</div>
                <div class="col-5">{{ $order->email }}</div>
            </div>
            <div class="row">
                @if ($order->shopping_way == 1)
                    <div class="col-2">宅配地址：</div>
                    <div class="col-5">{{ $order->address }}</div>
                @else
                    <div class="col-2">店到店地址：</div>
                    <div class="col-5">{{ $order->store_address }}</div>
                @endif
            </div>
            <div class="row line"></div>
            <div class="row total d-flex flex-column">
                <div class="totalbox">
                    <div>
                        <span class="left">數量：</span>
                        <span class="right">{{ $order->product_qty }}</span>
                    </div>
                    <div>
                        {{-- 寫一個php來算小計 --}}
                        {{-- 理想狀況在controller就要算好在帶進來 --}}
                        <span class="left">小計：</span>
                        <span class="right">${{ $order->subtotal }}</span>
                    </div>
                    <div>
                        <span class="left">運費：</span>
                        <span class="right">${{ $order->shipping_fee }}</span>
                    </div>
                    <div>
                        <span class="left">總計：</span>
                        <span class="right">${{ $order->total }}</span>
                    </div>
                </div>
            </div>
            <div class="row line"></div>
            <div class="row next d-flex justify-content-between">
                <button type="button">
                    <a href="/bootstrap">
                        返回頁首
                    </a>
                </button>
                {{-- <button type="submit">建立訂單</button> --}}
            </div>
        </div>
    </section>
    </main>
@endsection
