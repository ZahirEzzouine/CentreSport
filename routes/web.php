<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produitcontrol;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\NavbarController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('get_add',[AuthentificationController::class] ,'get_add');


Route::get('/get_login',[AuthentificationController::class , 'get_login']);


Route::get('/get_inscription',[AuthentificationController::class , 'get_inscription']);



Route::post('/store_inscription',[AuthentificationController::class , 'store_inscription']);

Route::post('/get_mot_de_passe_oublier',[AuthentificationController::class , 'get_mot_de_passe_oublier']);



Route::post('/check_code_verification',[AuthentificationController::class , 'check_code_verification']);


Route::post('/new_password',[AuthentificationController::class ],'new_password');







Route::get('/about',[NavbarController::class ,'about']);

Route::get('/services',[NavbarController::class ,'services']);

Route::get('/contact',[NavbarController::class ,'contact']);

