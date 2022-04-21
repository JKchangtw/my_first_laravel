@extends('bootstrap.Template')
@section('title')
    Banner管理頁
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
    .banner_img{
        width:450px;
        height:250px;
        background-color:lightgray;
    }
    .banner_img img{
        width:350px;
        height:200px;
    }
    .banner_priority{
        width:200px;
    }
@endsection
@section('main')
    <section class="form">
        <div class="container-xl">

            <div class="row">
                <h1>Banner管理</h1>
            </div>
            <div class="row line"></div>
            <table id="table_id" class="display">
                <thead>
                    <tr>
                        <th>圖片</th>
                        <th>權重</th>
                        <th>功能</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="banner_img"><img src="{{asset('image/pizza-3007395__480.jpg')}}" alt=""></div>
                        </td>
                        <td class="banner_priority">1</td>
                        <td>
                            <button>編輯</button>
                            <button>刪除</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="banner_img"><img src="{{asset('image/Gluten-Free-Pizza-3.2.jpg')}}" alt=""></div>
                        </td>
                        <td class="banner_priority">3</td>
                        <td>
                            <button>編輯</button>
                            <button>刪除</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="banner_img"><img src="{{asset('image/gluten-free-thin-crust-pizza.jpg')}}" alt=""></div>
                        </td>
                        <td class="banner_priority">2</td>
                        <td>
                            <button>編輯</button>
                            <button>刪除</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>


    </section>

    @section('script')
    <script src="jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    @endsection

@endsection


