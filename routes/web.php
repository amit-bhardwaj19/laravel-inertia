<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;
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

Route::get('/about', function() {
    return Inertia::render('About');
});

Route::inertia('/faq', 'Faq');

Route::resource('posts', PostsController::class);