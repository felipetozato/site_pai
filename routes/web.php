<?php

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
    return view('pages.index');
});

Route::get('/index', function () {
  return view('pages.index');
})->name('index');


Route::get('/blog', function() {
    return view('pages.blog');
})->name('blog');


Route::get('/contato', function() {
    return view('pages.contact');
})->name('contact');


Route::get('/portifolio', function() {
    return view('pages.portifolio');
})->name('portifolio');


Route::get('/servicos', function() {
    return view('pages.services');
})->name('services');
