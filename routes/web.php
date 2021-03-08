<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Storage;

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

Route::get('/pdftest', [PdfController::class, 'index']);
Route::get('/sendpdf', [PdfController::class, 'send']);
Route::get('/iftest', [PdfController::class, 'iftest']);
Route::get('/unzip', [PdfController::class, 'unzip']);

Route::get('/book.opf', function () {
    return response()->file('epub/modirmad/content.opf');
});
Route::get('statics/{file?}', [PdfController::class, 'bookHandle'])->where('file', '(.*)');
