<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PlaceorderController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('welcome');
});
//oute::get('/',[MainController::class,'index']);

Route::prefix('/order')->middleware(['auth','isAdmin'])->group(function(){
    route::get('/',[OrderController::class,'index'])->name('order');
   // route::post('/store',[OrderController::class,'store'])->name('order.store');
    route::get('/{task_id}delete',[OrderController::class,'delete'])->name('order.delete');
    route::get('/{task_id}done',[OrderController::class,'done'])->name('order.done');

});
//Route::prefix('/pizza')->middleware(['auth','isAdmin'])->group(function(){
   // route::get('/',[PizzaController::class,'index'])->name('pizza');
   //Route::resource('/',PizzaController::class);
//});
Route::resource('/pizza',PizzaController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adminhome', [App\Http\Controllers\AdminController::class, 'index'])->name('adminhome');
Route::get('/clienthome', [App\Http\Controllers\ClientController::class, 'index'])->name('clienthome');

//place order control routes
Route::get('/placeorder', [App\Http\Controllers\PlaceorderController::class, 'index'])->name('placeorder');
Route::get('/placeorder1', [App\Http\Controllers\PlaceorderController::class, 'index1'])->name('placeorder1');
route::post('/store',[App\Http\Controllers\OrderController::class,'store'])->name('order.store');
