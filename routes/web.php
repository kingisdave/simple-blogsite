<?php

use App\Http\Controllers\AccountsController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\UsersController;
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
    return view('pages.index');
});
Route::get('/welcome', function () {
    return view('layouts.app');
});
// Route::get('/user/edit', function () {
//     return view('editUser');
// });
// Route::post('/user/update', function () {
//     return view('');
// });
Route::resource('blogs', BlogsController::class);
Route::resource('users', UsersController::class);
Route::resource('accounts', AccountsController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
