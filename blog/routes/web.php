<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blogcontroller;
use App\Models\Blogmodel;

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
//     return view('welcome');
// });
Route::get('/',function () {
    return view('blogfront');
});

Route::get('/blog',[Blogcontroller::class,'index']);
Route::get('/blog/view',[Blogcontroller::class,'view']);
Route::get('/blog/delete/{id}',[Blogcontroller::class,'delete'])->name('blog.delete');
Route::get('/blog/edit/{id}',[Blogcontroller::class,'edit'])->name('blog.edit');
Route::post('/blog/update/{id}',[Blogcontroller::class,'update'])->name('blog.update');
Route::post('/blog',[Blogcontroller::class,'store']);