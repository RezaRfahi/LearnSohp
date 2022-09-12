<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\Admin\ArticleController as AdminArticleController;
use App\Http\Controllers\web\Admin\CourseController as AdminCourseController;
use App\Http\Controllers\web\Admin\EpisodeController as AdminEpisodeController;
use App\Http\Controllers\web\Admin\UserController as AdminUserController;
use App\Http\Controllers\web\Admin\Dashboard;
use Illuminate\Support\Facades\Http;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('admin')->group(function (){
        Route::get('/dashboard', [Dashboard::class, 'show'])->name('admin.dashboard');
        Route::prefix('users')->controller(AdminUserController::class)->group(function ()
        {
            Route::get('manage', 'index')->name('admin.users');
        }
        );
        Route::resources([
//            'user' => AdminUserController::class,
            'article' => AdminArticleController::class,
            'Course' => AdminCourseController::class,
            'Episode' => AdminEpisodeController::class
        ]);
    });

});
