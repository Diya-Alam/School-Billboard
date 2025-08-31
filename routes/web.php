<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticeController;

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

Route::get('/', function () {
    return view('welcome');
});

// This route defines all the necessary noticeboard routes (index, create, store, etc.)
Route::resource('notices', NoticeController::class);
