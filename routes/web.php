<?php

use App\Http\Controllers\BadgeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\CultureController;
use App\Http\Controllers\DiscussionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PodcastController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkerController;
use App\Models\Badge;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard-home-view', [App\Http\Controllers\HomeController::class, 'dashboardHome'])->name('dashboard-home');
Route::get('view-analytics', [HomeController::class, 'viewAnalytics'])->name('view-analytics');

Route::get('/user-profile', [HomeController::class, 'userProfile'])->name('/user-profile');
Route::post('/update-user', [HomeController::class, 'updateUser'])->name('/update-user');

Route::get('/suspend-user/{id}/{report_id}', [UserController::class, 'suspandUser'])->name('/suspend-user');
Route::get('/remove-suspension/{id}', [UserController::class, 'removeSuspension'])->name('/remove-suspension');

Route::post('/delete-user-message', [UserController::class, 'deleteMessage'])->name('/delete-user-message');

Route::get('/create-content', [ContentController::class, 'create'])->name('contents.create-content');
Route::get('/view-content', [ContentController::class, 'index'])->name('contents.view-content');

// Route::post('/create-movies', [MovieController::class, 'store'])->name('movies.store-movies');
// Route::get('/delete-movie/{id}', [MovieController::class, 'destroy'])->name('movies.delete-movie');
// Route::get('/edit-movie/{id}', [MovieController::class, 'edit'])->name('movies.edit-movie');
// Route::post('/edit-movie/{id}', [MovieController::class, 'update'])->name('movies.update-movie');


Route::get('/view-movies', [MovieController::class, 'index'])->name('movies.view-movies');
Route::get('/create-movies', [MovieController::class, 'create'])->name('movies.create-movies');
Route::post('/create-movies', [MovieController::class, 'store'])->name('movies.store-movies');
Route::get('/delete-movie/{id}', [MovieController::class, 'destroy'])->name('movies.delete-movie');
Route::get('/edit-movie/{id}', [MovieController::class, 'edit'])->name('movies.edit-movie');
Route::post('/edit-movie/{id}', [MovieController::class, 'update'])->name('movies.update-movie');


Route::get('/view-series', [SeriesController::class, 'index'])->name('series.view-series');
Route::get('/create-series', [SeriesController::class, 'create'])->name('series.create-series');
Route::post('/create-series', [SeriesController::class, 'store'])->name('series.store-series');
Route::get('/delete-series/{id}', [SeriesController::class, 'destroy'])->name('series.delete-series');
Route::get('/edit-series/{id}', [SeriesController::class, 'edit'])->name('series.edit-series');
Route::post('/edit-series/{id}', [SeriesController::class, 'update'])->name('series.update-series');


Route::get('/view-podcasts', [PodcastController::class, 'index'])->name('podcasts.view-podcasts');
Route::get('/create-podcasts', [PodcastController::class, 'create'])->name('podcasts.create-podcasts');
Route::post('/create-podcasts', [PodcastController::class, 'store'])->name('podcasts.store-podcasts');
Route::get('/delete-podcasts/{id}', [PodcastController::class, 'destroy'])->name('podcasts.delete-podcasts');
Route::get('/edit-podcasts/{id}', [PodcastController::class, 'edit'])->name('podcasts.edit-podcasts');
Route::post('/edit-podcasts/{id}', [PodcastController::class, 'update'])->name('podcasts.update-podcasts');



Route::get('/view-workers', [WorkerController::class, 'index'])->name('workers.view-workers');
Route::get('/create-workers', [WorkerController::class, 'create'])->name('workers.create-workers');
Route::post('/create-workers', [WorkerController::class, 'store'])->name('workers.store-workers');
Route::get('/delete-worker/{id}', [WorkerController::class, 'destroy'])->name('workers.delete-worker');
Route::get('/edit-worker/{id}', [WorkerController::class, 'edit'])->name('workers.edit-worker');
Route::post('/edit-worker/{id}', [WorkerController::class, 'update'])->name('worker.update-worker');



