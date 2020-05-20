<?php

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

//Route::get('accessor/index', 'AccessorController@index');

// Route::get('/{any}', function(){
//         return view('landing');
// })->where('any', '.*');

Route::get('/pageone', function() {
   return view('pageone'); 
});

Route::get('/pagetwo', function() {
    return view('pagetwo');
});

Route::get('/place/{paymentMethod}', [
    'as' => 'order-place', 'uses' => 'CheckoutController@placeOrder'
]);