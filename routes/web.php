<?php

use App\Http\Controllers\addNewUserData;
use App\Http\Controllers\BioController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Front end Route
Route::view('/', 'frontend.app')->name('home');
Route::view('/tos', 'frontend.about')->name('tos');
Route::view('/p-policy', 'frontend.about')->name('p.policy');


// User Route
Route::view('/user-bio-form', 'backend.user.search-bio')->name('user.bio.form');
Route::get('/user-bio', [BioController::class, 'findUserBio'])->name('user.bio');


// Admin Route

Route::middleware('auth')->group(function (){
    // Route::get('/admin-login', [BioController::class, 'getAllBio'])->name('admin.login');
    Route::view('/new-bio', 'backend.admin.new-form')->name('bio.new');
    Route::get('/all-bio', [BioController::class, 'getAllBio'])->name('bio.all');
    Route::get('/view-bio/{id}', [BioController::class, 'getSingleBio'])->name('bio.view');
    Route::post('/add-bio', [BioController::class, 'addNewBio'])->name('bio.add');
    Route::get('/delete-bio/{id}', [BioController::class, 'deleteBio'])->name('bio.delete');
    Route::get('/search-bio', [BioController::class, 'searchBio'])->name('bio.search');
    Route::get('/edit-bio/{id}', [BioController::class, 'editBio'])->name('bio.edit');
    Route::put('/update-bio', [BioController::class, 'updateBio'])->name('bio.update');
    
});


// Route::get('/w', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';