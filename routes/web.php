<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\TransaksiController;

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


Route::view('/','master.index')->name('home');
Route::view('/','home.halamanUtama')->name('halaman_utama');

// OBAT
Route::get('/index',[ObatController::class, 'index'])->name('index_obat');

Route::get('/tampil_obat',[ObatController::class, 'tambahObat'])->name('tampil_obat');
Route::post('/insert_obat',[ObatController::class, 'insert_obat'])->name('insert_obat');

Route::get('/edit_obat/{id}',[ObatController::class, 'editObat'])->name('edit_obat');
Route::post('/update_obat/{id}',[ObatController::class, 'updateObat'])->name('update_obat');

Route::get('/delete/{id}',[ObatController::class, 'delete']);
Route::get('/search',[ObatController::class, 'search'])->name('search');

// TRANSAKSI
Route::view('/tampil','Transaksi.tampil_transaksi')->name('tampil');

Route::get('/index_transaksi',[TransaksiController::class, 'index'])->name('index_transaksi');

Route::get('/tambah_transaksi',[TransaksiController::class, 'tambahTransaksi'])->name('tambah_transaksi');
Route::post('/insert_transaksi',[TransaksiController::class, 'insertTransaksi'])->name('insert_transaksi');


// Route::get('/addBeli',[TransaksiController::class, 'addBeli']);



Route::get('/delete_transaksi/{id}',[TransaksiController::class, 'delete']);
Route::get('/search',[TransaksiController::class, 'search'])->name('search');

