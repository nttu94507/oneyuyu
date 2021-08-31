<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\uploadfile;
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
Route::get('users', function()
{
    return View('users')->with('excel',null);
});

Route::post('uploadfile', [UploadFile::class, 'fileImport'])->name('uploadfile');
