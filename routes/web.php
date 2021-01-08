<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

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

//
//Route::get('/about', function () {
//    return 'Hi about page';
//});
//
//
//Route::get('/admin/home', function () {
//    return "this is admin home";
//})->name('admin.home');
//
//
//Route::get('/post/{id}', function ($id) {
//    return "This is post number " . $id;
//});

Route::get('/post', [PostsController::class, 'index']);

Route::get('/post/{id}', [PostsController::class, 'show']);
