<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExampleController;


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

Route::view('/' , 'welcome');
//Route::get('example/index', [ExampleController::class, 'index']);
Route::resource('public/example', ExampleController::class);







