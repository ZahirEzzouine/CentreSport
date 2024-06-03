<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthentificationController;
use App\Http\Controllers\NavbarController;
use App\Http\Controllers\AdminActionController;

Route::get('/', function () {
    return view('welcome');
})->name("home");

//authentification

Route::get('/get_login',[AuthentificationController::class , 'get_login'])->name("get_login");
Route::get('/get_inscription',[AuthentificationController::class , 'get_inscription']);
Route::post('/store_inscription',[AuthentificationController::class , 'store_inscription']);
Route::post('/check_login',[AuthentificationController::class , 'check_login']);
Route::get('/get_mot_de_passe_oublier',[AuthentificationController::class , 'get_mot_de_passe_oublier']);
Route::post('/check_code_verification',[AuthentificationController::class , 'check_code_verification']);
Route::post('/new_password',[AuthentificationController::class ],'new_password');

//événement


Route::get('/get_ajouter_événement',[AdminActionController::class ,'get_ajouter_événement']);
Route::get('/get_all_événements',[AdminActionController::class ,'get_all_événements']);
Route::get('/ajouter_événement',[AdminActionController::class ,'ajouter_événement']);
Route::get('/get_modifier_événement/{id}',[AdminActionController::class ,'get_modifier_événement']);
Route::post('/modifier_événement/{id}',[AdminActionController::class ,'modifier_événement']);
Route::get('supprimer_événement/{id}',[AdminActionController::class,'supprimer_événement']);


//sport
Route::get('/get_ajouter_sport',[AdminActionController::class ,'get_ajouter_sport']);
Route::get('/get_all_sports',[AdminActionController::class ,'get_all_sports']);
Route::post('/ajouter_sport',[AdminActionController::class ,'ajouter_sport']);
Route::get('/get_modifier_sport/{id}',[AdminActionController::class ,'get_modifier_sport']);
Route::post('/modifier_sport/{id}',[AdminActionController::class ,'modifier_sport']);
Route::get('supprimer_sport/{id}',[AdminActionController::class,'supprimer_sport']);



//utilisateur
Route::get('/get_all_utilisateurs',[AdminActionController::class ,'get_all_utilisateurs']);
Route::get('supprimer_utilisateur/{id}',[AdminActionController::class,'supprimer_utilisateur']);
//navbar
Route::get('/about',[NavbarController::class ,'about']);
Route::get('/services',[NavbarController::class ,'services']);
Route::get('/contact',[NavbarController::class ,'contact']);





//interface admin
Route::get('/get_interface_admin',[AdminActionController::class ,'get_interface_admin'])->name("get_interface_admin");
