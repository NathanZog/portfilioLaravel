<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\FactsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeSectionController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SkillsController;
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

Route::get('/', [HomeController::class, "index"]);
Route::get('/backoffice', [BackOfficeController::class, "index"]);


Route::get('/boAbout', [AboutController::class, "index"]);
Route::put('/updateAbout/{id}', [AboutController::class, "update"])->name('updateAbout');

Route::get('/boHome', [HomeSectionController::class, "index"]);
Route::put('/updateHome/{id}', [HomeSectionController::class, "update"])->name('updateHome');

Route::get('/boFacts', [FactsController::class, "index"]);
Route::put('/updateFacts/{id}', [FactsController::class, "update"])->name('updateFacts');

Route::get('/boSkills', [SkillsController::class, "index"]);
Route::put('/updateSkills/{id}', [SkillsController::class, "update"])->name('updateSkills');

Route::get('/boServices', [ServicesController::class, "index"]);
Route::put('/updateService/{id}', [ServicesController::class, "update"])->name('updateService');





