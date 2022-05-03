@extends('layouts.app')
@section('title')
    商品新增頁面
@endsection
@section('link')
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
        width:350px;
        height:200px;
        background-color:lightgray;
    }
    .goods_img img{
        width:300px;
        height:175px;
    }
    .banner_priority{
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
                <h1>新增商品</h1>
            </div>
            <div class="row line"></div>
            {{-- enctype是為了讓我們可以傳圖片 --}}
            <form class="d-flex flex-column" action="/goods/store" method="post" enctype="multipart/form-data">
                @csrf
                <label for="goods_img">商品主圖片上傳</label>
                <input type="file" name="goods_img" id="goods_img1" accept="image/*">
                <label for="goods_img">商品次圖片上傳</label>
                {{-- name後面加[] 陣列才能存多張 mutiple使得可上傳多張 accept="image/*"使得上傳資料時比較有效率 只有圖片會被看到 --}}
                <input type="file" name="second_img[]" id="goods_img2" multiple accept="image/*">

                <label for="">商品名稱</label>
                <input type="text" name="goods_name" id="name">

                <label for="">商品售價</label>
                <input type="number" name="goods_price" id="price">

                <label for="">商品數量</label>
                <input type="number" name="goods_count" id="count">

                <label for="">商品介紹</label>
                <input type="text" name="goods_intro" id="intro">

                <div class="button-box d-flex justifu-content-center">
                    <button class="btn btn-danger" type="reset" onclick="loction.href='/goods/'">返回上頁</button>
                    <button class="create btn btn-primary">新增商品</button>
                </div>
            </form>
        </div>
    </section>

 @endsection

    @section('script')
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    @endsection



