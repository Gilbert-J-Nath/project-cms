<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return
    view('welcome.landing_page');
});

// Route::get('/menu_landing', [LandingController::class, 'showNewsCard']);
// Route::post('/admin/update-background', [LandingController::class, 'updateLandingContent'])->name('admin.updateBackground');
    // view('admin.menu-landing');
// });

Route::get('/admin', [DashboardController::class, 'index'])->name ('dashboard.index');
// Route::post('/admin/update-background', [LandingController::class, 'updateLandingContent'])->name('admin.updateBackground');
