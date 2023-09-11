<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\TestinputController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\MahasiswaControlle;

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
    return view('auth.login');
});
Route::get('/test', function () {
    return view('test');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/test_controller/{param1}', [TestController::class, 'index']);
Route::get('/artikel/{slug}', [ArtikelController::class, 'view']);
Route::get('/table', [TableController::class, 'view']);

Route::get('/user', function () {
    return view('crud_user');
});

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/forgot_password', [AuthController::class, 'forgot_password'])->name('forgot.password');

// admin
Route::get('/data_admin', [AdministratorController::class, 'admin'])->name('admin');
// Route::post('/data_admin', [AdministratorController::class, 'admin'])->name('admin');
Route::post('/dashboard', [AdministratorController::class, 'store'])->name('dash');
Route::get('/login', [AdministratorController::class, 'destroy'])->name('login');
Route::get('/dashboard', [AdministratorController::class, 'dash'])->name('dash');
Route::get('/admin',[AdminController::class,'index'])->name('admin');
// Route::resouce('/admin',[AdminController::class]);
Route::get('/create-data-admin',[AdminController::class,'create'])->name('create_admin');
Route::post('/create-admin',[AdminController::class,'store'])->name('admin_proses');
Route::get('/show-admin',[AdminController::class,'show'])->name('sh_admin');
Route::get('/edit-admin',[AdminController::class,'edit'])->name('ed_admin');
Route::put('/update-admin',[AdminController::class,'update'])->name('administrator-update-admin');
Route::delete('/delete/{id}',[AdminController::class,'destroy'])->name('administrator_delete_admin');

// mahasiswa
Route::get('/data_mahasiswa', [AdministratorController::class, 'mhs'])->name('mahasiswa');
Route::get('/data_mahasiswa', [MahasiswaControlle::class, 'index'])->name('mahasiswa');


// Route::group(['middleware' => ['auth:admin', 'ceklevel:super-admin,admin']], function () {
// });
// Route::get('/dashboard', function () {
//     return view('layout.master_admin');
// });

Route::get('/testing-input-dummy', [TestinputController::class, 'index']);
Route::get('/testing-input', [TestinputController::class, 'test_input'])->name('input.get');
Route::get('/testing-form', [TestinputController::class, 'form']);
Route::get('/testing-view', [TestinputController::class, 'table']);
