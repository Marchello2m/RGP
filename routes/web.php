<?php

use App\Http\Controllers\PersonsController;
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
    return view('main');
});
Route::get('/addPerson', function () {
    return view('addPerson');
});
Route::post('/addPerson',[PersonsController::class,'saveData']);
Route::get('/',[PersonsController::class,'show']);
