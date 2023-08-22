<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\paymentController;


route::get('/',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);
route::get('/view_category',[AdminController::class,'view_category']);
route::post('/add_category',[AdminController::class,'add_category']);
route::get('/delete_category/{id}',[AdminController::class,'delete_category']);
route::get('/view_product',[AdminController::class,'view_product']);
route::post('/add_product',[AdminController::class,'add_product']);
route::get('/all_product',[AdminController::class,'all_product']);
route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
route::get('/update_product/{id}',[AdminController::class,'update_product']);

route::get('/view_orders',[AdminController::class,'view_orders']);


route::post('/update_product_done/{id}',[AdminController::class,'update_product_done']);

route::get('/view_products',[HomeController::class,'view_products']);

route::get('/product_details/{id}',[HomeController::class,'product_details']);

route::post('/add_cart/{id}',[HomeController::class,'add_cart']);

route::get('/show_cart',[HomeController::class,'show_cart']);

route::get('/show_category',[HomeController::class,'show_category']);

route::get('/view_contact',[HomeController::class,'view_contact']);
route::get('/view_about',[HomeController::class,'view_about']);

route::get('/delete_cart/{id}',[HomeController::class,'delete_cart']);

route::get('/cash_order',[HomeController::class,'cash_order']);

route::get('/thanks',[HomeController::class,'thanks']);

route::get('/catProducts/{category_name}',[HomeController::class,'catProducts']);


Route::get('/payment/{totalPrice}',[paymentController::class,'index']);

Route::post('/success',[paymentController::class,'success'])->name('success');
Route::post('/fail',[paymentController::class,'fail'])->name('fail');



