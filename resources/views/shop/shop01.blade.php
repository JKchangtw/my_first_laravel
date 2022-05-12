@extends('bootstrap.TemplateUser')
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
    background-color: aquamarine;
    color: black;
    }

    #shopping-step01 .steps .progress-25::before {
    content: '';
    width: 50%;
    height: 100%;
    background-color: aquamarine;
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
    width: 80px;
    height: 80px;
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
    {{-- width: 80px;
    height: 30px;
    border: unset; --}}
    {{-- background-color: aquamarine; --}}
    {{-- font-size: 14px; --}}
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
    .row.tol{
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
                <div class="row d-flex flex-row" style="height: 100px; position:relative">
                    <div class="col-7 d-flex flex-row h-100">
                        <div class="img1 me-5">
                            <img src="{{ $item->product->goods_img }}" alt="">
                        </div>
                        <div class="buywhat ms-5">
                            <h3 style="line-height: 100px">{{ $item->product->goods_name }}</h3>
                            {{-- <h6>#41551</h6> --}}
                            <div class="number" data-product_qty="{{ $item->product->goods_count }}"
                                data-product_price="{{ $item->product->goods_price }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-flex justify-content-between" >
                        <div class="count col-8 d-flex flex-row justify-content-around">
                            <div class="minus" id="minus"
                                style="font-size:30px; font-weight:bold; line-height:100px">-</div>
                            {{-- 表單吃name 加上[]就變陣列 才會有很多個商品 的數量 --}}
                            <input class="qty" type="number" id="qty" name='qty[]' value="{{ $item->qty }}"
                                readonly>
                            <div class="plus" id="plus"
                                style="font-size:30px; font-weight:bold; line-height:100px">+</div>
                        </div>
                        <div class="price col-4" style="font-family: monospace; font-size:18px; line-height: 100px">
                            ${{ $item->product->goods_price * $item->qty }}</div>

                        {{-- <a class="col-2 btn btn-danger" href="/delete_from_cart/{{$item->id}}">刪除</a> --}}
                    </div>
                    <div class="col-1 btn btn-danger" style="height:40px;position:absolute;top:50%;right:0;transform:translateY(-50%);"
                        onclick="delete_cart('{{ $item->id }}')">刪除</div>
                </div>
                <div class="row line"></div>
            @endforeach

            <div class="row tol d-flex flex-column" style="position: relative;">
                <div class="col-3 totalbox" style="position: absolute; top:50% ;transform:translateY(-50%);right:0">
                    <div>
                        <span class="left">品項：</span>
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
                        <span class="subtotal">${{ $subtotal }}</span>
                    </div>
                    <div>
                        <span class="left">運費：</span>
                        <span class="right">待計算</span>
                    </div>
                    <div>
                        <span class="left">總計：</span>
                        <span class="total">${{ $subtotal }}</span>
                    </div>
                </div>
            </div>
            <div class="row line"></div>
            <div class="row next d-flex justify-content-between">
                <div class="back d-flex">
                    <i class="fa-solid fa-arrow-left"></i>
                    <a class="back" href="/bootstrap">返回購物</a>
                </div>
                <button class="col-1 next btn btn-primary" type="submit" style="height:40px;background-color: aquamarine;color:blue;">下一步</button>
            </div>
        </form>
    </section>
@endsection
@section('script')
    <script>
        //用class綁 因為會有很多個
        const minus = document.querySelectorAll('.minus');
        const qty = document.querySelectorAll('.qty');
        const plus = document.querySelectorAll('.plus');
        const price = document.querySelectorAll('.price');
        //為知道各產品所剩數量以方便判斷 所以將資料印在html中 再用js抓進來
        const number = document.querySelectorAll('.number');
        //小計與總計
        const subtotal = document.querySelector('.subtotal');
        const total = document.querySelector('.total');

        for (let i = 0; i < minus.length; i++) {
            minus[i].onclick = function() {
                //用parseInt將字串轉換成數字
                if (parseInt(qty[i].value) > 1) {
                    qty[i].value = parseInt(qty[i].value) - 1
                    price[i].innerHTML = '$' + (parseInt(number[i].dataset.product_price) * parseInt(qty[i].value));
                }
                get_total();

            }
            plus[i].onclick = function() {
                if (parseInt(qty[i].value) < parseInt(number[i].dataset.product_qty)) {
                    qty[i].value = parseInt(qty[i].value) + 1
                    price[i].innerHTML = '$' + (parseInt(number[i].dataset.product_price) * parseInt(qty[i].value));

                }
                get_total();

            }

        }


        function get_total() {
            var sum = 0
            for (let j = 0; j < minus.length; j++) {
                sum += parseInt(number[j].dataset.product_price) * parseInt(qty[j].value);
            }
            subtotal.innerHTML = '$' + sum;
            total.innerHTML = '$' + sum + '(尚未加運費)';

        }

        function delete_cart(id) {
            console.log(id);
            var form = new FormData();
            //
            form.append('_token', '{{ csrf_token() }}');
            fetch("/delete_from_cart/" + id, {
                method: 'POST',
                body: form
            }).then(res => {
                //方法一：重整頁面 dirty but work
                location.reload();
            })
        }
    </script>
@endsection
