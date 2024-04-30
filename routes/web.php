<?php

use App\Models\Barang;
use App\Models\Siswa;
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
    return view('tampil_post', compact('data'));
});


Route::get('/testmodelbarang', function () {
    $data = Barang::all();
    return view('tampil_barang', compact('data'));
});


Route::get('/testmodelsiswa', function () {

    //menampilkan semua data
    $data = Siswa::all();

    //menampilkan data berdasarkan where
    // $data = Siswa::where('alamat', 'like', '%itu%')->get();

    //menambahkan data
    // $data = new Siswa;
    // $data->nama = "Zidni Ngilmanavia";
    // $data->jenis_kelamin = "Laki-laki";
    // $data->alamat = "Disono";
    // $data->agama = "Islam";
    // $data->telepon = "098049732343";
    // $data->email = "example@gmail.com";
    // $data->save();
    return view('tampil_siswa', compact('data'));
});

Route::get('/about', function () {
    return view('about');
});