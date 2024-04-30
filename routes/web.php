<?php
use App\Http\Controllers\ContactController;

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');

// });


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

Route::get('/demo', function () {
    return view('demo');
    });


Route::get('/',[ContactController::class,'index']);
Route::post('/addcontact', [ContactController::class,'create']);
Route::get('/add', [ContactController::class,'add']);
Route::get('/delete/{id}', [ContactController::class,'delete']);
Route::get('/edit/{id}', [ContactController::class, 'edit']);
Route::post('/edit/{id}', [ContactController::class, 'update']);






