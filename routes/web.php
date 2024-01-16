<?php

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
Route::get('/post',function(){
    return view('post');
});
//passing parameter in route, with optional.
Route::get('/news/{id?}', function(string $id = null){
    if($id){
        return "<h2> news id: $id </h2>";
    }else{
        return "<h2> news id: Not found. </h2>";
    }
 
})->whereIn('id',["song","movie"]);
Route::view("/about", "post");