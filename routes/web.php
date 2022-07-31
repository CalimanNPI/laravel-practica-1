<?php

use App\Http\Controllers\PortafolioController;
use App\Http\Controllers\ContectController;
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


Route::view('/home', 'home', ['nombre' => 'carlos'])->name('home'); //uso politicas de privacidad, terminos y condiciones, oque no contenga información
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
//Route::view('/portafolio', 'portafolio', compact('itemsTitle'))->name('portafolio');
Route::post('/contact',  [ContectController::class, 'store']);

Route::resource('portafolio', PortafolioController::class);//->parameter('portafolio', 'proyects')->names('proyects');
Route::get('/portafolio/show/{company}', [PortafolioController::class, 'show'])->name('show');
Route::get('/portafolio/create', [PortafolioController::class, 'create'])->name('create');
Route::post('/portafolio/create', [PortafolioController::class, 'store'])->name('store.company');
Route::get('/portafolio/edit/{company}', [PortafolioController::class, 'edit'])->name('edit');
Route::patch('/portafolio/update/{company}', [PortafolioController::class, 'update'])->name('company.update');

//Route::resource('portafolio', [PortafolioController::class])->only('index', 'show');
//Route::resource('portafolio', [PortafolioController::class])->except('index', 'show');

/*Route::get('/', function () {
    $nombre = 'carlos';
    return view('home', compact('nombre'));
    return view('home', ['nombre', $nombre]);
    return view('home')->with(['nombre', $nombre]);
    //echo "<a href='".route('contacto')."'>Contacto</a>" ;
});*/


/**Route::get('/user/{name?}', function ($name = "Global") {
    return "saludo a " . $name;
});

Route::get('contacto', function () {
    return "sección de contacto";
})->name("contacto");*/
