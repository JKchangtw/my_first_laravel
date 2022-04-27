<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap首頁</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    {{-- 通常要連結到public的CSS獨立檔 如以下 --}}
    {{-- <link rel="stylesheet" href="{{ asset('CSS/bootstrap.css') }}"> --}}
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        #logo {
            height: 80px;
            background-color: white;
        }

        #logo img {
            height: 100%;
            width: 120px;
        }

        #func {
            height: 80px;
            background-color: white;
        }

        #func .container .row div {
            line-height: 80px;
        }

        #icon {
            height: 80px;
            background-color: aqua;
        }

        #shoppingcar {
            border: unset;
            background-color: unset;
            font-size: 32px;

        }

        #user {
            border: unset;
            background-color: unset;
            font-size: 36px;
        }

        .banner {
            width: 100%;
            height: 500px;
        }

        .swiper {
            width: 100%;
            height: 600px;
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

        .man {
            width: 100%;
            height: 200px;
            background-color: white;
            position: relative;
            margin-bottom: 30px;
        }

        /* .innerBlock {
            width: 85%;
            height: 200px;
            background-color: gray;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        } */

        .man .container {
            /* width: 90%;
            height: 80%; */
            background-color: white;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .man .row {
            text-align: center;
        }


        /*  */
        #line {
            width: 70px;
            height: 3px;
            background-color: #007Aff;
            margin: 0 auto;
            margin-bottom: 50px;
            border-radius: 3px;
        }

        #card {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            text-align: center;
        }

        .cardsection .img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            /* opacity: 30%; */
            /* background-color: skyblue; */
            margin: 0 auto;
            z-index: 0;
        }

        .cardsection .img img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }

        .imgimg {
            font-size: 36px;
            line-height: 80px;
            text-align: center;
        }

        .card {
            border: unset;
            margin-bottom: 40px;
        }

        .button {
            height: 40px;
            width: 100px;
            background-color: #007Aff;
            border-radius: 5px;
            border: unset;
            margin: auto;
            color: white;
            margin-bottom: 100px;
        }

        .master {
            width: 100%;
            height: 100px;
            margin-bottom: 50px;
        }

        #gallery {
            margin-bottom: 50px;
        }

        #gallery .row>* {
            padding: 0px 8px;
        }

        #gallery .col-6 {
            height: 700px;
            background-color: whitesmoke;
            padding-top:25px;
        }

        #gallery img {
            width: 100%;
        }

        #gallery .small {
            width: calc(50% - 8px);
            height: 30%;
        }

        #gallery .big {
            width: 100%;
            height: 60%;
        }

        #gallery .left .big {
            margin-top: 16px;
            height: 60%;
        }

        #gallery .right .big {
            margin-bottom: 16px;
            height: 60%;
        }

        #pricing {
            text-align: center;
            margin-bottom: 50px;
        }

        .planTable {
            width: 100%;
            height: 500px;
        }

        .table {
            width: 60%;
            height: 250px;
            margin: 0 auto;
        }

        .table thead tr th {
            background-color: whitesmoke;

        }

        .button {
            position: relative;
        }

        .table tfoot {
            border-style: none;
        }

        tfoot button {
            width: 80px;
            height: 40px;
            background-color: #007Aff;
            border-radius: 5px;
            border: unset;
            margin: auto;
            color: white;
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
        }

        #check {
            float: right;
        }

        .btn.btn-primary {
            background-color: unset;
            border: unset;
            color: #007Aff;
        }

        .pitchfork {
            height: 150px;
        }

        .pitchfork .container {
            height: 150px;
            display: flex;
            /* flex-wrap: wrap; */
            flex-direction: row;
        }

        .pitchfork .left {
            height: 50px;
            width: 40vw;
            font-size: 20px;
            float: left;

        }

        .pitchfork .left .line {
            width: 60px;
            height: 3px;
            background-color: #007Aff;
            border-radius: 3px;
        }

        .pitchfork .right {
            height: 100px;
            width: 50vw;
            font-size: 8px;
            color: gray;
            float: right;
        }

        .cardsection2 .container-fluid {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        .cardsection2 .img {
            width: 90%;
            margin: 0 auto;
            /* height: 120px; */
            margin-top: 18px;
            /* margin-bottom: 12px ; */
            overflow: hidden;
        }

        .cardsection2 .card {
            width: 24%;
            background-color: whitesmoke;


        }

        .card-body span {
            color: #007Aff;
            font-size: 12px;
        }

        .card-body h5 {
            font-size: 14px
        }

        .card-body p {
            font-size: 12px;
            ;
            color: dimgray;
        }

        .cardsection3 .container {
            width: 50%;
            margin: 0 auto;
        }

        .cardsection3 .row {
            /* width: 100%; */
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .cardsection3 .row.reverse {
            flex-direction: row-reverse;

        }

        .cardsection3 .row.line {
            height: 1px;
            width: 100%;
            border-radius: 1px;
            margin: 0 auto;
            background-color: gainsboro;

        }

        .cardsection3 .img {
            width: 80px;
            height: 80px;
            background-color: #e0e7ff;
            border-radius: 50%;
            margin: auto 0;

        }

        .cardsection3 .imgimg {
            color: #6366f1;
        }

        .cardsection3 a {
            padding: unset;
            color: #6f72f2;
            font-size: 12px;
        }

        .cardsection3 .card-body {
            width: calc(100% - 100px);
        }

        .cardsection3 button {
            width: 80px;
            height: 30px;
            background-color: #6366f1;
            margin: 0 auto;
            border: unset;
            border-radius: 5px;
            color: white;
            font-size: 14px;
            margin-top: 20px;
            margin-bottom: 50px;
        }

        @media(max-width:1100px) {

            #merch .subtitle {
                letter-spacing: 1px;
                color: rgb(107, 144, )
            }

            #merch .color .ball {
                width: 20px;
                height: 20px;
            }







        }

        @media(max-width:640px) {
            .cardsection3 .row {
                display: flex;
                flex-direction: column;
                justify-content: space-between;

            }

            .cardsection3 .row.reverse {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .cardsection3 .img,
            .card-body,
            .card-title,
            .card-text {
                margin: 0 auto;
                text-align: center;
            }

            .cardsection3 .row.line {
                margin-bottom: 10px;
            }
        }

        .merch .container {
            height: 500px;
            margin-bottom: 150px;
        }

        .merch #merch-img {
            height: 500px;
            background-image: url(/digipack_IMG/400x400.jpg);
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
        }

        .merch #merch-right {
            height: 500px;
        }

        .rounded-circle {
            width: 16px;
            height: 16px;
        }

        .star {
            color: #6366f1;
        }

        .content {
            font-size: 14px;
        }

        .merch span {
            font-size: 12px;
            color: gray
        }

        .merch .add button {
            width: 80px;
            height: 30px;
            background-color: #6366f1;
            margin: 0 auto;
            border: unset;
            border-radius: 5px;
            color: white;
            font-size: 14px;
        }

        .merch .add .fav {
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: gray;
        }

        .merch .add .fav div {
            text-align: center;
            line-height: 30px;
        }

        .cardsection4 img {
            width: 100%;
            height: 200px;
        }

        .map {
            margin-bottom: 50px;
            width: 100vw;
            height: 600px;
            position: relative;
        }

        .map iframe {
            width: 100%;
            height: 100%;
            opacity: 0.75;
            filter: grayscale(0.9);

        }

        .map .feedback {
            background-color: white;
            border-radius: 20px;
            position: absolute;
            height: 80%;
            width: 40%;
            right: 50px;
            top: 50%;
            transform: translateY(-50%);
            z-index: 100000000;
            padding-top: 20px;
            padding-left: 10px;
        }




        .footer .footerLogo {
            background-image: url("{{ asset('digipack_IMG/logo2.jpg') }}");
            background-position: center;
            background-size: cover;
            background-repeat: no-repeat;
            width: 100px;
            height: 100px;
        }

        .footer .footerLeft {
            width: 30%;

        }

        .footer .footerRight {
            width: 70%;

        }

        .footer .catarow1 {
            width: 50%;
            /* padding-left:calc((50% - 191.5)*1/3) 0 ; */
            padding: 0 calc((100% - 383px)*1/5);
        }

        .footer .catarow2 {
            width: 50%;
            padding: 0 calc((100% - 383px)*1/5);

        }

        .end {
            height: 80px;
            background-color: #f3f4f6;
            position: relative;
        }

        .end .container {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 10%;
        }

        .no-img {
            width: 80px;
            height: 80px;
            background-color: wheat;
            border-radius: 50%;
            font-size: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto;

        }

        .functionForm {
            position: relative;
        }

        .functionForm .functionBtn {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        #shoppingcar {
            border: unset;
            background-color: unset;
            font-size: 24px;
        }

        #commet {
            border: unset;
            background-color: unset;
            font-size: 28px;
        }

        #user {
            border: unset;
            background-color: unset;
            font-size: 28px;
        }

        #banner_manage {
            border: unset;
            background-color: unset;
            /* font-size: 36px; */
        }

        #goods_manage {
            border: unset;
            background-color: unset;
        }

        #logo form {
            height: 80px;
        }

    </style>
