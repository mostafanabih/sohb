<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
Route::get('/language/{locale}', 'LanguageController@changeLanguage')->name('language.change');

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/about', [HomeController::class, 'about'])->name('about');
    Route::get('/services', [HomeController::class, 'services'])->name('services');
    Route::get('/projects', [HomeController::class, 'projects'])->name('projects');
    Route::get('/project/{id}', [HomeController::class, 'showProject'])->name('show_project');
    Route::get('/galleries', [HomeController::class, 'galleries'])->name('galleries');
    Route::get('/contacts', [HomeController::class, 'contacts'])->name('contacts');
    Route::post('/contact-us', [HomeController::class, 'contact_us'])->name('contact_us');




	
});
