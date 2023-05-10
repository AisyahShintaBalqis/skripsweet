<?php


use App\Http\Controllers\HasilController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\SimpanHistoryController;
use App\Http\Controllers\KopiController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DirekturController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('frontend.master');
});

// Route::get('/dashboard', function () {
//     return view('backend.master');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('dashboard', DashboardController::class)->middleware(['auth', 'verified']);

Route::middleware('auth', 'role:Admin, Direktur')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['middleware' => ['auth', 'role:Admin']], function () {
    Route::resource('kriteria', KriteriaController::class);

    Route::resource('kopi', KopiController::class);

    Route::resource('parameter', ParameterController::class);

    Route::resource('nilai', NilaiController::class);

    Route::resource('hasil', HasilController::class);
    Route::resource('print', PrintController::class);
    Route::resource('history', HistoryController::class);
    Route::resource('simpan_history', SimpanHistoryController::class);
});

Route::group(['middleware' => ['auth', 'role:Direktur']], function () {
    Route::resource('hasil', HasilController::class);
    Route::resource('print', PrintController::class);
    Route::resource('history', HistoryController::class);
    Route::resource('simpan_history', SimpanHistoryController::class);
});




require __DIR__ . '/auth.php';
