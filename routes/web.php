<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\DocumentationFileController;
use App\Http\Controllers\FeedController;

Route::get('/', [HomeController::class,'index']);

Route::get('/profil', [ProfilController::class, 'index']);
Route::get('/kontak', [KontakController::class, 'index']);

Route::get('/donation', [DonationController::class, 'create']);
Route::post('/donation', [DonationController::class, 'store']);

Route::resource('campaign', CampaignController::class);
Route::get('/documentations',[DocumentationFileController::class,'index']

);


Route::post(

'/documentations',

[DocumentationFileController::class,'store']

);


Route::get('/feeds', [FeedController::class, 'index']);