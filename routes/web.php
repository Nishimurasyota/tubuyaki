<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\TweetController;
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
    return view('welcome');
});

Route::resource("tweet", TweetController::class);

Route::post("/comment/create" ,[CommentController::class,"create"]);
Route::post("/comment/delete" ,[CommentController::class,"delete"]);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// Provider登録と動作確認のために記述
// $name = app()->make('myName');

// dd($name);
