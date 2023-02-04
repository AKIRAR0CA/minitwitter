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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('raiz');
})->middleware('guest');

Route::get('/home', [HomeController::class,'index'])
->middleware('auth')
->name('home.index');

Route::get('perfil', [PerfilController::class,'index'])
->middleware('auth')
->name('perfil.index');


Route::get('/register',[RegisterController::class, 'create'] )
->middleware('guest')
->name ('register.index');

Route::post('/register',[RegisterController::class, 'store'] )
->name ('register.store');

Route::get('/login',[SessionsController::class, 'create'] )
->middleware('guest')
->name ('login.index');

Route::post('/login',[SessionsController::class, 'store'] )
->name ('login.store');

Route::get('/logout',[SessionsController::class, 'destroy'] )
->middleware('auth')
->name ('login.destroy');

Route::get('/admin',[AdminController::class, 'index'])
->middleware('auth.admin')
->name('admin.index');

//post
Route::post('/home',[PostController::class, 'createPost'] )
->name ('post.createPost');

