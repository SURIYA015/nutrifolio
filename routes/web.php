<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;
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

Route::domain(config('app.web_domain'))->group(function () {
    Route::get('/', function () {
        return view('frontend.index');
    })->name('frontend.index');
    Route::get('contact', [MessageController::class, 'storeContact'])
    ->name('contact.store');
});
