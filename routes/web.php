<?php

use Illuminate\Support\Facades\Route;
 
use App\Http\Controllers\hrController;
use App\Http\Controllers\dashController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\managerController;
use App\Http\Controllers\admincrudController;
use App\Http\Controllers\tambahbaruController;
 
    /*
Route::get('/', function () {
    if (auth()->check()) {
        return view('homepage-feed');
    } 
    else {
        return view('/auth/login');
    }
    return view('/auth/login');
})->name('home');
    */
Route::get('/', [HomeController::class, 'toTheHome'])->name('home');
 
Auth::routes();
   
//Normal Users Routes List
Route::middleware(['auth', 'user-access:user'])->group(function () {
    //Route::get('/staff/profile', [dashController::class, 'profilenya'])->name('staff.profile');
    Route::get('/staff/profile', [dashController::class, 'profilenya'])->name('staff.profile');
    Route::get('/staff/dashboard', [HomeController::class, 'staffHome'])->name('staff.home');
    Route::get('/staff/project', [dashController::class, 'showProject'])->name('staff.project');
});
   
//HR Routes List
Route::middleware(['auth', 'user-access:hr'])->group(function () {
   
    Route::get('/hr/dashboard', [HomeController::class, 'hrHome'])->name('hr.home');
    Route::get('/hr/staffList',[hrController::class, "list_Staff"])->name('hr.stafflists');
    Route::get('/hr/staff_moredetails/{id}',[hrController::class, "moredetails_Staff"]);
    Route::get('/hr/edit_staff/{id}',[tambahbaruController::class, "staffeditnya"])->name('staff.Edit');
    Route::get('/hr/activity',[hrController::class, "aktivitas"]);
    Route::get('/hr/addnew_staff',[hrController::class, "addnew_Staff"]);
    
    //Staff
    Route::controller(tambahbaruController::class)->prefix('hr')->group(function () {
        Route::post('/hr/tambahbaru', 'tambahbaru')->name('staff.save');
        Route::delete('/hr/delete/{id}','staffHapus')->name('staff.Hapus');
        Route::PUT('/hr/update_staff/{id}','staffupdatenya')->name('staff.Update');
    });
});
   
//Admin Routes List
Route::middleware(['auth', 'user-access:admin'])->group(function () {
   
    Route::get('/admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/crudData',[admincrudController::class, "showPage"])->name('admin.crudData');

    
    //Bank
    Route::controller(admincrudController::class)->prefix('banks')->group(function () {
        Route::POST('/bankSave', "bankSave")->name('bank.save');
        Route::delete('/bankDelete/{id}','bankHapus')->name('bank.Hapus');
        Route::PUT('/bankEdit/{id}','bankEditnya')->name('bank.Edit');
    });

    //title1
    Route::controller(admincrudController::class)->prefix('title1s')->group(function () {
        Route::POST('/title1Save', "title1Save")->name('title1.save');
        Route::delete('/title1Delete/{id}','title1Hapus')->name('title1.Hapus');
        Route::PUT('/title1Edit/{id}','title1Editnya')->name('title1.Edit');
    });

    //brand
    Route::controller(admincrudController::class)->prefix('brands')->group(function () {
        Route::POST('/brandSave', "brandSave")->name('brand.save');
        Route::delete('/brandDelete/{id}','brandHapus')->name('brand.Hapus');
        Route::PUT('/brandEdit/{id}','brandEditnya')->name('brand.Edit');
    });

    //departemen
    Route::controller(admincrudController::class)->prefix('departemens')->group(function () {
        Route::POST('/departemenSave', "departemenSave")->name('departemen.save');
        Route::delete('/departemenDelete/{id}','departemenHapus')->name('departemen.Hapus');
        Route::PUT('/departemenEdit/{id}','departemenEditnya')->name('departemen.Edit');
    });

    //lokasinya
    Route::controller(admincrudController::class)->prefix('lokasinyas')->group(function () {
        Route::POST('/lokasinyaSave', "lokasinyaSave")->name('lokasinya.save');
        Route::delete('/lokasinyaDelete/{id}','lokasinyaHapus')->name('lokasinya.Hapus');
        Route::PUT('/lokasinyaEdit/{id}','lokasinyaEditnya')->name('lokasinya.Edit');
    });

    //profilhr & admin
    Route::controller(admincrudController::class)->prefix('user')->group(function () {
        Route::PUT('/profilhrSave/{id}', "profilhrSave")->name('profilhr.save');
        Route::delete('/profilhrDelete/{id}','profilhrHapus')->name('profilhr.Hapus');
        Route::PUT('/profilhrEdit/{id}','profilhrEditnya')->name('profilhr.Edit');
        
        Route::POST('/profiladminSave', "profiladminSave")->name('profiladmin.save');
        Route::delete('/profiladminDelete/{id}','profiladminHapus')->name('profiladmin.Hapus');
        Route::PUT('/profiladminEdit/{id}','profiladminEditnya')->name('profiladmin.Edit');
    });
});
   
//Manager Routes List
Route::middleware(['auth', 'user-access:manager'])->prefix('manager')->group(function () {
   
    Route::get('/dashboard', [HomeController::class, 'managerHome'])->name('manager.home');
    Route::get('/project', [managerController::class, 'showProject'])->name('manager.project');
    Route::get('/profile', [managerController::class, 'profileManager'])->name('manager.profile');
        
    Route::controller(managerController::class)->group(function () {
        Route::POST('/project/save', 'saveProject')->name('manager.saveProject');
        Route::delete('/project/delete/{id}','deleteProject')->name('manager.deleteProject');
        Route::PUT('/project/edit/{id}','editProject')->name('manager.editProject');
    });
});




//Admin
//Route::get('/admin/crudData',[admincrudController::class, "showPage"])->name('adminCrud');


/*
//Bank
Route::POST('/bankSave',[admincrudController::class, "bankSave"])->name('bankSave');
Route::delete('/bankDelete/{id}',[admincrudController::class,'bankHapus']);
Route::PUT('/bankEdit/{id}',[admincrudController::class,'bankEditnya']);

//title1
Route::POST('/title1Save',[admincrudController::class, "title1Save"])->name('title1Save');
Route::delete('/title1Delete/{id}',[admincrudController::class,'title1Hapus']);
Route::PUT('/title1Edit/{id}',[admincrudController::class,'title1Editnya']);

//brand
Route::POST('/brandSave',[admincrudController::class, "brandSave"])->name('brandSave');
Route::delete('/brandDelete/{id}',[admincrudController::class,'brandHapus']);
Route::PUT('/brandEdit/{id}',[admincrudController::class,'brandEditnya']);
*/

//Karyawan
//Route::get('/staff/index',[dashController::class, "dashboard"]);
//Route::get('/staff/profile',[dashController::class, "profile"]);

//HR
//Route::get('/hr/index',[hrController::class, "dashboard_hr"]);
//Route::get('/hr/staffList',[hrController::class, "list_Staff"]);
//Route::get('/hr/staff_moredetails',[hrController::class, "moredetails_Staff"]);
//Route::get('/hr/addnew_staff',[hrController::class, "addnew_Staff"]);
///Route::get('/hr/edit_staff',[hrController::class, "staff_edit"]);
//Route::get('/hr/activity',[hrController::class, "aktivitas"]);

//addnew staff Stuff
//Route::post('/tambahbaru', [tambahbaruController::class, 'tambahbaru']);