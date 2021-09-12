<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

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
Route::middleware('auth')->group(function(){


Route::get('/', function () {
    return view('admin.home ');
});
route::get('/admin_dashboard',function(){
    return view('admin.admin_dashboard');
})->name('admin.admin_dashboard');
Route::get('/teacher_dashboard',function(){
    return view('admin.teacher_dashboard');
})->name('admin.teacher_dashboard');
Route::get('/student.student_dashboard',function(){
    return view('admin.student_dashboard');
})->name('admin.student_dashboard');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
});

require __DIR__.'/auth.php';
