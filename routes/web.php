<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\Covid19Controller ;
use App\Http\Controllers\Backend\Auth\LoginController;
use App\Http\Controllers\Backend\Auth\ResetPasswordController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
 
Route::get('/', [UserController::class, 'index']);
Route::get('/Covid19Info', [Covid19Controller ::class, 'list'])->name('covid19');
Route::get('/show/{id}', [UserController::class, 'show'])->name('Show');


Route::middleware('auth')->group(function () {
    
Route::get('/Notice', [NoticeController::class, 'index'])->name('Notice');
Route::post('/Notice/create', [NoticeController::class, 'store'])->name('Notice.create');
Route::get('/Notice/list', [NoticeController::class, 'list'])->name('Notice.list');

Route::get('/Notice/edit/{id}', [NoticeController::class, 'edit'])->name('Notice.edit');
Route::post('/Notice/update/{id}', [NoticeController::class, 'update'])->name('Notice.update');
Route::delete('/Notice/delete/{id}', [NoticeController::class, 'destroy'])->name('Notice.delete');

    
});

Route::prefix('admin')->group(function () {
   
    Route::get('/login', [LoginController::class, 'showlogin'])->name('Backendshowlogin');
    Route::post('/login/submit', [LoginController::class, 'login'])->name('Backendloginsubmit');
    Route::post('/logout/submit', [LoginController::class, 'logout'])->name('Backendlogout');


    Route::get('/login/passwordreset', [Backend\Auth\ResetPasswordController::class, 'showlinkreqform'])->name('passwordreset');
    Route::post('/login/passwordreset/submit', [Backend\Auth\ResetPasswordController::class, 'reset'])->name('passwordupdate');
    
    

});






// Route::post('/Notice/create', [NoticeController::class, 'update'])->name('Notice.update');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
