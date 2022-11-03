<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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
    return view('/welcome');
});

//homepage - make first page (view)
Route::get('/home',function(){
    return view('/home');
})->name('home');

//products - with controller (require controller path to include first)
//Route::get('/products',[ProductsController::class, 'index']);
//Route::get('products/about', [ProductsController::class,'about']);

//products with named route (laravel 8 new)
Route::get('/products', 'App\Http\Controllers\ProductsController@index')->name('shop');
Route::get('/products/about', 'App\Http\Controllers\productsController@about');

//pattern is integer
//Route::get('/products/{id}', [ProductsController::class, 'show'])->where('id','[0-9]+');

//pattern is string
//Route::get('/products/{name}',[ProductsController::class, 'show'])->where('name','[a-zA-Z]+');

Route::get('/products/{name}/{id}', [ProductsController::class, 'show'])->where([
    'name' => '[a-z]+',
    'id' => '[0-9]+',
]);

//route to test with String
Route::get('/test', function(){
    return 'Hello Test';
});

//route to test with Array
/*Route::get('/test',function(){
    return ['Test','Dev','Laravel'];
});*/

//route to test with JSON
/*Route::get('/test', function(){
    return response()->json([
        'name' => 'Jeny',
        'course' => 'Laravel'
    ]);
});*/

//route to test with function
/*Route::get('/test', function(){
    return redirect('/');
});*/