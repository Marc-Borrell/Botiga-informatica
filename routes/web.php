<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorPrincipal;
use App\Http\Controllers\ControladorUsuaris;

//Route::resource('cursos', ControladorPrincipal::class);
Route::resource('usuaris', ControladorUsuaris::class);

Route::get('/', function () {
    return view('inici');
});

/*Route::get('/info',function () {
return view('info');
});*/

Route::get('/dashboard-basic', function () {
return view('dashboard-basic');
})-> name('dashboard-basic');

Route::get('cursos/index_basic', [ControladorPrincipal::class, 'index_basic'])->name('cursos.index_basic');
Route::get('cursos/show_basic/{id}', [ControladorPrincipal::class, 'show_basic'])->name('cursos.show_basic');

Route::group(['middleware' => 'auth'], function(){
        Route::get('/dashboard', function () {
        return view('dashboard');
        })->name('dashboard');
        Route::resource('cursos', ControladorPrincipal::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
