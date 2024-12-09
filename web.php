
<?php

use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});
route::get('/halo-apa-kabar', function (){
    return "halo apa kabar dunia";
});
route::get('/halo-apa-kabar/{nama}', function ($nama){
    return "halo apa kabar dunia $nama";
});
route::get('/halo/{namadepan}/{namabelakang}', function ($namadepan, $namabelakang){
    return "halo apa kabar dunia $namadepan $namabelakang";
});
route::get('/home', [BiodataController :: class, 'home']);
route::get('/about', [BiodataController :: class, 'about']);

//tanpa controller
route::get('/web', function (){
    return view ('home'); //lokasi: resources/views
})->name('home');
route::get('/web/about', function (){
    return view ('about'); 
})->name('about');
route::get('/web/contact', function (){
    return view ('contact'); //lokssi: resources/views
})->name('contact');

route::get('/new', [PageController :: class, 'home'])->name('home');
