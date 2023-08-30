<?php

use App\Http\Controllers\addNewUserData;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\BioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SiteDataController;
use Illuminate\Support\Facades\Route;


// Front end Route
Route::get('/', [SiteDataController::class, 'getAllSiteData'])->name('home');
//Route::view('/tos', 'frontend.about')->name('tos');
Route::get('/privacy-policy', [SiteDataController::class, 'privacyPolicy'])->name('privacy.policy');


// User Route
Route::get('/user-bio-form', [BioController::class, 'returnUserBioForm'])->name('user.bio.form');
Route::get('/user-bio', [BioController::class, 'findUserBio'])->name('user.bio');
Route::get('/apply-here', [ApplicationController::class, 'returnPaymentForm'])->name('apply.here');
Route::post('/apply-here', [ApplicationController::class, 'savePaymentData'])->name('apply.here');
Route::get('/all-application', [ApplicationController::class, 'allApplicationData'])->name('application.all');
Route::get('/view-application/{id}', [ApplicationController::class, 'viewApplication'])->name('application.view');
Route::get('/delete-application/{id}', [ApplicationController::class, 'deleteApplication'])->name('application.delete');
Route::get('/view-application-image/{dir}/{name}', [ApplicationController::class, 'viewApplicationImage'])->name('application.image.view');
Route::get('/download-application-image/{dir}/{name}', [ApplicationController::class, 'downloadApplicationImage'])->name('application.image.download');


// Admin Route

Route::middleware('auth')->group(function (){
    // Route::get('/admin-login', [BioController::class, 'getAllBio'])->name('admin.login');
    Route::view('/new-bio', 'backend.admin.bio-form')->name('bio.new');
    Route::get('/all-bio', [BioController::class, 'getAllBio'])->name('bio.all');
    Route::get('/view-bio/{id}', [BioController::class, 'getSingleBio'])->name('bio.view');
    Route::post('/add-bio', [BioController::class, 'addNewBio'])->name('bio.add');
    Route::get('/delete-bio/{id}', [BioController::class, 'deleteBio'])->name('bio.delete');
    Route::get('/search-bio', [BioController::class, 'searchBio'])->name('bio.search');
    Route::get('/edit-bio/{id}', [BioController::class, 'editBio'])->name('bio.edit');
    Route::put('/update-bio', [BioController::class, 'updateBio'])->name('bio.update');

    Route::get('/site-data', [SiteDataController::class, 'editSiteData'])->name('site.data');
    Route::get('/update-site-data', [SiteDataController::class, 'teamDataForm'])->name('update.site.data');
    Route::post('/update-team-data', [SiteDataController::class, 'updateTeamData'])->name('team.data.update');

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
