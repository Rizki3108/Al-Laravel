<?php

use App\Models\Barang;
use Illuminate\Support\Facades\Route;
use App\Models\Post;


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

//menampilkan data dari database
Route::get('/testmodel', function () {
    $data = Post::all();
    return $data;
});

Route::get('/testmodelbarang', function () {
    $data = Barang::all();
    return $data;
});