<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Hero_sectionController;
use App\Http\Controllers\step_process_sectionController;
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

Route::get('/',[HomeController::class,'index'])->name('home');


        
// Route::middleware(['auth'])->group(function () {

        

        Route::get('/dashboard', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');

        Route::get('/users', function () {
            return view('admin.users');
        })->name('admin.user');

        Route::get('/add-users', function () {
            return view('admin.add-user');
        })->name('admin.add-user');

        Route::get('/profile', function () {
            return view('admin.profile');
        })->name('admin.profile');

        Route::get('/table', function () {
            return view('admin.tables');
        })->name('admin.table');

Route::get('/role',[RoleController::class,'index'])->name('role.index');
Route::get('/create-role',[RoleController::class,'create'])->name('role.create');
Route::post('/store-role',[RoleController::class,'store'])->name('role.store');
Route::get('/edit-role/{id}',[RoleController::class,'edit'])->name('role.edit');
Route::post('/update-role/{id}',[RoleController::class,'update'])->name('role.update');
Route::get  ('/delete-role/{id}',[RoleController::class,'delete'])->name('role.delete');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Hero Section
Route::get('/hero_section/create',[Hero_sectionController::class,'create'])->name('hero_section.create');
Route::post('/hero_section/store',[Hero_sectionController::class,'store'])->name('hero_section.store');
Route::get('/hero_section',[Hero_sectionController::class,'index'])->name('hero_section.index');
Route::get('/hero_section/edit/{id}',[Hero_sectionController::class,'edit'])->name('hero_section.edit');
Route::put('/hero_section/update/{id}',[Hero_sectionController::class,'update'])->name('hero_section.update');
Route::get('/hero_section/delete/{id}',[Hero_sectionController::class,'delete'])->name('hero_section.delete');

// Step process section
Route::get('/step_process_section/create',[step_process_sectionController::class,'create'])->name('step_process_section.create');
Route::post('/step_process_section/store',[step_process_sectionController::class,'store'])->name('step_process_section.store');
Route::get('/step_process_section',[step_process_sectionController::class,'index'])->name('step_process_section.index');
Route::get('/step_process_section/edit/{id}',[step_process_sectionController::class,'edit'])->name('step_process_section.edit');
Route::put('/step_process_section/update/{id}',[step_process_sectionController::class,'update'])->name('step_process_section.update');
Route::get('/step_process_section/delete/{id}',[step_process_sectionController::class,'delete'])->name('step_process_section.delete');
// });