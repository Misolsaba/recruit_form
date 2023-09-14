<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController; // 管理者トップページ

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

// Route::get('/', function () {
//     return view('welcome');
// });

// コース管理
Route::controller(FormController::class)->group(function () {
    Route::get('/', 'form')->name('form');
    Route::post('/confirm', 'confirm')->name('confirm');
});
