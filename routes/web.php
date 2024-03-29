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
    return view('welcome');
});

Auth::routes(['register' => false, 'reset' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
Route::get('/sk', [App\Http\Controllers\HomeController::class, 'sk'])
    ->name('syaratKetentuan');

// Check Data
Route::get('/check', [App\Http\Controllers\ResiController::class, 'check'])
    ->name('check');
Route::post('/check-data', [App\Http\Controllers\ResiController::class, 'checkData'])
    ->name('checkData');
Route::get('/result', [App\Http\Controllers\ResiController::class, 'result'])
    ->name('result');

// Input Data
Route::get('/input', [App\Http\Controllers\InputController::class, 'index'])
    ->name('inputData');
Route::post('/store', [App\Http\Controllers\InputController::class, 'store'])
    ->name('store');
Route::get('/input/step2', [App\Http\Controllers\InputController::class, 'index2'])
    ->name('inputData2');
Route::post('/store/step2', [App\Http\Controllers\InputController::class, 'store2'])
    ->name('store2');
Route::get('/input/step3', [App\Http\Controllers\InputController::class, 'index3'])
    ->name('inputData3');
Route::post('/store/step3', [App\Http\Controllers\InputController::class, 'store3'])
    ->name('store3');
Route::get('/output-resi', [App\Http\Controllers\InputController::class, 'successResi'])
    ->name('outResi');

// User
Route::get('/profile', [App\Http\Controllers\UserController::class, 'profile'])
    ->name('profile');
Route::get('/change-password', [App\Http\Controllers\UserController::class, 'changePassword'])
    ->name('changePassword');
Route::post('/reset', [App\Http\Controllers\Auth\ForgotPasswordController::class, 'changePass'])
    ->name('changePass');


// Resi
Route::get('/resi', [App\Http\Controllers\ResiController::class, 'index'])
    ->name('masterResi');

// Transaksi
Route::get('/transaksi', [App\Http\Controllers\TransactionController::class, 'index'])
    ->name('masterTransaksi');

// Master
Route::get('/kurir', [App\Http\Controllers\HomeController::class, 'masterKurir'])
    ->name('masterKurir');
Route::get('/driver', [App\Http\Controllers\HomeController::class, 'masterDriver'])
    ->name('masterDriver');
Route::get('/vendors', [App\Http\Controllers\HomeController::class, 'masterVendors'])
    ->name('masterVendors');

// Wilayah
Route::get('/wilayah', [App\Http\Controllers\WilayahController::class, 'index'])
    ->name('masterWilayah');
Route::get('/wilayah/create', [App\Http\Controllers\WilayahController::class, 'create'])
    ->name('createWilayah');
Route::post('/wilayah/store', [App\Http\Controllers\WilayahController::class, 'store'])
    ->name('storeWilayah');
Route::get('/wilayah/edit/{id}', [App\Http\Controllers\WilayahController::class, 'edit']);
Route::put('/wilayah/update/{id}', [App\Http\Controllers\WilayahController::class, 'update']);
Route::get('/wilayah/delete/{id}', [App\Http\Controllers\WilayahController::class, 'delete']);

// Agen
Route::get('/agen', [App\Http\Controllers\AgenController::class, 'index'])
    ->name('masterAgen');
Route::get('/agen/create', [App\Http\Controllers\AgenController::class, 'create'])
    ->name('createAgen');
Route::post('/agen/store', [App\Http\Controllers\AgenController::class, 'store'])
    ->name('storeAgen');
Route::get('/agen/edit/{id}', [App\Http\Controllers\AgenController::class, 'edit']);
Route::put('/agen/update/{id}', [App\Http\Controllers\AgenController::class, 'update']);
Route::get('/agen/reset/{id}', [App\Http\Controllers\AgenController::class, 'reset']);

// Pengaturan //

// Jenis Barang
Route::get('/type', [App\Http\Controllers\TypeController::class, 'index'])
    ->name('settingsType');
Route::get('/type/create', [App\Http\Controllers\TypeController::class, 'create'])
    ->name('createType');
Route::post('/type/store', [App\Http\Controllers\TypeController::class, 'store'])
    ->name('storeType');
Route::get('/type/edit/{id}', [App\Http\Controllers\TypeController::class, 'edit']);
Route::put('/type/update/{id}', [App\Http\Controllers\TypeController::class, 'update']);
Route::get('/type/delete/{id}', [App\Http\Controllers\TypeController::class, 'delete']);

// Harga
Route::get('/settings/price', [App\Http\Controllers\SettingsController::class, 'price']);
Route::put(
    '/settings/price/update/{id}',
    [App\Http\Controllers\SettingsController::class, 'priceUpdate']
);

// System
Route::get('/Settings/edit/{id}', [App\Http\Controllers\SettingsController::class, 'edit']);
Route::put('/Settings/update/{id}', [App\Http\Controllers\SettingsController::class, 'update']);
