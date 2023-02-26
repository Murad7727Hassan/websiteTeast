<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TeamController;
Route::group(['prefix'=>'auth','namespace'=>'Auth'],function (){
    Route::post('login',  [AuthController::class, 'login'])->name('login');
    Route::post('logout',  [AuthController::class, 'logout'])->name('logout');
    Route::post('refresh',  [AuthController::class, 'refresh'])->name('refresh');
    Route::get('me', [AuthController::class, 'me'])->name('me');
});

// Route::middleware('jwt.auth')->group(function () {
    Route::resource('teams', TeamController::class);
    // Route::get('teams', [TeamController::class, 'index'])->name('all-team');
    // Route::post('teams/add', [TeamController::class, 'create'])->name('add-team');
    // Route::get('teams/show/{idTeam}', [TeamController::class, 'show'])->name('show-team');
// });