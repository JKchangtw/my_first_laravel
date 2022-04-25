<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewController;
use App\Http\Controllers\BootstrapController;
use App\Http\Controllers\BannerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/microsoft', [NewController::class, 'index']);



// controller寫法如下
Route::get('/bmi', [Controller::class, 'bmi']);
Route::get('/colortest', [Controller::class, 'colortest']);
Route::get('/dice', [Controller::class, 'dice']);

//用controller開bootstrap
Route::get('/bootstrap', [BootstrapController::class, 'bootstrap']);
Route::get('/shop01', [BootstrapController::class, 'shop01']);
Route::get('/shop02', [BootstrapController::class, 'shop02']);
Route::get('/shop03', [BootstrapController::class, 'shop03']);
Route::get('/shop04', [BootstrapController::class, 'shop04']);

Route::get('/login', [Controller::class, 'login']);

Route::get('/comment', [Controller::class, 'comment']);
Route::get('/comment/save', [Controller::class, 'save_comment']);
// 刪留言step2
Route::get('/comment/delete/{target}', [Controller::class, 'delete_comment']);
Route::get('/comment/edit/{id}', [Controller::class, 'edit_comment']);
Route::get('/comment/update/{id}', [Controller::class, 'update_comment']);

// controller寫法如上

// 以下是一開始的寫法
Route::get('/', function () {
    return view('welcome');
});
Route::get('say', function () {
    return 'welcome';
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/bmi', function () {
//     return view('BMI_test');
// });

// Route::get('/colortest', function () {
//     return view('01_ColorTest');
// });
// Route::get('/dice', function () {
//     return view('07_Dice');
// });

// Route::get('/microsoft', function () {
//     return view('MSFT_test');
// });

//banner管理相關頁面 手工建立版本(部分參考restfulAPI的規則 業界常用)
// Route::get('/banner',[BannerController::class,'banner_index']);//總列表頁
// Route::get('/banner/create',[BannerController::class,'banner_create']);//新增頁
// Route::post('/banner/store',[BannerController::class,'banner_store']);//儲存頁
// Route::get('/banner/edit/{id}',[BannerController::class,'banner_edit']);//編輯頁
// Route::post('/banner/update/{id}',[BannerController::class,'banner_update']);//更新頁
// Route::post('/banner/delete/{id}',[BannerController::class,'banner_delete']);//刪除頁


//用group包起來 讓程式碼較精簡 好檢查
Route::prefix('/banner')->group(function(){
    Route::get('/',[BannerController::class,'banner_index']);
    //CREATE:新增和儲存是一組
    Route::get('/create',[BannerController::class,'banner_create']);
    Route::post('/store',[BannerController::class,'banner_store']);
    //UPDATE:編輯和更新是一組
    Route::get('/edit/{id}',[BannerController::class,'banner_edit']);
    Route::post('/update/{id}',[BannerController::class,'banner_update']);

    Route::post('/delete/{id}',[BannerController::class,'banner_delete']);
});
