{{-- @extends('bootstrap.TemplateUser')
@section('title')
    使用者頁面
@endsection
@section('css')

        #shopping-step01 {
            background-color: cornflowerblue;

        }

        #shopping-step01 .container-xxl {
            background-color: aliceblue;
            border-radius: 15px;
        }

        #shopping-step01 .buy-progress {}

        #shopping-step01 .steps {
            display: flex;
            /* flex-direction: ; */
            align-items: center;
            justify-content: center;
        }

        #shopping-step01 .steps .step {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: white;
            line-height: 40px;
            text-align: center;
            position: relative;
        }

        #shopping-step01 .steps .step::before {
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

        #shopping-step01 .buy-progress .buy-progress-bar {
            width: 180px;
            height: 10px;
            border-radius: 5px;
            background-color: darkgray;
            margin: 0px 8px;
        }

        #shopping-step01 .steps .green {
            background-color: green;
            color: white;
        }

        #shopping-step01 .steps .progress-25::before {
            content: '';
            width: 50%;
            height: 100%;
            background-color: green;
            display: block;
            border-radius: 5px;
        }

        #shopping-step01 .buy-list {
            height: 40px;
        }

        .list .row {
            width: 100%;
            height: 100px;
        }
        .list .row .col-10, .list .row .col-2{
            height: 100%;
        }
        .list .row.line{

            width: 100%;
            height: 1px;
            background-color: gainsboro;
        }

        .list .img1, .img2, .img3 {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-position: center;
            background-size: contain;
            margin-right: 10px;
        }
        .list .img1{
            background-image: url(/image/Gluten-Free-Pizza-3.2.jpg);
        }
        .list .img2{
            background-image: url(/image/gluten-free-thin-crust-pizza.jpg);
        }
        .list .img3{
            background-image: url(/image/pizza-3007395__480.jpg);
        }

        .row.total {
            position: relative;
        }

        .total .totalbox {
            height: 100%;
            width: 20%;
            position: absolute;
            right: 0;
        }

        .row.next {
            padding-top: 30px;
        }

        .row.next .back {
            left: 0;
            width: 120px;
            height: 30px;
        }

        .row.next .back i {
            line-height: ;
        }

        .row.next .next {
            width: 80px;
            height: 30px;
            border: unset;
            background-color: aquamarine;
            font-size: 14px;
        }

@endsection
@section('main') --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
{{-- @endsection --}}
