<?php

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

use App\Http\Controllers\CachesController;
use App\Http\Controllers\EmailsController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::resources([
    'emails' => EmailsController::class,
]);


Route::get('/', array(WebController::class, 'index'))->name('index');
