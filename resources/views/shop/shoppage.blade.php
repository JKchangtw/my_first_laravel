<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>購物</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    @yield('')
    @yield('')
    @yield('')
</head>

<body>
    <section class="nav" style="height:100px;width:100vw"></section>
    <section class="cardsection">
        <div class="container-md">
            <div class="row d-flex flex-row justify-content-around">
                @foreach ($goodslist as $goods)
                    <div class="col-3 card text-dark bg-light mb-3 me-1">
                        <button class="btn" onclick="location.href='/info/{{ $goods->id }}'">
                            <div class="row g-0 d-flex flex-row align-middle">
                                <div class="" style="width:300px;height:250px ">
                                    <img src="{{ $goods->goods_img }}" class="img-fluid rounded-start mt-2" alt="..."
                                        style="border-radius: 5px">

                                </div>
                                {{-- <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                            <div class="swiper-pagination"></div> --}}
                                <div class="">
                                    <div class="card-body">
                                        <h5 class="card-title">CATEGORY</h5>
                                        <h4 class="card-text">{{ $goods->goods_name }}</h4>
                                        <p class="card-text">剩餘數量：{{ $goods->goods_count }}</p>
                                        <p class="card-text"><small
                                                class="text-muted">${{ $goods->goods_price }}</small></p>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </button>
                @endforeach
            </div>
        </div>
    </section>
    @yield('js')
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
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

</body>

</html>
