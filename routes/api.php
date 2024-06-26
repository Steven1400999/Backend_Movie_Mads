<?php


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DubbingController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\SeatController;
use App\Http\Controllers\SubtitleController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\UserSeatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


Route::post('login', [RegisterController::class, 'login']);
Route::post('register', [RegisterController::class, 'register']);


Route::middleware('auth:api')->group(function () {



//User Controller

Route::get('/user_index', [UserController::class, 'index']);
Route::post('/user_update', [UserController::class, 'update']);
Route::post('/user_destroy', [UserController::class, 'destroy']);





//Dubbing Controller
Route::get('/dubbing_index', [DubbingController::class, 'index']);
Route::post('/dubbing_store', [DubbingController::class, 'store']);
Route::post('/dubbing_show', [DubbingController::class, 'show']);
Route::post('/dubbing_edit', [DubbingController::class, 'edit']);
Route::post('/dubbing_update', [DubbingController::class, 'update']);
Route::post('/dubbing_destroy', [DubbingController::class, 'destroy']);


//Language Controller
Route::get('/language_index', [LanguageController::class, 'index']);
Route::post('/language_store', [LanguageController::class, 'store']);
Route::post('/language_show', [LanguageController::class, 'show']);
Route::post('/language_edit', [LanguageController::class, 'edit']);
Route::post('/language_update', [LanguageController::class, 'update']);
Route::post('/language_destroy', [LanguageController::class, 'destroy']);

//Category Controller
Route::get('/category_index', [CategoryController::class, 'index']);
Route::post('/category_store', [CategoryController::class, 'store']);
Route::post('/category_show', [CategoryController::class, 'show']);
Route::post('/category_edit', [CategoryController::class, 'edit']);
Route::post('/category_update', [CategoryController::class, 'update']);
Route::post('/category_destroy', [CategoryController::class, 'destroy']);


//Movie Controller
Route::get('/movie_index', [MovieController::class, 'index']);
Route::post('/movie_store', [MovieController::class, 'store']);
Route::post('/movie_show', [MovieController::class, 'show']);
Route::post('/movie_edit', [MovieController::class, 'edit']);
Route::post('/movie_update', [MovieController::class, 'update']);
Route::post('/movie_destroy', [MovieController::class, 'destroy']);


//Reservation Controller
Route::get('/reservation_index', [ReservationController::class, 'index']);
Route::post('/reservation_store', [ReservationController::class, 'store']);
Route::post('/reservation_show', [ReservationController::class, 'show']);
Route::post('/reservation_edit', [ReservationController::class, 'edit']);
Route::post('/reservation_update', [ReservationController::class, 'update']);
Route::post('/reservation_destroy', [ReservationController::class, 'destroy']);

//Schedule Controller
Route::get('/schedule_index', [ScheduleController::class, 'index']);
Route::post('/schedule_store', [ScheduleController::class, 'store']);
Route::post('/schedule_show', [ScheduleController::class, 'show']);
Route::post('/schedule_edit', [ScheduleController::class, 'edit']);
Route::post('/schedule_update', [ScheduleController::class, 'update']);
Route::post('/schedule_destroy', [ScheduleController::class, 'destroy']);

//Seat Controller
Route::get('/seat_index', [SeatController::class, 'index']);
Route::post('/seat_store', [SeatController::class, 'store']);
Route::post('/seat_show', [SeatController::class, 'show']);
Route::post('/seat_edit', [SeatController::class, 'edit']);
Route::post('/seat_update', [SeatController::class, 'update']);
Route::post('/seat_destroy', [SeatController::class, 'destroy']);

//Subtitle Controller
Route::get('/subtitle_index', [SubtitleController::class, 'index']);
Route::post('/subtitle_store', [SubtitleController::class, 'store']);
Route::post('/subtitle_show', [SubtitleController::class, 'show']);
Route::post('/subtitle_edit', [SubtitleController::class, 'edit']);
Route::post('/subtitle_update', [SubtitleController::class, 'update']);
Route::post('/subtitle_destroy', [SubtitleController::class, 'destroy']);

//UserSeat Controller
Route::get('/user_seat_index', [UserSeatController::class, 'index']);
Route::post('/user_seat_store', [UserSeatController::class, 'store']);
Route::post('/user_seat_show', [UserSeatController::class, 'show']);
Route::post('/user_seat_edit', [UserSeatController::class, 'edit']);
Route::post('/user_seat_update', [UserSeatController::class, 'update']);
Route::post('/user_seat_destroy', [UserSeatController::class, 'destroy']);



});
