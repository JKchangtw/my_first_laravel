@extends('bootstrap.TemplateUser')
@section('title')
    商品資訊頁
@endsection
@section('link')
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css"> --}}
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

    .form .row.line{
    width:100%;
    height:2px;
    background-color:gray;
    }
    .goods_img{
    width:450px;
    height:250px;
    background-color:lightgray;
    }
    .goods_img img{
    width:350px;
    height:200px;
    }
    img{
    width:350px;
    height:200px;
    }
    .goods_priority{
    width:200px;
    }
    .container-fluid.form{
    background-color:lightgray;
    width:80%;
    margin:0 auto;
    }

    html,
    body {
    position: relative;
    height: 100%;

    }

    body {
    {{-- background: #eee; --}}
    font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
    font-size: 14px;
    color: #000;
    margin: 0;
    padding: 0;
    }

    .swiper {
    width: 100%;
    height: 100%;
    }

    .swiper-slide {
    text-align: center;
    font-size: 18px;
    background: #fff;

    /* Center slide text vertically */
    display: -webkit-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    -webkit-justify-content: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    -webkit-align-items: center;
    align-items: center;
    }

    .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    }

    body {
    {{-- background: #000; --}}
    color: #000;
    }

    .swiper {
    width: 50%;
    height: 150px;
    margin-left: auto;
    margin-right: auto;
    }

    .swiper-slide {
    background-size: cover;
    background-position: center;
    }

    .mySwiper2 {
    height: 40%;
    width: 50%;
    }

    .mySwiper {
    height: 20%;
    box-sizing: border-box;
    padding: 10px 0;
    }

    .mySwiper .swiper-slide {
    width: 25%;
    height: 100%;
    opacity: 0.4;
    }

    .mySwiper .swiper-slide-thumb-active {
    opacity: 1;
    }

    .swiper-slide img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    }
@endsection
@section('main')
    <section class="form">
        <div class="container-fluid form">

            <div class="row">
                <h1 style="color:blue;font-weight:bold; font-family:monospace">商品資訊</h1>
            </div>
            <div class="row line mb-2"></div>


            <form class="d-flex flex-column">
                @csrf
                <h2 style="background: white; color:black; font-family:fantasy">{{ $goods->goods_name }}</h2>

                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ $goods->goods_img }}" />
                        </div>
                        @foreach ($goods->imgs as $item)
                            <div class="swiper-slide">
                                <img src="{{ $item->img_path }}" />
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <div thumbsSlider="" class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ $goods->goods_img }}" />
                        </div>
                        @foreach ($goods->imgs as $item)
                            <div class="swiper-slide">
                                <img src="{{ $item->img_path }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- <div class='d-flex flex-wrap align-items-start'>
                    直接呼叫要關聯的那個函式
                    @foreach ($goods->imgs as $item)
                    @endforeach
                </div> --}}
                <div class="row">
                    <div class="col-8">
                        <h5 style="font-family:monospace">商品介紹：{{ $goods->goods_intro }}</h5>
                    </div>
                    <div clsss="col-4">
                        <h5 style="font-family:monospace">商品售價：{{ $goods->goods_price }} NTD</h5>

                        <h6 style="font-family:monospace">商品剩餘數量：{{ $goods->goods_count }}</h6>
                        <div>
                            {{-- <i class="fa-solid fa-minus" id="minus"></i> --}}
                            <span id="minus" style="font-size:18px; font-weight:bold" style="cursor: pointer;">-</span>
                            <input type="number" id="qty" name='qty' value="1">
                            {{-- <i class="fa-solid fa-plus" id="plus"></i> --}}
                            <span id="plus" style="font-size:18px; font-weight:bold" style="cursor: pointer;">+</span>
                        </div>

                        <div class="button-box d-flex justifu-content-between">
                            <button onclick="history.back()" type="reset" class="btn btn-danger">返回上頁</button>
                            <input type="number" id="product_id" value="{{ $goods->id }}" hidden>
                            <button class="create btn btn-primary" type="button" id="add_product">加入購物車</button>
                            {{-- <a role="button" id="add_product">加入購物車</a> --}}
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </section>
@endsection
@section('script')
    <script>
        const minus = document.querySelector('#minus');
        const qty = document.querySelector('#qty');
        const plus = document.querySelector('#plus');
        const add_product = document.querySelector("#add_product");
        //console以確認有綁定成功
        // console.log(add_product);

        minus.onclick = function() {
            //用parseInt將字串轉換成數字
            if (parseInt(qty.value) > 1) {
                qty.value = parseInt(qty.value) - 1;
            }
        }
        plus.onclick = function() {
            if (parseInt(qty.value) < {!! $goods->goods_count !!}) {
                qty.value = parseInt(qty.value) + 1;
            }
        }

        add_product.onclick = function() {
            // var add_qty = parseInt(qty.value);
            //在JS建立一個虛擬的form表單
            var formData = new FormData();
            formData.append('add_qty', parseInt(qty.value));
            //append增加欄位 把 id 抓進 formData中?
            formData.append('product_id', {!! $goods->id !!});
            //
            formData.append('_token', '{!! csrf_token() !!}');

            //用fetch送 後面寫網址接路由(想訪問的url) & 方法 & body就是建好的虛擬表單 送出formData
            fetch("/add_to_cart", {
                    method: 'POST',
                    body: formData,
                })
                .then(response => response.json())
                //失敗結果處理
                .catch(error => {
                    // console.log('');
                    alert('新增失敗，請再嘗試一次')
                    return 'error';
                })
                //成功結果處理
                .then(response => {
                    if (response != 'error') {
                        if (response.result == 'success')
                            alert('商品已加入購物車')
                        else {
                            alert('新增失敗:' + response.message)
                        }
                    }
                })
        }
    </script>

    {{-- <script>
        function delete_img(id) {
            // console.log('')

            //準備表單以及內部的資料
            let formData = new FormData();
            //要傳給後端的參數key和值value
            formData.append('_method', 'DELETE');
            formData.append('_token', '{{ csrf_token() }}');

            //將準備好的表單藉由fetch送到後台
            fetch("/goods/delete_img/" + id, {
                    method: "POST",
                    body: formData
                })

                //fetch非同步 不會主動更新頁面 所以
                .then(function(response) {
                    //做法一 用reload重整頁面
                    // location.reload();
                    //做法二 成功將資料庫刪除資料後 將自己的HTML消除
                    let element = document.querySelector('#sup_img' + id);
                    element.parentNode.removeChild(element);
                });

        }
    </script> --}}

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".mySwiper2", {
            spaceBetween: 10,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            thumbs: {
                swiper: swiper,
            },
        });
    </script>


    {{-- <script src="jquery-3.6.0.min.js"></script> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}

    {{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script> --}}
@endsection
