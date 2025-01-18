<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

route::get('/',[AdminController::class,'home']);
route::get('/home',[AdminController::class,'index'])->name(name: 'home');
route::get('/create_kamar',[AdminController::class, 'create_kamar']);
route::post('/tambah_kamar', [AdminController::class, 'tambah_kamar']);
route::get('/data_kamar', [AdminController::class,'data_kamar']);
