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


                <h3>目前主圖片>>></h3>
                <img src="{{ $goods->goods_img }}" alt="">
                <label for="goods_img">商品主圖片更新</label>
                <input type="file" name="goods_img" id="goods_img">
                <h3>目前次圖片>>></h3>
                <div class='d-flex flex-wrap align-items-start'>
                    {{-- 直接呼叫要關聯的那個函式 --}}
                    @foreach ($goods->imgs as $item)
                        <div class="d-flex flex-column me-3 " style="width:150px" id="sup_img{{$item->id}}">
                            <img src="{{ $item->img_path }}" alt="" class="w-100">
                            {{-- *用form表單做刪單張次要圖片 不是最好的作法 so先註解--}}
                            {{-- *<button class="btn btn-danger w-100" type='button' onclick="document.querySelector('#deleteForm{{$item->id}}').submit();">刪除圖片</button> --}}
                            <button class="btn btn-danger w-100" type='button' onclick="delete_img({{$item->id}});">刪除圖片</button>
                        </div>
                    @endforeach
                </div>
                <label for="goods_img">商品次圖片上傳</label>
                <input type="file" name="second_img[]" id="goods_img2" multiple accept="image/*" p>


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
            {{-- *用form表單做法 先註解 --}}
            {{-- @foreach ($goods->imgs as $item)
            <form action="/goods/delete_img/{{$item->id}}" method="post" hidden id="deleteForm{{$item->id}}">
                @csrf
                @method('DELETE')
             </form>
            @endforeach --}}
        </div>

    </section>

@section('script')
    <script>
        function delete_img(id){
            // console.log('')

            //準備表單以及內部的資料
            let formData = new FormData();
            //要傳給後端的參數key和值value
            formData.append('_method', 'DELETE');
            formData.append('_token', '{{csrf_token()}}');
            
            //將準備好的表單藉由fetch送到後台
            fetch("/goods/delete_img/"+id,{
                method: "POST",
                body: formData
            })
            
            //fetch非同步 不會主動更新頁面 所以
            .then(function(response){
                 //做法一 用reload重整頁面
                // location.reload();
                //做法二 成功將資料庫刪除資料後 將自己的HTML消除
                let element = document.querySelector('#sup_img'+id);
                element.parentNode.removeChild(element);
            }) 
             ;
           
        }

    </script>



    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    
@endsection

@endsection
