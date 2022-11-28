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

Route::get('/about', function (){
    return('halo disini kamu belajar, kamu berada dihalaman about loh');
});

// kalo mau nampilin halaman view lebih cocok, gunakan ini aja.
Route::view('contact', 'product.contact', ['name'=> 'panggil aja riski', 'kelas'=> 'xii-rpl']);

// akan memaksakan pindah ke halaman about, jika aku mau kehalaman contact.
// Route::redirect('contact', '/about');


// route parameter pake id
Route::get('/product/{id}', function ($id) {
    return view('product.detail', ['id'=> $id]);
});


// prefix = cocok untuk ngakses url yang banyak pake prefix
Route::prefix('admin')->group(function(){
    Route::get('/profil-admin', function(){
        return 'halaman profil-admin';
    });
    Route::get('/profil-about', function(){
        return 'halaman profil-about';
    });
    Route::get('/profil-contact', function(){
        return 'halaman profil-contact';
    });
    Route::get('/profil-bisnis', function(){
        return 'halaman profil-bisnis';
    });
});


// menampilkan list route
