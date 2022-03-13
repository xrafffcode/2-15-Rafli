<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;


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
    return view('home' ,[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "nama" => "Muhamad Rafli Alfarizqi",
        "email" => "yusfiwawan2@gmail.com",
        "gambar" => "rafli.png",
        "title" => "About"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery',[
        "title" => "Gallery"
    ]);
});

Route::get('/home', function(){
    return view('admin.home', [
        "title" => "Home"
    ]);
});

Route::get('/delete_contact/{id}', ContactController::class . '@destroy');


Route::resource('/contact', ContactController::class);

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

