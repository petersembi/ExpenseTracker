<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExpensesController;

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


// Show All Expenses
Route::get('/', [ExpensesController::class, 'index']);

// Create An Expense
Route::get('/create', [ExpensesController::class, 'create']);

// Store Listing data
Route::post('/expenses', [ExpensesController::class, 'store']);

// Show listing data for a particular date
Route::get('/expenses/show', [ExpensesController::class, 'showForDate']);


// edit Expense
Route::get('/expenses/{expense}/edit', [ExpensesController::class, 'edit']);

// update Expense
Route::put('/expenses/{expense}', [ExpensesController::class, 'update']);


// Delete Expense
Route::delete('/expenses/{expense}', [ExpensesController::class, 'destroy']);


///////////==========DEALING WITH USERS==============////

// Show registration form
Route::get('/register', [UserController::class, 'create']);

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::get('/logout', [UserController::class, 'logout'])->middleware('auth');

//Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

