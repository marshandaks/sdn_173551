<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PrestasiController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\TenagaKerjaController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\VisiMisiController;

Route::get('/', [AppController::class, 'index'])->name('home');

Route::get('/berita', [AppController::class, 'berita'])->name('berita');
Route::get('/sejarah', [AppController::class, 'sejarah'])->name('sejarah');
Route::get('/visimisi', [AppController::class, 'visimisi'])->name('visimisi');
Route::get('/kontak', [AppController::class, 'kontak'])->name('kontak');
Route::get('/saran', [AppController::class, 'saran'])->name('saran');
Route::get('/prestasi', [AppController::class, 'prestasi'])->name('prestasi');
Route::post('/saran/store', [AppController::class, 'storeSaran'])->name('saran.store');

// tenagakerja
Route::get('/tenagaKerja', [AppController::class, 'tenagaKerja'])->name('tenagaKerja');
Route::get('/detail/{slug}', [AppController::class, 'detail'])->name('detail');
Route::get('/pengumuman/{slug}', [AppController::class, 'pengumumanSlug'])->name('pengumumanSlug');
Route::get('/prestasi/{slug}', [AppController::class, 'prestasiSlug'])->name('prestasiSlug');

Route::get('/test', function () {
    return view('text');
});


Route::get('/login', function () {
    return view('auth/login');
});



// login
Route::get('/login', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/galeri', [AppController::class, 'galeri'])->name('galeri');
Route::get('/pengumuman', [AppController::class, 'pengumuman'])->name('pengumuman');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog')->middleware('auth');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create')->middleware('auth');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store')->middleware('auth');
Route::get('/blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit')->middleware('auth');
Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update')->middleware('auth');
Route::post('/blog/destroy/{id}', [BlogController::class, 'destroy'])->name('blog.destroy')->middleware('auth');

// photo
Route::get('/photo', [PhotoController::class, 'index'])->name('photo')->middleware('auth');
Route::post('/photo/store', [PhotoController::class, 'store'])->name('photo.store')->middleware('auth');
Route::post('/photo/update/{id}', [PhotoController::class, 'update'])->name('photo.update')->middleware('auth');
Route::post('/photo/destroy/{id}', [PhotoController::class, 'destroy'])->name('photo.destroy')->middleware('auth');

// Tenaga Kerja
Route::get('/tenagaKerjaDashboard', [TenagaKerjaController::class, 'index'])->name('tenagaKerjaDashboard')->middleware('auth');
Route::post('/tenagaKerjaDashboard/store', [TenagaKerjaController::class, 'store'])->name('tenagaKerja.store')->middleware('auth');
Route::post('/tenagaKerjaDashboard/update/{id}', [TenagaKerjaController::class, 'update'])->name('tenagaKerja.update')->middleware('auth');
Route::post('/tenagaKerjaDashboard/destroy/{id}', [TenagaKerjaController::class, 'destroy'])->name('tenagaKerja.destroy')->middleware('auth');


// Sejarah
Route::get('/atursejarah', [SejarahController::class, 'index'])->name('atursejarah')->middleware('auth');
Route::get('/atursejarah/edit', [SejarahController::class, 'edit'])->name('atursejarah.edit')->middleware('auth');
Route::post('/atursejarah/update/{id}', [SejarahController::class, 'update'])->name('atursejarah.update')->middleware('auth');

// video
Route::get('/visimisis', [VisiMisiController::class, 'index'])->name('visimisis')->middleware('auth');

//visi
Route::post('/visi/store', [VisiMisiController::class, 'storeVisi'])->name('visi.store')->middleware('auth');
Route::post('/visi/update/{id}', [VisiMisiController::class, 'updateVisi'])->name('visi.update')->middleware('auth');
Route::post('/visi/destroy/{id}', [VisiMisiController::class, 'destroyVisi'])->name('visi.destroy')->middleware('auth');

