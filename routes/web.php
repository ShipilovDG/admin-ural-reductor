<?php

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

Route::get('/contragentsPage', function () {
    return view('contragentsPage');
});
Route::get('/emailPage', function () {
    return view('emailPage');
});
Route::get('/eventsBoard', function () {
    return view('eventsBoard');
});
Route::get('/feedbackPage', function () {
    return view('feedbackPage');
});
Route::get('/financesPage', function () {
    return view('financesPage');
});
Route::get('/goodsPage', function () {
    return view('goodsPage');
});
Route::get('/orders', function () {
    return view('orders');
});
Route::get('/settingsPage', function () {
    return view('settingsPage');
});
Route::get('/taskPage', function () {
    return view('taskPage');
});
Route::get('/userPage', function () {
    return view('userPage');
});
Route::post('/login', );
Route::get('/usersPage', function () {
    return view('usersPage');
});
