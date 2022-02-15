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

Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/list', function () {
    $data = 
    [
        [
            "id" => 1,
            "name" => "Abdelrahman",
            "title" => "hi"
        ],
        [
            "id" => 2,
            "name" => "Ahmed",
            "title" => "hi"
        ],
        [
            "id" => 3,
            "name" => "Mohamed",
            "title" => "hi"
        ],
        [
            "id" => 4,
            "name" => "Mostafa",
            "title" => "hi"
        ]
    ];
    return view('posts.index',["data"=>$data]);
});
Route::get('/show/{id}', function ($id) {
    $data = [
        "id" => $id,
        "name" => "Abdelrahman",
        "title" => "hi"
    ];
    return view('posts.show',["data"=>$data]);
});
Route::get('/store', function () {
    return view('posts.store');
});
Route::get('/edit/{id}', function ($id) {
    $data = [
        "id" => $id,
        "name" => "Abdelrahman",
        "title" => "hi"
    ];
    return view('posts.edit',["data"=>$data]);
});
