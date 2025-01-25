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
use App\Http\Controllers\MemberProfileController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\SocialController;

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/about-us', [FrontendController::class, 'about'])->name('about_us');
Route::get('/committee-member', [FrontendController::class, 'committee'])->name('committee_member');
Route::get('/event_all', [FrontendController::class, 'event'])->name('event_all');
Route::get('/event_single/{slug}', [FrontendController::class, 'event_single'])->name('event_single');
Route::get('/news_all', [FrontendController::class, 'news_all'])->name('news_all');
Route::get('/news_single/{slug}', [FrontendController::class, 'news_single'])->name('news_single');
Route::get('/notice_all', [FrontendController::class, 'notice_all'])->name('notice_all');
Route::get('/notice_single/{slug}', [FrontendController::class, 'notice_single'])->name('notice_single');
Route::get('/stories_all', [FrontendController::class, 'stories_all'])->name('stories_all');
Route::get('/stories_by_batch/{name}', [FrontendController::class, 'stories_by_batch'])->name('stories_by_batch');
Route::get('/stories_single/{slug}', [FrontendController::class, 'stories_single'])->name('stories_single');

Route::get('/member-registration', [FrontendController::class, 'member_registration'])->name('member_registration');
Route::post('/member-registration', [FrontendController::class, 'member_registration_store'])->name('member_registration_store');


Route::get('/dashboard',[HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware(['auth','admin'])->group(function () {


    //member  portion
    Route::get('/member-index',[HomeController::class, 'member_index'])->name('member.index');
    Route::get('/member-show/{id}',[HomeController::class, 'member_show'])->name('member.show');


    Route::get('/pending-member-index',[HomeController::class, 'pending_member_index'])->name('pending.member.index');
    Route::get('/member-active/{id}',[HomeController::class, 'member_approve'])->name('member.approve');
    Route::get('/member-deactive/{id}',[HomeController::class, 'member_disapprove'])->name('member.disapproved');
    Route::get('/member-index',[HomeController::class, 'member_index'])->name('member.index');
    Route::delete('/member-delete/{id}',[HomeController::class, 'member_delete'])->name('member.delete');
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
        'stories' => StoryController::class,
        'newsletter' => SubscriptionController::class,
        'social' => SocialController::class,
    ]);

});




Route::middleware(['auth','member'])->group(function () {
    Route::get('/member-profile', [MemberProfileController::class, 'member_profile'])->name('profile.index');
    Route::post('/member-profile-update', [MemberProfileController::class, 'member_profile_update'])->name('member.profile.update');
    Route::post('/member-password-update', [MemberProfileController::class, 'member_password_update'])->name('member.password.update');

    //member  portion




    Route::resources([

        'stories' => StoryController::class,
        'subscription' => SubscriptionController::class,
    ]);

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
