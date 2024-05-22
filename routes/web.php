<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Produitcontrol;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\AdminActionController;
Route::get('/', function () {
    return view('welcome');
});



//authentification

Route::get('/get_login',[AuthentificationController::class , 'get_login']);
Route::get('/get_inscription',[AuthentificationController::class , 'get_inscription']);
Route::post('/store_inscription',[AuthentificationController::class , 'store_inscription']);
Route::get('/get_mot_de_passe_oublier',[AuthentificationController::class , 'get_mot_de_passe_oublier']);
Route::post('/check_code_verification',[AuthentificationController::class , 'check_code_verification']);
Route::post('/new_password',[AuthentificationController::class ],'new_password');




//événement

Route::get('/get_ajouter_événement',[AdminActionController::class ,'get_ajouter_événement']);
Route::get('/get_all_événement',[AdminActionController::class ,'get_all_événement']);
Route::post('/ajouter_événement',[AdminActionController::class ,'ajouter_événement']);
Route::post('/get_modifier_événement',[AdminActionController::class ,'get_modifier_événement']);
Route::post('/modifier_événement',[AdminActionController::class ,'modifier_événement']);





//sport
Route::get('/get_ajouter_sport',[AdminActionController::class ,'get_ajouter_sport']);
Route::post('/ajouter_sport',[AdminActionController::class ,'ajouter_sport']);
Route::get('/get_modifier_sport',[AdminActionController::class ,'get_modifier_sport']);
Route::post('/modifier_sport',[AdminActionController::class ,'modifier_sport']);






//navbar
Route::get('/about',[NavbarController::class ,'about']);
Route::get('/services',[NavbarController::class ,'services']);
Route::get('/contact',[NavbarController::class ,'contact']);





