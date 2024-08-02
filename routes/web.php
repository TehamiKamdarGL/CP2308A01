<?php

use App\Http\Controllers\WebController;
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

//----------Website Routes------------------
Route::get('/', [WebController::class , 'index']);
Route::get('/about', [WebController::class , 'about']);
Route::get('/service', [WebController::class , 'service']);
Route::get('/menu', [WebController::class , 'menu']);
Route::get('/booking', [WebController::class , 'booking']);
Route::get('/team', [WebController::class , 'team']);
Route::get('/testimonial', [WebController::class , 'testimonial']);
Route::get('/contact', [WebController::class , 'contact']);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::User()->role == 1){
            return view('admin.index');
        } else{
            return view('website.index');
        }
    })->name('dashboard');
});
