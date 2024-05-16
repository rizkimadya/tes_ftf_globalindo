<?php

use App\Http\Controllers\MemberController;
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



Route::get('/', [MemberController::class, 'index'])->name('member.index');
Route::post('/', [MemberController::class, 'store'])->name('member.store');

Route::get('/member', [MemberController::class, 'indexCetak']);
