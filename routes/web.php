<?php

use App\Http\Controllers\VillageCultureController;
use App\Models\VillageCulture;
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

Route::get('/', function () {
    // return view('welcome');
    return view('pages.story.index');
});

Route::get('/{id}/{slug}', [VillageCultureController::class, 'show']);
