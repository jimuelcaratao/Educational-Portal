<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\User\AcademicAchieverController;
use App\Http\Controllers\User\CareerController;
use App\Http\Controllers\User\HistoryController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\OrganizationController;
use App\Http\Controllers\User\ProfessorsController;
use App\Http\Controllers\User\ThesisController;
use App\Http\Controllers\User\TutorialController;
use App\Http\Controllers\User\WelcomeController;
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
// Route::get('/', function () {
//     return view('pages.users.welcome');
// });
// Route::get('/dashboard', function () {
//     return view('pages.admin.dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/about', function () {
    return view('pages.users.about');
})->name('about');

Route::get('/contact-us', function () {
    return view('pages.users.about');
})->name('contact-us');

Route::get('/help', function () {
    return view('pages.users.help');
})->name('help');

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/academic-achievers', [AcademicAchieverController::class, 'index'])->name('academic-achievers');
Route::get('/careers', [CareerController::class, 'index'])->name('careers');
Route::get('/history', [HistoryController::class, 'index'])->name('history');
Route::get('/organizations', [OrganizationController::class, 'index'])->name('organizations');
Route::get('/professors', [ProfessorsController::class, 'index'])->name('professors');
Route::get('/thesis', [ThesisController::class, 'index'])->name('thesis');
Route::get('/tutorials', [TutorialController::class, 'index'])->name('tutorials');


// Admin Users
Route::middleware(['auth',  'is_admin'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


require __DIR__ . '/auth.php';
