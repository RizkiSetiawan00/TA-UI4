<?php

use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\hrController;
use App\Http\Controllers\dashController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admincrudController;
use App\Http\Controllers\tambahbaruController;
 
Route::get('/', function () {
    return view('home11');
})->name('home');
 
Auth::routes();
   
//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
   
    Route::get('/staff/index', [HomeController::class, 'staffHome'])->name('staff.home');
});
   
//Admin Routes List
Route::middleware(['auth', 'user-access:hr'])->group(function () {
   
    Route::get('/hr/index', [HomeController::class, 'hrHome'])->name('hr.home');
});
   
//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   
    Route::get('/admin/index', [HomeController::class, 'adminHome'])->name('admin.home');
});
   
//Admin Routes List
Route::middleware(['auth', 'user-access:manager'])->group(function () {
   
    Route::get('/manager/index', [HomeController::class, 'managerHome'])->name('manager.home');
});




//Admin
Route::get('/admin/crudData',[admincrudController::class, "showPage"]);
Route::POST('/bankSave',[admincrudController::class, "bankSave"])->name('bankSave');

//Karyawan
//Route::get('/staff/index',[dashController::class, "dashboard"]);
Route::get('/staff/profile',[dashController::class, "profile"]);
Route::get('/staff/activity',[dashController::class, "activity"]);

//HR
Route::get('/hr/index',[hrController::class, "dashboard_hr"]);
Route::get('/hr/staffList',[hrController::class, "list_Staff"]);
Route::get('/hr/staff_moredetails',[hrController::class, "moredetails_Staff"]);
Route::get('/hr/addnew_staff',[hrController::class, "addnew_Staff"]);
Route::get('/hr/edit_staff',[hrController::class, "staff_edit"]);
Route::get('/hr/activity',[hrController::class, "aktivitas"]);

//addnew staff Stuff
Route::post('/tambahbaru', [tambahbaruController::class, 'tambahbaru']);

Route::get('departCreate','tambahbaruController@postCreate');
Route::post('departData','tambahbaruController@postData')->name('departData');