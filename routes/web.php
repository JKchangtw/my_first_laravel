<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NewController;
use App\Http\Controllers\BootstrapController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\GoodsController;
use App\Http\Controllers\AccountController;
// use App\Http\Controllers\Hash;





use App\Http\Controllers\AuthenticatedSessionController;

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
Route::get('/', [BootstrapController::class, 'bootstrap']);
Route::get('/bootstrap', [BootstrapController::class, 'bootstrap']);


Route::get('/shop01', [GoodsController::class, 'shop01']);
Route::get('/shop02', [BootstrapController::class, 'shop02']);
Route::get('/shop03', [BootstrapController::class, 'shop03']);
Route::get('/shop04', [BootstrapController::class, 'shop04']);






Route::get('/login', [ AuthenticatedSessionController::class, 'create']);


// ->middleware(['auth'])->name('dashboard')
Route::prefix('/comment')->group(function(){
    Route::get('/', [Controller::class, 'comment']);
    Route::get('/save', [Controller::class, 'save_comment']);
    // 刪留言step2
    Route::get('/delete/{target}', [Controller::class, 'delete_comment']);
    Route::get('/edit/{id}', [Controller::class, 'edit_comment']);
    Route::get('/update/{id}', [Controller::class, 'update_comment']);
});
// controller寫法如上

// 以下是一開始的寫法
// Route::get('/', function () {
//     return view("welcome");
// });
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
// 加上middleware
Route::prefix('/banner')->middleware(['auth'])->name('dashboard')->group(function(){
    Route::get('/',[BannerController::class,'banner_index']);
    //CREATE:新增和儲存是一組
    Route::get('/create',[BannerController::class,'banner_create']);
    Route::post('/store',[BannerController::class,'banner_store']);
    //UPDATE:編輯和更新是一組
    Route::get('/edit/{id}',[BannerController::class,'banner_edit']);
    Route::post('/update/{id}',[BannerController::class,'banner_update']);

    Route::post('/delete/{id}',[BannerController::class,'banner_delete']);
});

Route::prefix('/account')->middleware(['auth'])->name('dashboard')->group(function(){
    Route::get('/',[AccountController::class,'account_index']);
    //CREATE:新增和儲存是一組
    Route::get('/create',[AccountController::class,'account_create']);
    Route::post('/store',[AccountController::class,'account_store']);
    //UPDATE:編輯和更新是一組
    Route::get('/edit/{id}',[AccountController::class,'account_edit']);
    Route::post('/update/{id}',[AccountController::class,'account_update']);

    Route::post('/delete/{id}',[AccountController::class,'account_delete']);
});

//加上middleware以確認有登入才可以進去商品管理頁 可以再加上後來定義的Power來分辨權限等級
Route::prefix('/goods')->middleware(['auth'])->name('dashboard')->group(function(){
    Route::get('/',[GoodsController::class,'goods_index']);
    //CREATE:新增和儲存是一組
    Route::get('/create',[GoodsController::class,'goods_create']);
    Route::post('/store',[GoodsController::class,'goods_store']);
    //UPDATE:編輯和更新是一組
    Route::get('/edit/{id}',[GoodsController::class,'goods_edit']);
    Route::post('/update/{id}',[GoodsController::class,'goods_update']);

    Route::post('/delete/{id}',[GoodsController::class,'goods_delete']);

    //刪除次要圖片 接收次要商品圖片的id
    Route::delete('/delete_img/{img_id}',[GoodsController::class,'delete_img']);

});

Route::get('/shoppage',[GoodsController::class,'shop_page']);
Route::get('/info/{id}',[GoodsController::class,'goodinfo']);

//購物車用
Route::post('/add_to_cart',[GoodsController::class,'add_cart']);


// 原本的laravel welcome先註解掉
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','power'])->name('dashboard');

require __DIR__.'/auth.php';




// Route::prefix('/shop')->group(function(){
//     Route::get('/',[Controller::class,'shop_index']);
//     //CREATE:新增和儲存是一組
//     Route::get('/create',[Controller::class,'shop_create']);
//     Route::post('/store',[Controller::class,'shop_store']);
//     //UPDATE:編輯和更新是一組
//     Route::get('/edit/{id}',[Controller::class,'shop_edit']);
//     Route::post('/update/{id}',[Controller::class,'shop_update']);

//     Route::post('/delete/{id}',[Controller::class,'shop_delete']);
// });




