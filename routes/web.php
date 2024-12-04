<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Dashboard\DashAgenda;
use App\Http\Controllers\Dashboard\DashCity;
use App\Http\Controllers\Dashboard\DashEncyclopedia;
use App\Http\Controllers\Dashboard\DashGallery;
use App\Http\Controllers\Dashboard\DashHome;
use App\Http\Controllers\Dashboard\DashVirtual;
use App\Http\Controllers\Dashboard\DashTestimonial;
use App\Http\Controllers\Auth\AuthController;

// HOMEPAGE
Route::get('/', [HomeController::class, 'index']);
Route::get('/index.html', [HomeController::class, 'index']);
Route::get('/galeri.html', [HomeController::class, 'gallery']);
Route::get('/sejarah.html', [HomeController::class, 'history']);

// ADMIN AUTH
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout']);

// ADMIN PAGE
Route::group(['prefix'=> 'dashboard','middleware'=>['auth']], function(){
  Route::get('/', [DashHome::class, 'index']);
  Route::get('/agenda', [DashAgenda::class, 'index']);
  Route::get('/city', [DashCity::class, 'index']);
  Route::get('/dashboard', [DashHome::class, 'index']);
  Route::get('/encyclopedia', [DashEncyclopedia::class, 'index']);
  Route::get('/gallery', [DashGallery::class, 'index']);
  Route::get('/testimonial', [DashTestimonial::class, 'index']);
  Route::get('/virtual', [DashVirtual::class, 'index']);
  
  Route::post('/agenda', [DashAgenda::class, 'postHandler']);
  Route::post('/city', [DashCity::class, 'postHandler']);
  Route::post('/encyclopedia', [DashEncyclopedia::class, 'postHandler']);
  Route::post('/gallery', [DashGallery::class, 'postHandler']);
  Route::post('/testimonial', [DashTestimonial::class, 'postHandler']);
  Route::post('/virtual', [DashVirtual::class, 'postHandler']);
});

// API
Route::group(['prefix'=> 'api'], function(){
  Route::get('agenda/{agenda:id}', [APIController::class, 'agenda']);
  Route::get('cities', [APIController::class, 'cities']);
  Route::get('city/{city:id}', [APIController::class, 'city']);
  Route::get('encyclopedia/{encyclopedia:id}', [APIController::class, 'encyclopedia']);
  Route::get('gallery/{gallery:id}', [APIController::class, 'gallery']);
  Route::get('testimonial/{testimonial:id}', [APIController::class, 'testimonial']);
  Route::get('virtual/{virtual:id}', [APIController::class, 'virtual']);
});
