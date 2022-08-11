<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUpload;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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

Route::get('/', function () 
{
    $results = DB::select('SELECT * FROM files');
    $resultw = DB::select('SELECT * FROM files WHERE type=1');
    $resultr = DB::select('SELECT * FROM files WHERE type=0');
    $data = [
        'results' => $results,
        'resultw' => $resultw,
        'resultr' => $resultr,
    ];
    return view('welcome')->with($data); 
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'view'])->name('home');
Route::get('login/{provider}', 'Auth\LoginController@redirectToProvider')->name('socialLogin.redirect');
Route::get('login/{provider}/callback', 'Auth\LoginController@handleProviderCallback')->name('socialLogin.callback');
Route::get('/upload-file', [FileUpload::class, 'createForm']);
Route::post('/upload-file', [FileUpload::class, 'fileUpload'])->name('fileUpload');
