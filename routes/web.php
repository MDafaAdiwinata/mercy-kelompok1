<?php

use Illuminate\Support\Facades\Route;

// Landing Page Routing

Route::get('/', function () {
    return view('index');
});

Route::get('/vehicles', function () {
    return view('vehicles');
});

Route::get('/models', function () {
    return view('models');
});

Route::get('/dealer', function () {
    return view('dealer');
});

Route::get('/about', function () {
    return view('about');
});

// User Routing

Route::get('/user/register', function () {
    return view('user.register');
});

Route::get('/user/home', function () {
    return view('user.home');
});

Route::get('/user/vehicles', function () {
    return view('user.vehicles');
});

Route::get('/user/models', function () {
    return view('user.models');
});

Route::get('/user/dealer', function () {
    return view('user.dealer');
});

Route::get('/user/booking', function () {
    return view('user.booking');
});

Route::get('/user/wishlist', function () {
    return view('user.wishlist');
});

Route::get('/user/profile', function () {
    return view('user.profile');
});

// Admin Routing
Route::get('/admin/login', function () {
    return view('admin.login');
});

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/admin/kelola-mobil', function () {
    return view('admin.kelola-mobil');
});

Route::get('/admin/carousel', function () {
    return view('admin.carousel');
});

Route::get('/admin/pelanggan', function () {
    return view('admin.pelanggan');
});

Route::get('/admin/transaksi', function () {
    return view('admin.transaksi');
});

Route::get('/admin/booking', function () {
    return view('admin.booking');
});

Route::get('/admin/dealer', function () {
    return view('admin.dealer');
});