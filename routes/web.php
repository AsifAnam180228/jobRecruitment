<?php

use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});
Route::view('dashboard','home');
Route::view('contact','contact');


//Route:: get('customer',[\App\Http\Controllers\CustomerController::class,'index']);
//Route:: get('customer/create',[\App\Http\Controllers\CustomerController::class,'create']);
//Route:: post('customer',[\App\Http\Controllers\CustomerController::class,'store']);

//Route:: get('customer/{customer}',[\App\Http\Controllers\CustomerController::class,'show']);
//Route:: get('customer/{customer}/edit',[\App\Http\Controllers\CustomerController::class,'edit']);
//Route:: patch('customer/{customer}',[\App\Http\Controllers\CustomerController::class,'update']);
//Route:: delete('customer/{customer}/edit',[\App\Http\Controllers\CustomerController::class,'destroy']);
Route::resource('customer',\App\Http\Controllers\CustomerController::class)->shallow();


Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
    return view('home');
});
Route::get('/test', function () {
    return view('admin.dashboard.index');
});
Route::resource('type','TypeController');

Route::get('\type'. [TypeController::class, 'index']);
Route::get('/post', function () {
    return view('post');
});

// Route::get('/type', function () {
//     return view('type');
// });
Route::get('/type/{slug}', 'FrontEndController@type')->name('website.type');
