<?php

use App\Models\Project;
use App\Models\Task;
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

Route::view('/', [App\Http\Controllers\HomeController::class, 'welcome']);

Auth::routes();


Route::middleware(['auth'])->group(function () {
    // Auth routes
});
