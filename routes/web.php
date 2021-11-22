<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadFile;
use App\Http\Controllers\Users;
use App\Http\Controllers\Archery;
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
Route::get('product', [ProductController::class, 'list']);
Route::get('/', function () {return view('welcome');});
// Route::get('users', function()
// {
//     return View('users')->with('excel',null);
// });

Route::post('UploadFile', [UploadFile::class, 'fileImport'])->name('UploadFile');
Route::get('users', [Users::class, 'Users']);
Route::get('archery', [Archery::class, 'archery']);
Route::post('submitscore', [Archery::class, 'countscore']);