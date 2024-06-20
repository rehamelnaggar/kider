<?php
	
	use Illuminate\Support\Facades\Route;
	use App\Http\Controllers\DashBoard;

//     Route::prefix('dashboard')->group(function () {
//         Route::get('/index', [Dashboard::class, 'index'])->name('dashboard.index');
//         Route::get('/addTeacher', [Dashboard::class, 'create'])->name('dashboard.addTeacher');
//         Route::get('/teachers', [Dashboard::class, 'indexTeacher'])->name('dashboard.teachers');
//         Route::get('/editTeacher/{id}', [Dashboard::class, 'edit'])->name('dashboard.editTeacher');
//         Route::put('/updateTeacher/{id}', [Dashboard::class, 'update'])->name('dashboard.updateTeacher');
//         Route::get('/showTeacher/{id}', [Dashboard::class, 'show'])->name('dashboard.showTeacher');
//         Route::delete('/delTeacher',[Dashboard::class, 'destroy'])->name('dashboard.delTeacher');
//         Route::get('/trashTeacher', [Dashboard::class, 'trash'])->name('dashboard.trashTeacher');
//         Route::get('/restoreTeacher/{id}', [Dashboard::class, 'restore'])->name('dashboard.restoreTeacher');
//         Route::delete('/forceDeleteTeacher', [Dashboard::class, 'forcedelete'])->name('dashboard.forceDeleteTeacher');
//     }
// );

    //Route::post('insertteacher', [Dashboard::class,'store'])->name('insertteacher');