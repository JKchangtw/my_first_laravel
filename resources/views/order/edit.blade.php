@extends('layouts.app')
@section('title')
    訂單編輯頁
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
                <h1 style="color:blue;font-weight:bold">編輯訂單</h1>
            </div>
            <div class="row line mb-2"></div>
            {{-- enctype是為了讓我們可以傳圖片 --}}
            <form class="d-flex flex-column" action="/order/update/{{ $editorder->id }}" method="post">
                @csrf

                <div>訂單編號：{{$editorder->id}}</div>
                <div>訂單金額：{{$editorder->total}}</div>
                <div>購買者姓名：{{$editorder->name}}</div>
                <div>購買者信箱：{{$editorder->email}}</div>
                {{-- <label for="">訂單編號</label>
                <input type="text" name="goods_name" id="goods_name" value="{{ $editorder->id}}">

                <label for="">訂單金額</label>
                <input type="number" name="goods_price" id="goods_price" value="{{ $editorder->total }}">

                <label for="">訂單人</label>
                <input type="text" name="goods_count" id="goods_count" value="{{ $editorder->name }}"> --}}

                <label for="">訂單狀態更新</label>
                <select name="status" id="status">
                    <option value="1" @if($editorder->status==1)selected @endif>訂單成立，尚未付款</option>
                    <option value="2" @if($editorder->status==2)selected @endif>已付款</option>
                    <option value="3" @if($editorder->status==3)selected @endif>已出貨</option>
                    <option value="4" @if($editorder->status==4)selected @endif>已結單</option>
                    <option value="5" @if($editorder->status==5)selected @endif>已取消</option>
                </select>
                {{-- <input type="text" name="goods_intro" id="goods_intro" value="{{ $editorder->status }}"> --}}
                <label for="">訂單備註</label>
                <input type="text" name="goods_intro" id="goods_intro" value="{{ $editorder->ps }}">

                <div class="button-box d-flex justifu-content-center">
                    <button class="btn btn-danger" type="button">取消修改</button>
                    <button class="create btn btn-primary" type="submit">確定更新</button>
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
        // function delete_img(id) {
        //     // console.log('')

        //     //準備表單以及內部的資料
        //     let formData = new FormData();
        //     //要傳給後端的參數key和值value
        //     formData.append('_method', 'DELETE');
        //     formData.append('_token', '{{ csrf_token() }}');

        //     //將準備好的表單藉由fetch送到後台
        //     fetch("/goods/delete_img/" + id, {
        //             method: "POST",
        //             body: formData
        //         })

        //         //fetch非同步 不會主動更新頁面 所以
        //         .then(function(response) {
        //             //做法一 用reload重整頁面
        //             // location.reload();
        //             //做法二 成功將資料庫刪除資料後 將自己的HTML消除
        //             let element = document.querySelector('#sup_img' + id);
        //             element.parentNode.removeChild(element);
        //         });

        // }
    </script>



    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
@endsection

@endsection
