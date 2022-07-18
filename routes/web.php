<?php

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
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/perfil', function () {
    return view('profile.show');
});
Route::get('/menu', function () {
    return view('vistas.menu');
});

Route::get('/plantas', function () {
    return view('vistas.plantas');
});

Route::get('/areas', function () {
    return view('vistas.areas');
});

Route::get('/lineas', function () {
    return view('vistas.lineas');
});

Route::get('/maquinas', function () {
    return view('vistas.maquinas');
});


Route::get('/reportes', function () {
    return view('vistas.reportes');
});

Route::get('report/pdf/{maquina}/{f1}/{f2}', [ExportController::class, 'reportPDF']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
