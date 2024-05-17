<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produitcontrol;
use App\Http\Controllers\Sportcontrol;
use App\Http\Controllers\ServiceControl;
use App\Http\Controllers\Aboutcontrol;
use App\Http\Controllers\Logincontroller;
Route::get('/', function () {
    return view('welcome');
});


Route::get('/Produit',[Produitcontrol::class ,'create']);
Route::get('/produit/create',[Produitcontrol::class ,'index']);
Route::post('/Produit',[Produitcontrol::class ,'store']);


Route::get('/chose',[Aboutcontrol::class , 'index' ]);

Route::get('/info',[Sportcontrol::class] ,'index');

Route::get('/login',[Logincontroller::class,'index']);




Route::get('/service',[ServiceControl:: class ,'index']);






Route::middleware(['auth:user'])->group(function () {
    
});

Route::middleware(['auth:admin'])->group(function () {

});
