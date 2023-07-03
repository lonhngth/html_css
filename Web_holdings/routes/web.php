<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CLientController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\PartnerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('admin', function () {
    return view('admin.posts.create');
});

Route::prefix(('user'))->group(function () {
    Route::get(('/login_form'), [UserController::class, 'login_form'])
        ->name('user.login_form');
    Route::post(('/login'), [UserController::class, 'login'])
        ->name('user.login');
    Route::get(('/register'), [UserController::class, 'register'])
        ->name('user.register');
    Route::post(('/store'), [UserController::class, 'store'])
        ->name('user.store');
    Route::get(('/logout'), [UserController::class, 'logout'])
        ->name('user.logout');
});

Route::middleware('checkadmin')->prefix('admin')->group(function () {
    Route::prefix('post')->group(function () {
        Route::get('/', [PostController::class, 'index'])
            ->name('admin.post.index');
        Route::get('/create', [PostController::class, 'create'])
            ->name('admin.post.create');
        Route::post('/store', [PostController::class, 'store'])
            ->name('admin.post.store');
        Route::get('/edit/{id}', [PostController::class, 'edit'])
            ->name('admin.post.edit');
        Route::put('/update/{id}', [PostController::class, 'update'])
            ->name('admin.post.update');
        Route::get('/delete/{id}', [PostController::class, 'delete'])
            ->name('admin.post.delete');
    });
    Route::prefix('partner')->group(function () {
        Route::get('/', [PartnerController::class, 'index'])
            ->name('admin.partner.index');
        Route::get('/create', [PartnerController::class, 'create'])
            ->name('admin.partner.create');
        Route::post('/store', [PartnerController::class, 'store'])
            ->name('admin.partner.store');
        Route::get('/edit/{id}', [PartnerController::class, 'edit'])
            ->name('admin.partner.edit');
        Route::put('/update/{id}', [PartnerController::class, 'update'])
            ->name('admin.partner.update');
        Route::get('/delete/{id}', [PartnerController::class, 'delete'])
            ->name('admin.partner.delete');
    });
    Route::prefix('media')->group(function () {
        Route::get('/', [MediaController::class, 'index'])
            ->name('admin.media.index');
        Route::get('/create', [MediaController::class, 'create'])
            ->name('admin.media.create');
        Route::post('/store', [MediaController::class, 'store'])
            ->name('admin.media.store');
        Route::get('/edit/{id}', [MediaController::class, 'edit'])
            ->name('admin.media.edit');
        Route::put('/update/{id}', [MediaController::class, 'update'])
            ->name('admin.media.update');
        Route::get('/delete/{id}', [MediaController::class, 'delete'])
            ->name('admin.media.delete');
    });
});

Route::get('/', [CLientController::class, 'posts'])
    ->name('client.index');

Route::prefix('client')->group(function () {
    Route::get('/introduce', [CLientController::class, 'introduce'])
        ->name('client.introduce');

    Route::get('/media-news', [CLientController::class, 'media_news'])
        ->name('client.news');
    Route::get('/news-detail', [CLientController::class, 'news_detail'])
        ->name('client.news.detail');

    Route::get('/ecosystem', [CLientController::class, 'ecosystem'])
        ->name('client.ecosystem');
    Route::get('/ecosystem/technology', [CLientController::class, 'ecosystem_technology'])
        ->name('client.ecosystem.technology');
    Route::get('/ecosystem/education', [CLientController::class, 'ecosystem_education'])
        ->name('client.ecosystem.education');
    Route::get('/ecosystem/medical', [CLientController::class, 'ecosystem_medical'])
        ->name('client.ecosystem.medical');
    Route::get('/ecosystem/real_estate', [CLientController::class, 'ecosystem_real_estate'])
        ->name('client.ecosystem.real_estate');
    Route::get('/ecosystem/entertainment', [CLientController::class, 'ecosystem_entertainment'])
        ->name('client.ecosystem.entertainment');
    Route::get('/ecosystem/finance', [CLientController::class, 'ecosystem_finance'])
        ->name('client.ecosystem.finance');

    Route::get('/develop', [CLientController::class, 'develop'])
        ->name('client.develop');
    Route::get('/develop/action', [CLientController::class, 'develop_action'])
        ->name('client.develop.action');
    Route::get('/develop/commit', [CLientController::class, 'develop_commit'])
        ->name('client.develop.commit');
    Route::get('/develop/culture', [CLientController::class, 'develop_culture'])
        ->name('client.develop.culture');
    Route::get('/develop/environments', [CLientController::class, 'develop_environments'])
        ->name('client.develop.environments');
    Route::get('/develop/orientation', [CLientController::class, 'develop_orientation'])
        ->name('client.develop.orientation');
    Route::get('/develop/philosophy', [CLientController::class, 'develop_philosophy'])
        ->name('client.develop.philosophy');
});
