<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\AfiliadoController;
use App\Http\Controllers\RetiroController;
use App\Http\Controllers\DepositoController;

Route::resource('/Afiliado','App\Http\Controllers\AfiliadoController');

Route::resource('/Empleado','App\Http\Controllers\EmpleadoController');

Route::resource('/Deposito','App\Http\Controllers\DepositoController');
Route::get('/Deposito/{id}/{id2}',[DepositoController::class,'show']);
Route::get('/Deposito/add/{id}/{id2}',[DepositoController::class,'create']);
Route::get('/Deposito/del/{id}/{id2}/{id3}',[DepositoController::class,'destroy']);

Route::resource('/Retiro','App\Http\Controllers\RetiroController');
Route::get('/Retiro/{id}/{id2}',[RetiroController::class,'show']);
Route::get('/Retiro/add/{id}/{id2}',[RetiroController::class,'create']);
Route::get('/Retiro/del/{id}/{id2}/{id3}',[RetiroController::class,'destroy']);

Route::get('/', function () {
    return view('layouts.principal');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
