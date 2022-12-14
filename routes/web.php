<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ShuffleController;
use App\Http\Controllers\AbsentController;
use Illuminate\Support\Facades\Route;

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


Route::get('/ikan', [Controller::class, 'dashboard'])->name('dashboard');
Route::get('/', [ShuffleController::class, 'index'])->name('shuffle_index');
Route::get('/participant', [ParticipantController::class, 'index'])->name('participant_index');
Route::post('/participant/store', [ParticipantController::class, 'store'])->name('participant.store');
Route::post('/getparticipant', [ParticipantController::class, 'getparticipant'])->name('getparticipant');
Route::post('/nameparticipant', [ParticipantController::class, 'nameparticipant'])->name('nameparticipant');
Route::post('/upload_participants', [ParticipantController::class, 'uploadParticipants'])->name('upload_participants');
Route::get('/absent/{number}', [AbsentController::class, 'store'])->name('absent_store');
Route::get('/shuffle', [ShuffleController::class, 'index'])->name('shuffle_index');
Route::post('/doorprize', [ShuffleController::class, 'store'])->name('doorprize.store');

// modal
Route::get('/alreadywin/{id}', [ShuffleController::class, 'alreadywin'])->name('alreadywin');
Route::get('/participantbyid/{id}', [ShuffleController::class, 'participantbyid'])->name('participantbyid');
Route::delete('/cancel/{id}', [ShuffleController::class, 'cancel'])->name('cancel');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
