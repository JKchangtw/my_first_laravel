@extends('bootstrap.TemplateUser')
@section('title')
    商品資訊頁
@endsection
@section('link')
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
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
    background: #eee;
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
    background: #000;
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
                <h1 style="color:blue;font-weight:bold">商品資訊</h1>
            </div>
            <div class="row line mb-2"></div>
            {{-- enctype是為了讓我們可以傳圖片 --}}
            <form class="d-flex flex-column" action="/goods/update/{{ $goods->id }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <h2>{{ $goods->goods_name }}</h2>

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


                {{-- <img src="{{ $goods->goods_img }}" alt=""> --}}
                {{-- <label for="goods_img">商品主圖片更新</label> --}}
                {{-- <input type="file" name="goods_img" id="goods_img"> --}}
                {{-- <h3>其他圖片>>></h3> --}}
                <div class='d-flex flex-wrap align-items-start'>
                    {{-- 直接呼叫要關聯的那個函式 --}}
                    @foreach ($goods->imgs as $item)
                        {{-- <div class="d-flex flex-column me-3 " style="width:150px" id="sup_img{{ $item->id }}">
                            <img src="{{ $item->img_path }}" alt="" class="w-100"> --}}
                        {{-- *用form表單做刪單張次要圖片 不是最好的作法 so先註解 --}}
                        {{-- *<button class="btn btn-danger w-100" type='button' onclick="document.querySelector('#deleteForm{{$item->id}}').submit();">刪除圖片</button> --}}
                        {{-- <button class="btn btn-danger w-100" type='button'
                                onclick="delete_img({{ $item->id }});">刪除圖片</button> --}}
                        {{-- </div> --}}
                    @endforeach
                </div>
                {{-- <label for="goods_img">商品次圖片上傳</label> --}}
                {{-- <input type="file" name="second_img[]" id="goods_img2" multiple accept="image/*" p> --}}


                {{-- <label for="">商品名稱>>></label> --}}
                {{-- <input type="text" name="goods_name" id="goods_name" value="{{ $goods->goods_name }}"> --}}
                {{-- <h3>商品名稱：{{ $goods->goods_name }}</h3> --}}

                {{-- <label for="">商品售價>>></label> --}}
                {{-- <input type="number" name="goods_price" id="goods_price" value="{{ $goods->goods_price }}"> --}}
                <h5>商品介紹：{{ $goods->goods_intro }}</h5>


                {{-- <label for="">商品數量>>></label> --}}
                {{-- <input type="number" name="goods_count" id="goods_count" value="{{ $goods->goods_count }}"> --}}
                <h5>商品售價：{{ $goods->goods_price }}NTD</h5>

                {{-- <label for="">商品介紹>>></label> --}}
                {{-- <input type="text" name="goods_intro" id="goods_intro" value="{{ $goods->goods_intro }}"> --}}
                <h6>商品數量：{{ $goods->goods_count }}</h6>

                <div class="button-box d-flex justifu-content-center">
                    <button onclick="history.back()" type="reset" class="btn btn-danger">返回上頁</button>
                    <button class="create btn btn-primary">加入購物車</button>
                </div>
            </form>
            {{-- *用form表單做法 先註解 --}}
            {{-- @foreach ($goods->imgs as $item)
            <form action="/goods/delete_img/{{$item->id}}" method="post" hidden id="deleteForm{{$item->id}}">
                @csrf
                @method('DELETE')
             </form>
            @endforeach --}}
        </div>

    </section>
@endsection
@section('script')
    <script>
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
    </script>

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


    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
@endsection
