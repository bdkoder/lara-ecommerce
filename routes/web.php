<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Auth;



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
// Route::get('/', [MainController::class, 'main']);

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [WelcomeController::class, 'index']);
Route::get('/category', [WelcomeController::class, 'category']);
Route::get('/contact', [WelcomeController::class, 'contact']);
Route::get('/product-details', [WelcomeController::class, 'productDetails']);

Auth::routes();
Route::get('/dashboard', [HomeController::class, 'index'])->name('home');

// start category info
Route::get('/category/add', [CategoryController::class, 'createCategory']);
// Route::get('/category/save', [CategoryController::class, 'storeCategory']); // error Method Not allow
Route::post('/category/save', [CategoryController::class, 'storeCategory']);
Route::get('/category/manage', [CategoryController::class, 'manageCategory']); // error Method Not allow

// end category info
