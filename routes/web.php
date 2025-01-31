<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

route::get('/', [AdminController::class, 'home']);
route::get('/home', [AdminController::class, 'index'])->name(name: 'home');
route::get('/create_kamar', [AdminController::class, 'create_kamar']);
route::post('/tambah_kamar', [AdminController::class, 'tambah_kamar']);
route::get('/data_kamar', [AdminController::class, 'data_kamar']);
route::get('/kamar_update/{id}', [AdminController::class, 'kamar_update']);
route::post('edit_kamar/{id}', [AdminController::class, 'edit_kamar']);
route::get('/kamar_delete/{id}', [AdminController::class, 'kamar_delete']);

route::get('/room_detail/{id}', [HomeController::class, 'room_detail']);
route::post('/tambah_booking/{id}', [HomeController::class, 'tambah_booking']);
route::get('/booking', [AdminController::class, 'booking']);
route::get('/delete_booking/{id}', [AdminController::class, 'delete_booking']);
route::get('/terima_booking/{id}', [AdminController::class, 'terima_booking']);
route::get('/tolak_booking/{id}', [AdminController::class, 'tolak_booking']);

route::get('/view_gallery', [AdminController::class, 'view_gallery']);
route::post('/upload_gallery', [AdminController::class, 'upload_gallery']);
route::get('/delete_gallery/{id}', [AdminController::class, 'delete_gallery']);

route::post('/contact', [HomeController::class, 'contact']);

route::get('/pesan', [AdminController::class, 'pesan']);
route::get('/kirim_email/{id}', [AdminController::class, 'kirim_email']);
route::post('/mail/{id}', [AdminController::class, 'mail']);
