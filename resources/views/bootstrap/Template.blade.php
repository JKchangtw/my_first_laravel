<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    @yield('link')
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



        @yield('css') .footer .footerLogo {
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
        }

        .footer .catarow2 {
            width: 50%;
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

        #commet_manage{
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
                    <form action="/bootstrap" class="ps-5" id="logoform">
                        <button id='frontpageBtn' type='submit' style="border: unset" class="h-100">
                            <img src="/digipack_IMG/logo.jpg" alt="" class="h-100">
                        </button>
                    </form>
                </div>
                <div id="func" class="col-8">
                    <div class="container">
                        <div class="row">
                            <div class="col-1"></div>
                            {{-- <div class="col-2">Blog</div>
                            <div class="col-2">Portfolio</div> --}}
                            <div class="col-2">
                                <form action="/goods">
                                    <button id="goods_manage" type="submit">????????????</button>
                                </form>
                            </div>
                            <div class="col-2">
                                <form action="/banner">
                                    <button id="banner_manage" type="submit">Banner??????</button>
                                </form>
                            </div>

                            <div class="col-2">
                                <form class="functionForm" action="/comment">
                                    <button id="commet_manage" class='fuctionBtn' type="submit">
                                        ???????????????
                                    </button>
                                </form>
                            </div>

                            <div class="col-2">
                                <form class="functionForm" action="/shop01">
                                    <button id="shoppingcar" class='fuctionBtn' type="submit" style="font-size: 18px">
                                        {{-- <i class="fa-solid fa-cart-shopping"></i> --}}
                                        ?????????
                                    </button>
                                </form>
                            </div>
                            <div class="col-1 fs-3">
                                <form class="functionForm" action="/login">
                                    <button id="user" class='fuctionBtn' type="submit">
                                        <i class="fa-solid fa-circle-user"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </nav>
    <main>
        @yield('main')
    </main>
    <footer>
        <section class="footer mt-5 mb-5">
            <div class="container-fluid">
                <div class="row d-flex">
                    <div class="footerLeft d-flex flex-wrap">
                        <div class="footerLogo"></div>
                        <div class="footerTitle d-flex align-items-center fs-4">????????????</div>
                        <div class="footerIntro">Air plant banjo lyft occupy retro adaptogen indego</div>
                    </div>
                    <div class="footerRight d-flex justify-content-around">

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
                        <div>2020 Tailblocks??? @knyttneve</div>
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




    {{-- <script>
        function errorImg(img) {
            img.src = "{{$dataDefault[]->img}}";
            img.onerror = null;
        }
    </script> --}}
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
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    @yield('script')
</body>

</html>
