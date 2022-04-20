<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NewController;
use App\Http\Controllers\BootstrapController;



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
