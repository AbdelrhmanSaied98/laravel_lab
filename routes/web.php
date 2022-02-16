<?php

use App\Http\Controllers\PostController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/posts',[PostController::class,"index"]);
Route::get('/posts/create',[PostController::class,"create"]);
Route::get('/posts/{id}',[PostController::class,"show"]);
Route::get('/posts/{id}/edit',[PostController::class,"edit"]);
Route::post('/posts',[PostController::class,"store"]);
Route::patch('/posts/{id}',[PostController::class,"update"]);
Route::delete('/posts/{id}',[PostController::class,"destroy"]);





// Route::get('/edit/{id}', function ($id) {
//     $data = [
//         "id" => $id,
//         "name" => "Abdelrahman",
//         "title" => "hi"
//     ];
//     return view('posts.edit',["data"=>$data]);
// });
