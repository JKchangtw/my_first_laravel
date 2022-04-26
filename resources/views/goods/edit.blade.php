@extends('bootstrap.Template')
@section('title')
    商品編輯頁
@endsection
@section('link')
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
@endsection
@section('main')
    <section class="form">
        <div class="container-fluid form">

            <div class="row">
                <h1 style="color:blue;font-weight:bold">編輯商品</h1>
            </div>
            <div class="row line mb-2"></div>
            {{-- enctype是為了讓我們可以傳圖片 --}}
            <form class="d-flex flex-column" action="/goods/update/{{ $goods->id }}" method="post"
                enctype="multipart/form-data">
                @csrf


                <h4>目前主圖片>>><img src="{{ $goods->goods_img }}" alt=""></h4>
                <label for="goods_img">商品圖片更新</label>
                <input type="file" name="goods_img" id="goods_img">
                <h3>目前次圖片>>></h3>
                <div class='d-flex flex-wrap align-items-start'>
                    @foreach ($goods->img as $item)
                        <img src="{{($item->img_path)}}" alt="" class="me-3" style="width:150px">
                    @endforeach
                </div>
                <label for="">商品名稱更新</label>
                <input type="text" name="goods_name" id="goods_name" value="{{ $goods->goods_name }}">

                <label for="">商品售價更新</label>
                <input type="number" name="goods_price" id="goods_price" value="{{ $goods->goods_price }}">

                <label for="">商品數量更新</label>
                <input type="number" name="goods_count" id="goods_count" value="{{ $goods->goods_count }}">

                <label for="">商品介紹更新</label>
                <input type="text" name="goods_intro" id="goods_intro" value="{{ $goods->goods_intro }}">

                <div class="button-box d-flex justifu-content-center">
                    <button class="">取消編輯</button>
                    <button class="create">確定更新</button>
                </div>
            </form>






        </div>


    </section>

@section('script')
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
@endsection

@endsection
