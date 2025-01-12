<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\CommitteeController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\FrontendController;

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about_us');
Route::get('/committee-member', [FrontendController::class, 'committee'])->name('committee_member');
Route::get('/event_all', [FrontendController::class, 'event'])->name('event_all');
Route::get('/event_single/slug', [FrontendController::class, 'event_single'])->name('event_single');

Route::get('/dashboard',[HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::resources([
        'logo' => LogoController::class,
        'slider' => SliderController::class,
        'about' => AboutController::class,
        'event' => EventController::class,
        'committee' => CommitteeController::class,
        'notice' => NoticeController::class,
        'general' => GeneralController::class,
        'batch' => BatchController::class,
        'news' => NewsController::class,
    ]);

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
