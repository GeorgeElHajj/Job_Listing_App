<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
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
//All Listings
Route::get('/',[ListingController::class,'index']);


// Show Create Form
Route::get('/listings/create',[ListingController::class, 'create']);
//Store listing data
Route::post('/listings', [ListingController::class,'store']);

// single Listing
Route::get('/listings/{listings}', 
[ListingController::class,'show']);
