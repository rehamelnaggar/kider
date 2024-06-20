<?php

use App\Http\Controllers\ChildernController;
use App\Http\Controllers\Frontpages;
use App\Http\Controllers\DashBoard;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\KiderClassesControl;
use App\Http\Controllers\Children_ClassesController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::post('insertteacher', [Dashboard::class,'store'])->name('insertteacher');
Route::post('insertChild', [ChildernController::class,'store'])->name('insertChild');
Route::post('insertKiderClass', [KiderClassesControl::class,'store'])->name('insertKiderClass');
Route::post('insertChildren_classes', [Children_ClassesController::class, 'store'])->name('insertChildren_classes');

Route::post('insertContact', [ContactController::class, 'store'])->name('insertContact');
Route::post('insertContact', [ContactController::class, 'sendMail'])->name('insertContact');

Route::get('home2',[Frontpages::class,'home2'])->name('home2');
Route::get('about',[Frontpages::class,'about'])->name('about');
Route::get('classes',[Frontpages::class,'classes'])->name('classes');
Route::get('contact',[Frontpages::class,'contact'])->name('contact');
Route::get('facilities',[Frontpages::class,'facilities'])->name('facilities');
Route::get('team',[Frontpages::class,'team'])->name('team');
Route::get('call',[Frontpages::class,'call'])->name('call');
Route::get('appointment',[Frontpages::class,'appointment'])->name('appointment');
Route::get('testimonial',[Frontpages::class,'testimonial'])->name('testimonial');
Route::get('error',[Frontpages::class,'error'])->name('error');


Route::prefix('dashboard')->group(function () {
    Route::get('/index', [Dashboard::class, 'index'])->name('dashboard.index');
    Route::get('/addTeacher', [Dashboard::class, 'create'])->name('dashboard.addTeacher');
    Route::get('/teachers', [Dashboard::class, 'indexTeacher'])->name('dashboard.teachers');
    Route::get('/editTeacher/{id}', [Dashboard::class, 'edit'])->name('dashboard.editTeacher');
    Route::put('/updateTeacher/{id}', [Dashboard::class, 'update'])->name('dashboard.updateTeacher');
    Route::get('/showTeacher/{id}', [Dashboard::class, 'show'])->name('dashboard.showTeacher');
    Route::delete('/delTeacher',[Dashboard::class, 'destroy'])->name('dashboard.delTeacher');
    Route::get('/trashTeacher', [Dashboard::class, 'trash'])->name('dashboard.trashTeacher');
    Route::get('/restoreTeacher/{id}', [Dashboard::class, 'restore'])->name('dashboard.restoreTeacher');
    Route::delete('/forceDeleteTeacher', [Dashboard::class, 'forcedelete'])->name('dashboard.forceDeleteTeacher');


    Route::get('/addChild', [ChildernController::class, 'create'])->name('dashboard.addChild');
    Route::get('/childern', [ChildernController::class, 'index'])->name('dashboard.childern');
    Route::get('/showChild/{id}', [ChildernController::class, 'show'])->name('dashboard.showChild');
    Route::delete('/delChild',[ChildernController::class, 'destroy'])->name('dashboard.delChild');


    Route::get('/addKiderClass', [KiderClassesControl::class, 'create'])->name('dashboard.addKiderClass');
    Route::get('/KiderClasses', [KiderClassesControl::class, 'index'])->name('dashboard.KiderClasses');
    Route::get('/editKiderClass/{id}', [KiderClassesControl::class, 'edit'])->name('dashboard.editKiderClass');
    Route::put('/updateKiderClass/{id}', [KiderClassesControl::class, 'update'])->name('dashboard.updateKiderClass');
    Route::get('/showKiderClass/{id}', [KiderClassesControl::class, 'show'])->name('dashboard.showKiderClass');


    Route::get('/addChildToClass', [Children_ClassesController::class, 'create'])->name('dashboard.addChildToClass');






});
    //Route::get('/profile', [ProfileController::class, 'index'])->name('dashboard.profile');
    //Route::get('/settings', [SettingsController::class, 'index'])->name('dashboard.settings');

//Route::get('dashHome',[DashBoard::class,'dashHome'])->name('dashHome');

//Route::get('dashLogin',[DashBoard::class,'dashLogin'])->name('dashLogin');
//Route::post('dashLogin',[DashBoard::class,'receiveData'])->name('receiveData');

//Route::get('dashRegister',[DashBoard::class,'dashRegister'])->name('dashRegister');
//Route::post('dashRegister', [DashBoard::class, 'store'])->name('dashRegister.store');
Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
