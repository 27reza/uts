<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Models\Employee;
use App\Http\Controllers\loginController;

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
    $jumlahpegawai = Employee::count();
    $jumlahpegawailakilaki = Employee::where('jeniskelamin','laki-laki')->count();
    $jumlahpegawaiperempuan = Employee::Where('jeniskelamin','pereempuan')->count();

    return view('welcome', compact('jumlahpegawai','jumlahpegawailakilaki','jumlahpegawaiperempuan'));
})->middleware('auth');

Route::get('/pegawai',[EmployeeController::class, 'index'])->name('pegawai');
// MEnambahkan data
Route::get('/tambahpegawai',[EmployeeController::class, 'tambahpegawai'])->name('tambahpegawai');
Route::post('/insertdata',[EmployeeController::class, 'insertdata'])->name('insertdata');
// Mengubah data
Route::get('/tampilkandata/{id}',[EmployeeController::class, 'tampilkandata'])->name('tampilkandata');
Route::post('/updatedata/{id}',[EmployeeController::class, 'updatedata'])->name('updatedata');
// Menghapus data
Route::get('/delete/{id}',[EmployeeController::class, 'delete'])->name('delete');
//login
Route::get('/login',[loginController::class, 'login'])->name('login');
Route::post('/loginproses',[loginController::class, 'loginproses'])->name('loginproses');
//Register
Route::get('/register',[loginController::class, 'register'])->name('register');
Route::post('/registeruser',[loginController::class, 'registeruser'])->name('registeruser');
//logout
Route::get('/logout',[loginController::class, 'logout'])->name('logout');