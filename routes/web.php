<?php

use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('website.frontend.layouts.main');
// });

Route::get('/', function () {  
    return view('website.frontend.layouts.main');    
});

// Route::get('/dashboard', function () {
//     return view('website.backend.dashboard.index');
    
// });

Route::get('dashboard', 'BackendController@index')->name('backend.index');
Route::resource('product','ProductController'); 

Route::resource('productcategory', 'ProductCategoryController'); 
Route::resource('productImage', 'ProductImageController'); 

Route::resource('customerDetail', 'CustomerDetailController'); 
Route::resource('payment', 'PaymentController'); 

Route::resource('contact', 'ContactController'); 
Route::resource('contactForm', 'ContactFormController'); 

Route::resource('login', 'DangNhapController');