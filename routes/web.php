<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Pages\Home\HomeIndex;
use App\Http\Livewire\Pages\About\AboutIndex;
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

// Route::get('/', function () {
//     return view('layouts.app');
// });

Route::get('/', HomeIndex::class);
Route::get('/home', HomeIndex::class)->name('home.index');
Route::get('/about', AboutIndex::class)->name('about.index');
