@extends('bootstrap.Template')
@section('title')
   商品管理頁面
@endsection
@section('link')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    {{-- 以下link datatable CDN --}}
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
    width:300px;
    height:250px;
    {{-- background-color:lightgray; --}}
    }
    tr td{
        width:250px;
        position:relative;
    }
    .goods_intro{
        width:250px;
        word-break: break-all
    }
    .goods_img img{
    width:250px;
    height:175px;
    position:absolute;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%);
    }
    .goods_priority{
    width:200px;
    }
    h1{
    text-decoration:underline;
    }
    #goods_create{
    width:150px;
    height:60px;
    float:right;
    background-color: skyblue;
    border:unset;
    border-radius:5px;
    font-weight:bold;
    font-size:20px;
    color:white;
    }
    td .btn.edit{
        width:120px;
        height:60px;
        background-color:yellowgreen;
        color:white;
    }
    td .btn.del{
        width:120px;
        height:60px;
        background-color:red;
        color:white;
    }
@endsection
@section('main')
    <section class="form">
        <div class="container-xl">

            <div class="row  d-flex justify-content-between">
                <div class="col-10">
                    <h1>商品管理</h1>
                </div>
            </div>
            <div class="row mb-1">
                <form action="goods/create">
                    <button id="goods_create" type="submit">新增商品</button>
                </form>
            </div>
            <div class="row line"></div>
            <table id="goods_list" class="display">
                <thead>
                    <tr>
                        <th>圖片預覽</th>
                        <th>商品名稱</th>
                        <th>商品售價</th>
                        <th>商品數量</th>
                        <th>商品介紹</th>
                        <th>功能按鈕</th>

                    </tr>
                </thead>
                <tbody>
                    {{-- 前面對應的是controller的getModel的變數 後面是在這邊自訂的 跟以下對應即可 --}}
                    @foreach ($goods as $good)
                        <tr>
                            <td>
                                <div class="goods_img">
                                    {{-- <img src="{{ asset('image/pizza-3007395__480.jpg') }}" alt=""> --}}
                                    {{-- 以下改成foreach形式 --}}
                                    {{-- <img src="{{ $good->img_path }}" alt="" style="opacity:{{ $good->img_opacity }}"> --}}
                                    <img src="{{ $good->goods_img }}" alt="">
                                </div>
                            </td>
                            <td class="goods_name">{{ $good->goods_name }}</td>
                            <td class="goods_price">{{ $good->goods_price }}</td>
                            <td class="goods_count">{{ $good->goods_count }}</td>
                            <td class="goods_intro">{{ $good->goods_intro }}</td>
                            <td>
                                {{-- <a href="/good/delete/{{ $comments->id }}">刪除</a> --}}
                                {{-- <a href="/good/edit/{{ $good->id }}">編輯</a> --}}
                                {{-- button onclick寫法 --}}
                                <button class="btn edit" onclick="location.href='/goods/edit/{{$good->id}}'">編輯</button>
                                <button class="btn del" onclick="delete_good({{$good->id}})">刪除</button>
                                {{-- 或像以下直接把JS寫在裡面 --}}
                                {{-- <button class="btn del" onclick="document.querySelector('#deleteForm{{$good->id}}').submit();">刪除</button> --}}
                                <form action="/goods/delete/{{$good->id}}" method="post" hidden id="deleteForm{{$good->id}}">
                                    @csrf
                                </form>

                            </td>
                        </tr>
                        {{-- <tr>
                        <td>
                            <div class="banner_img">
                                <img src="{{ asset('image/Gluten-Free-Pizza-3.2.jpg') }}" alt="">
                            </div>
                        </td>
                        <td class="banner_priority">3</td>
                        <td>
                            <button>編輯</button>
                            <button>刪除</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="banner_img">
                                <img src="{{ asset('image/gluten-free-thin-crust-pizza.jpg') }}" alt="">
                            </div>
                        </td>
                        <td class="banner_priority">2</td>
                        <td>
                            <button>編輯</button>
                            <button>刪除</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="banner_img">
                                <img src="{{ asset('image/gluten-free-thin-crust-pizza.jpg') }}" alt="">
                            </div>
                        </td>
                        <td class="banner_priority">2</td>
                        <td>
                            <button>編輯</button>
                            <button>刪除</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="banner_img">
                                <img src="{{ asset('image/gluten-free-thin-crust-pizza.jpg') }}" alt="">
                            </div>
                        </td>
                        <td class="banner_priority">2</td>
                        <td>
                            <button>編輯</button>
                            <button>刪除</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="banner_img">
                                <img src="{{ asset('image/gluten-free-thin-crust-pizza.jpg') }}" alt="">
                            </div>
                        </td>
                        <td class="banner_priority">2</td>
                        <td>
                            <button>編輯</button>
                            <button>刪除</button>
                        </td>
                    </tr> --}}
                    @endforeach
                </tbody>
            </table>
        </div>


    </section>

@section('script')
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    {{-- 以下先引用jquery CDN --}}
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>


    {{-- 然後 以下兩個script為 再引用datatable --}}
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#goods_list').DataTable();
        });
    </script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

    <script>
        function delete_good($id){
            //選到表單之後submit
            document.querySelector('#deleteForm'+$id).submit();
        }
    </script>

    @endsection

@endsection
