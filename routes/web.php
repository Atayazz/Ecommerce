<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class, 'redirect']);
route::get('/',[HomeController::class,'index']);
route::get('/product',[AdminController::class,'product']);
route::get('/addproductview',[AdminController::class,'addproductview']);
route::get('/orders',[AdminController::class,'orders']);
route::post('/addproduct',[AdminController::class,'addproduct']);
route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);
route::get('/updateview/{id}',[AdminController::class,'updateview']);
route::post('/updateproduct/{id}',[AdminController::class,'updateproduct']);
route::get('/products',[HomeController::class,'products']);
route::post('/addcart/{id}',[HomeController::class,'addcart']);
route::get('/showcart', [HomeController::class,'showcart']);
route::get('/delete/{id}',[HomeController::class,'delete']);
route::get('/order', [HomeController::class,'confirmorder']);
route::get('/showorder', [AdminController::class,'showorder']);
route::get('/updatestatus/{id}', [AdminController::class,'updatestatus']);
route::get('/cancelstatus/{id}', [AdminController::class,'cancelstatus']);
route::get('/order',[HomeController::class,'order']);
route::get('/productdetail/{id}',[HomeController::class,'productdetail']);