Route::get('/view-professions', [ProfessionController::class, 'index'])->name('professions.view-professions');
Route::get('/create-professions', [ProfessionController::class, 'create'])->name('professions.create-professions');
Route::post('/create-professions', [ProfessionController::class, 'store'])->name('professions.store-professions');
Route::get('/delete-profession/{id}', [ProfessionController::class, 'destroy'])->name('professions.delete-profession');
Route::get('/edit-profession/{id}', [ProfessionController::class, 'edit'])->name('professions.edit-profession');
Route::post('/edit-profession/{id}', [ProfessionController::class, 'update'])->name('professions.update-profession');


Route::get('/view-categories', [CategoryController::class, 'index'])->name('categories.view-categories');
Route::get('/create-categories', [CategoryController::class, 'create'])->name('categories.create-categories');
Route::post('/create-categories', [CategoryController::class, 'store'])->name('categories.store-categories');
Route::get('/delete-category/{id}', [CategoryController::class, 'destroy'])->name('categories.delete-category');
Route::get('/edit-category/{id}', [CategoryController::class, 'edit'])->name('categories.edit-category');
Route::post('/edit-category/{id}', [CategoryController::class, 'update'])->name('categories.update-category');


Route::get('/view-cultures', [CultureController::class, 'index'])->name('cultures.view-cultures');
Route::get('/create-cultures', [CultureController::class, 'create'])->name('cultures.create-cultures');
Route::post('/create-cultures', [CultureController::class, 'store'])->name('cultures.store-cultures');
Route::get('/delete-culture/{id}', [CultureController::class, 'destroy'])->name('cultures.delete-culture');
Route::get('/edit-culture/{id}', [CultureController::class, 'edit'])->name('cultures.edit-culture');
Route::post('/edit-culture/{id}', [CultureController::class, 'update'])->name('cultures.update-culture');



Route::get('/view-interests', [InterestController::class, 'index'])->name('interests.view-interests');
Route::get('/create-interests', [InterestController::class, 'create'])->name('interests.create-interests');
Route::post('/create-interests', [InterestController::class, 'store'])->name('interests.store-interests');
Route::get('/delete-interest/{id}', [InterestController::class, 'destroy'])->name('interests.delete-interest');
Route::get('/edit-interest/{id}', [InterestController::class, 'edit'])->name('interests.edit-interest');
Route::post('/edit-interest/{id}', [InterestController::class, 'update'])->name('interests.update-interest');


Route::get('/view-users', [UserController::class, 'index'])->name('users.view-users');
Route::get('/view-artist-users', [UserController::class, 'viewArtistUsers'])->name('users.view-artist-users');
Route::get('/view-regular-users', [UserController::class, 'viewRegularUsers'])->name('users.view-regular-users');
Route::post('/test-user', [UserController::class, 'create'])->name('users.update-user');
Route::post('/edit-users', [UserController::class, 'update'])->name('users.update-users');
Route::get('/delete-users/{id}', [UserController::class, 'destroy'])->name('users.delete-user');
Route::post('/award-points}', [UserController::class, 'awardPoints'])->name('award-points');




Route::post('/create-discussion', [DiscussionController::class, 'store'])->name('store-discussion');
Route::post('/show-discussion', [DiscussionController::class, 'show'])->name('show-discussion');
Route::get('/like-discussion/{id}', [DiscussionController::class, 'discussionLike'])->name('like-discussion');
Route::get('/dislike-discussion/{id}', [DiscussionController::class, 'discussionDislike'])->name('dislike-discussion');
Route::get('/remove-reaction-discussion/{id}', [DiscussionController::class, 'removeReaction'])->name('remove-reaction-discussion');


Route::post('/create-comment', [CommentController::class, 'store'])->name('store-comment');
Route::post('/delete-comment/{id}', [CommentController::class, 'destroy'])->name('delete-comment');
Route::post('/report-comment', [CommentController::class, 'reportComment'])->name('report-comment');



Route::post('/get-badges', [BadgeController::class, 'getAllBadges'])->name('get-badges');
Route::post('/add-badge', [BadgeController::class, 'addBadge'])->name('add-badge');
Route::delete('/delete-badge/{id}', [BadgeController::class, 'deleteBadge'])->name('remove-badge');


Route::get('/page-settings', [PageController::class, 'index'])->name('page-settings');
Route::post('/page-settings-update', [PageController::class, 'update'])->name('update-site-settings');


Route::get('/test', function () {
    return view('test');
});
