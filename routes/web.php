<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsoleController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\UserController;
use App\Models\Recipe;
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
Route::get('/console/logout', [ConsoleController::class, 'logout'])->middleware('auth');
Route::get('/console/login', [ConsoleController::class, 'loginForm'])->middleware('guest')->name('login');
Route::post('/console/login', [ConsoleController::class, 'login'])->middleware('guest');
Route::get('/console/dashboard', [ConsoleController::class, 'dashboard']);

Route::get('/user/register', [UserController::class, 'addform']);
Route::post('/user/add', [UserController::class, 'add'])->middleware('guest');

Route::get('/recipe/list', [RecipeController::class, 'list'])->middleware('auth');
Route::get('/recipe/add', [RecipeController::class, 'addForm'])->middleware('auth');
Route::post('/recipe/add', [RecipeController::class, 'add']);

Route::get('/recipe/yoga', [RecipeController::class, 'yoga']);

Route::get('/recipe/edit/{recipe:id}', [RecipeController::class, 'editForm'])->where('recipe', '[0-9]+')->middleware('auth');
Route::post('/recipe/edit/{recipe:id}', [RecipeController::class, 'edit'])->middleware('auth');

Route::get('/recipe/delete/{recipe:id}', [RecipeController::class, 'delete'])->where('recipe', '[0-9]+')->middleware('auth');

Route::get('/', function () {
    return view('console.dashboard');
});
