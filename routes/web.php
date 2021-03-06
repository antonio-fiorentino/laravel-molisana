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
  $pasta = config('pasta');
    return view('pages.home', [
        'pastaArray' => $pasta
    ]);
});

// Route::get('/home', function () {
//     return view('pages.home');
// });

Route::get('/product/{id}', function ($id) {
    $pasta = config('pasta');
    return view('pages.product',
        ['idProduct' => $id],
        ['pastaArray' => $pasta]
  );
});
