<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login'); // Pastikan file login.blade.php kamu ada
})->name('login');

Route::post('/login', function (Request $request) {
    $username = $request->username;
    $password = $request->password;

    if ($username === 'admin' && $password === 'admin') {
        return redirect('/admin/dashboard');
    } elseif ($username === 'dosen' && $password === 'dosen') {
        return redirect('/dosen');
    } elseif ($username === 'mahasiswa' && $password === 'mahasiswa') {
        return redirect('/mahasiswa');
    }

    return back()->with('error', 'Username atau password salah!');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard', ['title' => 'Dahboard', 'rute' => 'admin -> dashboard']);
});

Route::get('/admin/jadwal', function () {
    return view('admin.jadwal', ['title' => 'Jadwal', 'rute' => 'admin -> jadwal']);
});

Route::get('/admin/laporan', function () {
    return view('admin.laporan', ['title' => 'Laporan', 'rute' => 'admin -> jadwal']);
});

Route::get('/admin/presensi', function () {
    return view('admin.presensi', ['title' => 'Presensi', 'rute' => 'admin -> jadwal']);
});

Route::get('/admin/masterdata/admin', function () {
    return view('admin.master_data/admin', ['title' => 'Master Data Admin', 'rute' => 'admin -> jadwal']);
});

Route::get('/admin/masterdata/dosen', function () {
    return view('admin.master_data/dosen', ['title' => 'Master Data Dosen', 'rute' => 'admin -> jadwal']);
});

Route::get('/admin/masterdata/mahasiswa', function () {
    return view('admin.master_data/mahasiswa', ['title' => 'Master Data Mahasiswa', 'rute' => 'admin -> jadwal']);
});

Route::get('/admin/masterdata/prodi', function () {
    return view('admin.master_data/prodi', ['title' => 'Master Data Program Studi', 'rute' => 'admin -> jadwal']);
});

Route::get('/admin/masterdata/tahunAjaran', function () {
    return view('admin.master_data/tahunAjaran', ['title' => 'Master Data Tahun Ajaran', 'rute' => 'admin -> jadwal']);
});

Route::get('/admin/profil', function () {
    return view('admin.profil', ['title' => 'Master Data Profil', 'rute' => 'admin -> jadwal']);
});

Route::get('/dosen', function () {
    return 'Halo Dosen';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});

Route::get('/lupa_password', function () {
    return view('auth.lupa_password'); // Perhatikan perubahan di sini
});

Route::get('/validasi_awal', function () {
    return view('auth.validasi_awal'); // Perhatikan perubahan di sini
});

Route::get('/validasi_otp', function () {
    return view('auth.validasi_otp'); // Perhatikan perubahan di sini
});

Route::get('/register', function () {
    return view('auth.register'); // Perhatikan perubahan di sini
});