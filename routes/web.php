<?php
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use App\Model\Post;
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


Route::get('/login', function () {
    return view('pages.login');
});
Route::get('/order', function () {
    return view('pages.order');
});
Route::get('/payment', function () {
    return view('pages.payment');
});
Route::get('/prepaid-balance', function () {
    return view('pages.prepaid-balance');
});
Route::get('/product', function () {
    return view('pages.product');
});
Route::get('/register', function () {
    return view('pages.register');
});
Route::get('/success', function () {
    return view('pages.success');
});