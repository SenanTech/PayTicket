<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Facture;
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

Route::get('/', function () { return view('home');});

Route::get('/facture', [Facture::class, 'generate'] );
Route::get('/factureQr', function (){return view("facture");});