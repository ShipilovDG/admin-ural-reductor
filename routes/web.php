<?php

use App\Http\Controllers\UserController;
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

Route::get('/login', fn() => view('login'))->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/register', fn() => view('register'));
Route::post('/register', [UserController::class, 'register']);

Route::get('/contragentsPage', fn() => view('contragentsPage'));
Route::get('/emailPage', fn() => view('emailPage'));
Route::get('/eventsBoard', fn() => view('eventsBoard'));
Route::get('/feedbackPage', fn() => view('feedbackPage'));
Route::get('/financesPage', fn() => view('financesPage'));
Route::get('/goodsPage', fn() => view('goodsPage'));
Route::get('/orders', fn() => view('orders'));
Route::get('/settingsPage', fn() => view('settingsPage'));
Route::get('/taskPage', fn() => view('taskPage'));
Route::get('/userPage', fn() => view('userPage'))->name('userPage');
Route::get('/usersPage', fn() => view('usersPage'));