//misi
Route::post('/misi/update/{id}', [VisiMisiController::class, 'updateMisi'])->name('misi.update')->middleware('auth');
Route::post('/misi/store', [VisiMisiController::class, 'storeMisi'])->name('misi.store')->middleware('auth');
Route::post('/misi/destroy/{id}', [VisiMisiController::class, 'destroyMisi'])->name('misi.destroy')->middleware('auth');

//kontak
Route::get('/kontakDashboard', [KontakController::class, 'index'])->name('kontakDashboard')->middleware('auth');

Route::post('/kontakDashboard/update/{id}', [KontakController::class, 'update'])->name('kontak.update')->middleware('auth');
Route::post('/kontakDashboard/store', [KontakController::class, 'store'])->name('kontak.store')->middleware('auth');
Route::post('/kontakDashboard/destroy/{id}', [KontakController::class, 'destroy'])->name('kontak.destroy')->middleware('auth');


//saran
Route::get('/saranDashboard', [SaranController::class, 'index'])->name('saranDashboard')->middleware('auth');
Route::post('/saranDashboard/destroy/{id}', [SaranController::class, 'destroy'])->name('saran.destroy')->middleware('auth');

// galeri Dashboard

Route::get('/galeriDashboard', [GaleriController::class, 'index'])->name('galeriDashboard')->middleware('auth');


Route::post('/kegiatan/store', [GaleriController::class, 'storeKegiatan'])->name('kegiatan.store')->middleware('auth');
Route::post('/kegiatan/update/{id}', [GaleriController::class, 'updateKegiatan'])->name('kegiatan.update')->middleware('auth');
Route::post('/kegiatan/destroy/{id}', [GaleriController::class, 'destroyKegiatan'])->name('kegiatan.destroy')->middleware('auth');

// Fasilitas
Route::post('/fasilitas/store', [GaleriController::class, 'storeFasilitas'])->name('fasilitas.store')->middleware('auth');
Route::post('/fasilitas/update/{id}', [GaleriController::class, 'updateFasilitas'])->name('fasilitas.update')->middleware('auth');
Route::post('/fasilitas/destroy/{id}', [GaleriController::class, 'destroyFasilitas'])->name('fasilitas.destroy')->middleware('auth');

// pengumuman
Route::get('/pengumumanDashboard', [PengumumanController::class, 'index'])->name('pengumumanDashboard')->middleware('auth');
Route::get('/pengumumanDashboard/create', [PengumumanController::class, 'create'])->name('pengumumanDashboard.create')->middleware('auth');
Route::post('/pengumumanDashboard/store', [PengumumanController::class, 'store'])->name('pengumumanDashboard.store')->middleware('auth');
Route::get('/pengumumanDashboard/edit/{id}', [PengumumanController::class, 'edit'])->name('pengumumanDashboard.edit')->middleware('auth');
Route::post('/pengumumanDashboard/update/{id}', [PengumumanController::class, 'update'])->name('pengumumanDashboard.update')->middleware('auth');
Route::post('/pengumumanDashboard/destroy/{id}', [PengumumanController::class, 'destroy'])->name('pengumumanDashboard.destroy')->middleware('auth');

// prestasi
Route::get('/prestasiDashboard', [PrestasiController::class, 'index'])->name('prestasiDashboard')->middleware('auth');
Route::get('/prestasiDashboard/create', [PrestasiController::class, 'create'])->name('prestasiDashboard.create')->middleware('auth');
Route::post('/prestasiDashboard/store', [PrestasiController::class, 'store'])->name('prestasiDashboard.store')->middleware('auth');
Route::get('/prestasiDashboard/edit/{id}', [PrestasiController::class, 'edit'])->name('prestasiDashboard.edit')->middleware('auth');
Route::post('/prestasiDashboard/update/{id}', [PrestasiController::class, 'update'])->name('prestasiDashboard.update')->middleware('auth');
Route::post('/prestasiDashboard/destroy/{id}', [PrestasiController::class, 'destroy'])->name('prestasiDashboard.destroy')->middleware('auth');
