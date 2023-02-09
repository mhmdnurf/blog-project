<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Models\User\BlogModel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\User\BlogController;

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
    return view('user.pages.index', [
        'blogs' =>  BlogModel::all()
    ]);
});

Route::resource('blog', BlogController::class);
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Route::get('/admin', function () {
//     return view('admin.index');
// })->middleware('auth');

Route::resource('admin', DashboardController::class)->middleware('auth');
