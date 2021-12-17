<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PartsController;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\AuthHandler;
use App\Http\Middleware\ManagerHandler;
use App\Http\Middleware\SupplierHandler;
use App\Http\Middleware\DirectorHandler;


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

Route::get('/', [MainController::class, 'index']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/contact', [MainController::class, 'contact']);
Route::get('/login', [AuthController::class, 'viewLogin'])->middleware(AuthHandler::class);
Route::post('/login', [AuthController::class, 'login'])->middleware(AuthHandler::class);
Route::get('/register', [AuthController::class, 'viewRegister'])->middleware(AuthHandler::class);
Route::post('/register', [AuthController::class, 'register'])->middleware(AuthHandler::class);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/parts', [PartsController::class, 'parts'])->middleware(ManagerHandler::class);
Route::post('/parts', [PartsController::class, 'searchParts'])->middleware(ManagerHandler::class);
Route::get('/comparison', [PartsController::class, 'showComparison'])->middleware(ManagerHandler::class);
Route::get('/parts/addPartToComparison/{id}', [PartsController::class, 'addPartToComparison'])->middleware(ManagerHandler::class);
Route::get('/parts/addPartToCart/{id}', [PartsController::class, 'addPartToCartConfirmation'])->middleware(ManagerHandler::class);
Route::post('/parts/addPartToCart/{id}', [PartsController::class, 'addPartToCart'])->middleware(ManagerHandler::class);
Route::get('/orders', [PartsController::class, 'orders'])->middleware(ManagerHandler::class);
Route::get('/orders/edit/{id}', [PartsController::class, 'showOrderEditor'])->middleware(ManagerHandler::class);
Route::post('/orders/edit/{id}', [PartsController::class, 'editOrder'])->middleware(ManagerHandler::class);
Route::get('/orders/delete/{id}', [PartsController::class, 'deleteOrder'])->middleware(ManagerHandler::class);
Route::get('/orders/orderConfirm', [PartsController::class, 'confirmOrder'])->middleware(ManagerHandler::class);
Route::post('/orders/orderConfirm', [PartsController::class, 'addOrder'])->middleware(ManagerHandler::class);
Route::get('/orders/wipeCart', [PartsController::class, 'wipeCart'])->middleware(ManagerHandler::class);

Route::get('/sell', [PartsController::class, 'sell'])->middleware(SupplierHandler::class);
Route::post('/sell', [PartsController::class, 'addPart'])->middleware(SupplierHandler::class);
Route::get('/sell/delete/{id}', [PartsController::class, 'deletePart'])->middleware(SupplierHandler::class);

Route::get('/users', [PartsController::class, 'users'])->middleware(DirectorHandler::class);
Route::get('/users/{id}', [PartsController::class, 'showUserEditor'])->middleware(DirectorHandler::class);
Route::post('/users/{id}', [PartsController::class, 'editUser'])->middleware(DirectorHandler::class);
Route::get('/stats', [PartsController::class, 'stats'])->middleware(DirectorHandler::class);

Route::get('/noperms', [MainController::class, 'noperms']);
