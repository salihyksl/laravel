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

Route::prefix('sayfalar')->group( function(){

    Route::get('/kurumsal', function(){
        return view('kurumsal');
    });
    Route::get('/referanslar', function(){
        return view('referans');
    });
    Route::get('/iletisim', function(){
        return view('iletisim');
    });
    
});



/*Route::redirect('/','anasayfa');

Route::get('/', function () {
    return view('anasayfa');
});

Route::get('kurumsal', function(){
    return view('kurumsal');
});

Route::get('referans', function(){
    return view('referans');
});

Route::get('iletisim', function(){
    return view('iletisim');
});*/