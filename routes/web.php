<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InformationController;

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

Route::get('basic', [InformationController::class,'baseInformation']);
Route::get('ageEducationAnalisis', [InformationController::class,'ageEducationInformation']);
Route::get('ageStatusAnalisis', [InformationController::class,'ageStatusInformation']);
Route::get('educationStatusAnalisis', [InformationController::class,'educationStatusInformation']);
