<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AuthController;

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


Route::get('/', [TestController::class, 'index']);
Route::post('/confirm', [TestController::class, 'confirm']);
Route::post('/thanks', [TestController::class, 'store']);


Route::middleware('auth')->group(function () {
    Route::get('/admin', [AuthController::class, 'index']);
    Route::post('/register', [AuthController::class, 'create']);
    Route::post('/login', [AuthController::class, 'store']);
    Route::post('logout',[AuthController::class,'destroy']);
}); 



// Route::get('/', function () {
//     return view('welcome');
// });
