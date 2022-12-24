<?php

use App\Http\Controllers\CustomersController;
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
Route::group(['prefix'=>'customers'], function(){

    // Route dành cho hiển thị tất cả record của table customer
    Route::get('/',[CustomersController::class,'index'])->name('customers.index');

    // Route dành cho hiển thị form thêm mới 1 record của table customer
    Route::get('/create',[CustomersController::class, 'create'])->name('customers.create');

    // Route dành cho submit form thêm mới 1 record của table customer
    Route::post('/',[CustomersController::class, 'store'])->name('customers.store');

    //Route dành cho hiển thị chi tiết 1 record của table customer
    Route::get('/{id}/show',[CustomersController::class, 'show'])->name('customers.show');

    //Route dành cho hiển thị form chỉnh sửa 1 record của table customer
    Route::get('/{id}/edit',[CustomersController::class, 'edit'])->name('customers.edit');

    //Route dành cho submit update 1 record của table customer
    Route::put('/{id}',[CustomersController::class, 'update'])->name('customers.update');

    //route dành để xóa 1 record của table customer
    Route::delete('/{id}',[CustomersController::class, 'delete'])->name('customers.delete');
});



