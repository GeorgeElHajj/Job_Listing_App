<?php

use App\Http\Controllers\ListingsController;
use App\Models\Listings;
use Illuminate\Support\Facades\Route;

use function PHPSTORM_META\map;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/',[ListingsController::class,'index']);


Route::get('/listings/{listing}', 
[ListingsController::class,'show']);