</head>

<body>
    <nav>
        <div class="container-fluid">
            <div class="row">
                <div id="logo" class="col-4">
                    <form action="/bootstrap" class="ps-5">
                        <button id='frontpageBtn' type='submit' style="border: unset" class="h-100">
                            <img src="/digipack_IMG/logo.jpg" alt="" class="h-100">
                        </button>
                    </form>
                </div>
                <div id="func" class="col-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-2">Blog</div>
                            <div class="col-2">Portfolio</div>
                            <div class="col-2">
                                <form action="/goods">
                                    <button id="goods_manage" type="submit">商品管理</button>
                                </form>
                            </div>
                            <div class="col-2">
                                <form action="/banner">
                                    <button id="banner_manage" type="submit">Banner管理</button>
                                </form>
                            </div>
                            <div class="col-1 fs-3">
                                <form action="/shop01">
                                    <button id="shoppingcar" type="submit">
                                        <i class="fa-solid fa-cart-shopping"></i>

                                    </button>
                                </form>
                            </div>

                            <div class="col-1 fs-3">
                                <form action="/comment">
                                    <button id="user" type="submit">
                                        <i class="fa-solid fa-comment-dots"></i>
                                    </button>
                                </form>
                            </div>

                            <div class="col-1 fs-3">
                                <form action="/login">
                                    <button id="user" type="submit">
                                        <i class="fa-solid fa-circle-user"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main>
        <section class="banner">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ($bannerlist as $banners)
                        <div class="swiper-slide">
                            <img src="{{ $banners->img_path }}" alt="">
                        </div>
                    @endforeach
                    {{-- <div class="swiper-slide">
                        <img src="{{ asset('image/gluten-free-thin-crust-pizza.jpg') }}" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="{{ asset('image/Gluten-Free-Pizza-3.2.jpg') }}" alt="">
                    </div> --}}
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <section class="man">

            <div class="container">
                <div class="row">
                    <h3>Raw Denim Heirloom Man Braid</h3>
                    <p>Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                        taxidermy. Gastropub
                        indxgo juice poutine, ramps microdosing banh mi pug.</p>
                    <div id="line" class="row"></div>
                </div>
            </div>

        </section>
        <section class="cardsection">
            <div class="container-xxl d-flex justify-content-around">
                @foreach ($data2 as $news)
                    {{-- <div id="card" class="row" style="width: 18rem;">
                        <div class="card">
                            <div class="img">
                                <img src="@if ($news->img == '' || $news->img == null) {{ asset('image/imgUpload.jpg') }}
                            @else
                                {{ $news->img }} @endif"
                                    alt="">
                                <img src="{{ $news->img }}" alt="">
                             </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $news->title }}</h5>
                                <p class="card-text">{{ $news->content }}</p>
                                <a href="#" class="btn btn-primary">Learn More &nbsp <i
                                        class="fa-solid fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div> --}}
                    {{-- 以上是沒有圖片時上預設圖片 --}}
                    {{-- 以下測試沒有圖片時上字 --}}
                    <div class="card text-center">
                        @if ($news->img == '' || $news->img == null)
                            <div class="no-img">{{ substr($news->title, 0, 1) }}</div>
                        @else
                            <div class="img">
                                <img src="{{ $news->img }}" alt="">
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class='card-title'>{{ $news->title }}</h5>
                            <p class='card-text'>{{ $news->content }}</p>
                            <span class='card-text'>
                                <small class='text-muted'>Learn More</small>
                            </span>
                            <i class="fa-solid fa-arrow-right"></i>
                        </div>
                    </div>
                @endforeach


            </div>
            {{-- 以下是沒有foreach時的其他兩張card --}}
            {{-- <div class="card" style="width: 18rem;">
                    <div class="img">
                        <div class="imgimg">
                            <img src="{{$news->img}}" alt="">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$news->title}}</h5>
                        <p class="card-text">{{$news->content}}</p>
                        <a href="#" class="btn btn-primary">Learn More &nbsp <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="img">
                        <div class="imgimg">
                            <img src="{{$news->img}}" alt="">
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$news->title}}</h5>
                        <p class="card-text">{{$news->content}}</p>
                        <a href="#" class="btn btn-primary">Learn More &nbsp <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <button class="button">Button</button>
            </div>

        </section>
        <section class="master">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 fs-2">Master Cleanse Reliac Heirloom</div>
                    <div class="col-8 fs-6">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical
                        gentrify,
                        subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing
                        selfies heirloom.</div>
                </div>
            </div>
        </section>
        <section id="gallery">
            <div class="container-xxl">
                <!-- <div class="row"></div> -->
                <div class="row ">
                    <div class="col-6 left d-flex flex-wrap justify-content-between">
                        <div class="small h-45">
                            <img src="{{ $data1[0]->img }}" alt="" class="h-100">
                        </div>
                        <div class="small h-45">
                            <img src="{{ $data1[0]->img }}" alt="" class="h-100">
                        </div>
                        <div class="big h-45">
                            <img src="{{ $data1[1]->img }}" alt="" class="h-100">
                        </div>
                    </div>
                    <div class="col-6 right  d-flex flex-wrap justify-content-between">
                        <div class="big h-45">
                            <img src="{{ $data1[0]->img }}" alt="" class="h-100">
                        </div>
                        <div class="small h-45">
                            <img src="{{ $data1[1]->img }}" alt="" class="h-100">
                        </div>
                        <div class="small h-45">
                            <img src="{{ $data1[1]->img }}" alt="" class="h-100">
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="pricing">
            <div id="pricing" class="container-sm">
                <div class="row">
                    <div class="col-12 fs-2">Pricing</div>
                    <div class="col-12 fs-6">Banh mi cornhole echo park skateboard authentic crucifix neutra tilde
                        lyft
                        biodiesel artisan direct trade mumblecore 3 wolf moon twee</div>
                </div>
            </div>
        </section>
        <section class="planTable">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Plan</th>
                        <th scope="col">Speed</th>
                        <th scope="col">Storage</th>
                        <th scope="col">Price</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">Start</th>
                        <td>5 Mb/s</td>
                        <td>15 GB</td>
                        <td>Free</td>
                        <td><input id="check" name="check" type="radio">
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Pro</th>
                        <td>25 Mb/s</td>
                        <td>25 GB</td>
                        <td>$24</td>
                        <td><input id="check" name="check" type="radio">
                    </tr>
                    <tr>
                        <th scope="row">Business</th>
                        <td>36 Mb/s</td>
                        <td>40 GB</td>
                        <td>$50</td>
                        <td><input id="check" name="check" type="radio">
                    </tr>
                    <tr>
                        <th scope="row">Exclusive</th>
                        <td>48 Mb/s</td>
                        <td>120 GB</td>
                        <td>$72</td>
                        <td><input id="check" name="check" type="radio">
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th><a href="#" class="btn btn-primary">Learn More &nbsp <i
                                    class="fa-solid fa-arrow-right"></i></a></th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td class="button"><button>Button</button></td>
                    </tr>
                </tfoot>
            </table>
        </section>
        <section class="pitchfork">
            <div class="container-xxl">
                <div class="left">
                    <div>Pitchfork Kickstarter Taxidermy</div>
                    <div class="line"></div>
                </div>
                <div class="right">
                    Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke
                    farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom
                    prism food truck ugh squid celiac humblebrag.
                </div>
            </div>
        </section>
        <section class="cardsection2">
            <div class="container-fluid">
                <div class="card">
                    <div class="img">
                        <img width="225" height="135    " src="" onerror="errorImg(this)" />
                        {{-- <img src="/digipack_IMG/720x400.jpg" class="card-img-top" alt="..."> --}}
                    </div>
                    <div class="card-body">
                        <span>SUBTITlE</span>
                        <h5 class="card-title">Chichen Itza</h5>
                        <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                            hexagon
                            disrupt edison bulbche.</p>

                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img width="225" height="135    " src="" onerror="errorImg(this)" />
                        {{-- <img src="/digipack_IMG/721x401.jpg" class="card-img-top" alt="..."> --}}
                    </div>
                    <div class="card-body">
                        <span>SUBTITlE</span>
                        <h5 class="card-title">Colosseum Roma</h5>
                        <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                            hexagon
                            disrupt edison bulbche.</p>

                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img width="225" height="135    " src="" onerror="errorImg(this)" />
                        {{-- <img src="/digipack_IMG/722x402.jpg" class="card-img-top" alt="..."> --}}
                    </div>
                    <div class="card-body">
                        <span>SUBTITlE</span>
                        <h5 class="card-title">Great Pyramid of Giza</h5>
                        <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                            hexagon
                            disrupt edison bulbche.</p>

                    </div>
                </div>
                <div class="card">
                    <div class="img">
                        <img width="225" height="135    " src="" onerror="errorImg(this)" />
                        {{-- <img src="/digipack_IMG/723x403.jpg" class="card-img-top" alt="..."> --}}
                    </div>
                    <div class="card-body">
                        <span>SUBTITlE</span>
                        <h5 class="card-title">San Francisco</h5>
                        <p class="card-text">Fingerstache flexitarian street art 8-bit waistcoat. Distillery
                            hexagon
                            disrupt edison bulbche.</p>

                    </div>
                </div>
            </div>
        </section>
        <section class="cardsection3">
            <div class="container">
                <div class="row rowfirst">
                    <div class="img">
                        <div class="imgimg">
                            <i class="fa-solid fa-heart-pulse"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Shooting Stars</h5>
                        <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                            taxidermy.
                            Gastropub indxgo juice poutine.</p>
                        <a href="#" class="btn btn-primary">Learn More &nbsp <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="row line"></div>
                <div class="row reverse">
                    <div class="img">
                        <div class="imgimg">
                            <i class="fa-solid fa-scissors"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">The Catalyzer</h5>
                        <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                            taxidermy.
                            Gastropub indxgo juice poutine.</p>
                        <a href="#" class="btn btn-primary">Learn More &nbsp <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="row line"></div>
                <div class="row rowlast">
                    <div class="img">
                        <div class="imgimg">
                            <i class="fa-regular fa-user"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">The 400 Blows</h5>
                        <p class="card-text">Blue bottle crucifix vinyl post-ironic four dollar toast vegan
                            taxidermy.
                            Gastropub indxgo juice poutine.</p>
                        <a href="#" class="btn btn-primary">Learn More &nbsp <i
                                class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="row">
                    <button>Button</button>
                </div>
            </div>
        </section>
        <section class="merch">
            <div class="container">
                <div class="row d-flex flex-column flex-lg-row">
                    <div class="col-md-7 h-auto ">
                        <img src="{{ $goodsintro[0]->goods_img }}" id="merch-img" class="w-100">
                    </div>
                    <div id="merch-right" class="col-md-5 pt-4 pb-4 pe-0 ps-5 h-100">
                        <span class="subtitle">BRAND NAME</span>
                        <h3>{{ $goodsintro[0]->goods_name }}</h3>
                        <div class="review d-flex">
                            <div class="stars d-flex me-2 align-items-center">
                                <div class="star"><i class="fa-solid fa-star"></i></div>
                                <div class="star"><i class="fa-solid fa-star"></i></div>
                                <div class="star"><i class="fa-solid fa-star"></i></div>
                                <div class="star"><i class="fa-solid fa-star"></i></div>
                                <div class="star"><i class="fa-regular fa-star"></i></div>
                            </div>
                            <div class="score">4 Reviews</div>
                            <div class="social"></div>
                        </div>
                        <div class="content">
                            {{ $goodsintro[0]->goods_intro }}
                        </div>
                        <div class="choice d-flex mt-3 mb-3 border-bottom pb-3">
                            <div class="color d-flex align-items-center">
                                <label for="" class="me-2">Color</label>
                                <button class="rounded-circle ball bg-primary me-1"></button>
                                <button class="rounded-circle ball bg-danger me-1"></button>
                                <button class="rounded-circle ball bg-warning me-3"></button>
                            </div>
                            <div class="size d-flex">
                                <label for="size" class="me-1">Size</label>
                                <select name="" id="size">
                                    <option value="">SM</option>
                                    <option value="">M</option>
                                    <option value="">L</option>
                                    <option value="">XL</option>
                                </select>
                            </div>
                        </div>
                        <div class="add d-flex flex-row justify-content-between">
                            <div class="price">${{ $goodsintro[0]->goods_price }}</div>
                            <div class="add-right d-flex">
                                <button type="button" class="">Button</button>
                                <div class="fav ms-2">
                                    <div><i class="fa-solid fa-heart"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="cardsection4">
            <div class="container-fluid">
                <div class="row d-flex flex-row justify-content-around">
                    @foreach ($goodslist as $goods)
                        <div class="col-3 card">
                            <img src="{{ $goods->goods_img }}" class="card-img-btm1" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">CATEGORY</h5>
                                <p class="card-text">{{ $goods->goods_name }}</p>
                                <p class="card-text"><small
                                        class="text-muted">{{ $goods->goods_price }}</small></p>
                            </div>
                        </div>
                    @endforeach
                </div>
                {{-- <div class="row d-flex flex-row justify-content-around">
                    <div class="col-2 card">
                        <img src="/digipack_IMG/420x260.jpg" class="card-img-btm1" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CATEGORY</h5>
                            <p class="card-text">The Catalyzer</p>
                            <p class="card-text"><small class="text-muted">$16.00</small></p>
                        </div>
                    </div>
                    <div class="col-2 card">
                        <img src="/digipack_IMG/420x260.jpg" class="card-img-btm2" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CATEGORY</h5>
                            <p class="card-text">Shooting Stars</p>
                            <p class="card-text"><small class="text-muted">$21.15</small></p>
                        </div>
                    </div>
                    <div class="col-2 card">
                        <img src="/digipack_IMG/420x260.jpg" class="card-img-btm3" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CATEGORY</h5>
                            <p class="card-text">Neptune</p>
                            <p class="card-text"><small class="text-muted">$12.00</small></p>
                        </div>
                    </div>
                    <div class="col-2 card">
                        <img src="/digipack_IMG/420x260.jpg" class="card-img-btm4" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">CATEGORY</h5>
                            <p class="card-text">The 400 Blows</p>
                            <p class="card-text"><small class="text-muted">$18.40</small></p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
        <section class="map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3437.147792544538!2d120.67525104157633!3d24.117982129344913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34693cfd9eac3815%3A0x996aaee2f2521b0e!2z5Lit6IiI5rmW!5e0!3m2!1szh-TW!2stw!4v1649921450965!5m2!1szh-TW!2stw"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"> </iframe>
            <div class="feedback">
                <h4>Feedback</h4>
                <p>Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                <p>Email</p>
                <input type="text">
                <p>Message</p>
                <textarea name="" id="" cols="30" rows="8"></textarea>
                <button></button>
                <p>Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
            </div>
        </section>
    </main>
    <footer>
        <section class="footer mb-5">
            <div class="container-fluid">
                <div class="row d-flex">
                    <div class="col-4 d-flex flex-wrap">
                        <div class="footerLogo"></div>
                        <div class="footerTitle d-flex align-items-center fs-4">數位方塊</div>
                        <div class="footerIntro">Air plant banjo lyft occupy retro adaptogen indego</div>
                    </div>
                    <div class="col-8 d-flex justify-content-around">

                        <div class="cata">
                            <div class="mb-1">CATEGORIES</div>
                            <div>First Link</div>
                            <div>Second Link</div>
                            <div>Third Link</div>
                            <div>Fourth Link</div>
                        </div>
                        <div class="cata">
                            <div class="mb-1">CATEGORIES</div>
                            <div>First Link</div>
                            <div>Second Link</div>
                            <div>Third Link</div>
                            <div>Fourth Link</div>
                        </div>

                        <div class="cata">
                            <div class="mb-1">CATEGORIES</div>
                            <div>First Link</div>
                            <div>Second Link</div>
                            <div>Third Link</div>
                            <div>Fourth Link</div>
                        </div>
                        <div class="cata">
                            <div class="mb-1">CATEGORIES</div>
                            <div>First Link</div>
                            <div>Second Link</div>
                            <div>Third Link</div>
                            <div>Fourth Link</div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="end">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="copyright col-5 d-flex">
                        <i class="fa-regular fa-copyright d-flex align-items-center me-1"></i>
                        <div>2020 Tailblocks一 @knyttneve</div>
                    </div>
                    <div class="logo col-3 d-flex">
                        <i class="bi bi-facebook"></i>
                        <i class="bi bi-twitter ms-2 me-2"></i>
                        <i class="bi bi-instagram"></i>
                    </div>
                </div>
            </div>
        </section>
    </footer>





    <script>
        function errorImg(img) {
            img.src = "{{ $dataDefault[1]->img }}";
            img.onerror = null;
        }
    </script>

    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,

            },
            mousewheel: true,
            keyboard: true,
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script>

    </script>
</body>

</html>
