<?php

use Illuminate\Http\Request;
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
    return redirect('customers/create');
});

Route::get('/thank-you', function () {
    return view('customers.thank-you');
})->name('registration_success');

Route::resource('customers', App\Http\Controllers\CustomerController::class);
Route::get('customer/view/{uuid}', [App\Http\Controllers\CustomerController::class, 'viewCustomer']);
Auth::routes();
Route::get('product/lists', [App\Http\Controllers\HomeController::class, 'productList']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('download/file/', function(Request $request){
    return response()->download($request->get('filepath'));
});
Route::get('/view-image', 'CustomerController@displayImages');