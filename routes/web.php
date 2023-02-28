<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SwaggerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/login', function () {

    if (Auth::check()) {
        return redirect('userPage');
    }

    return view('login');
})->name('login');

Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/register', fn() => view('register'));
Route::post('/register', [UserController::class, 'register']);


Route::redirect('/', 'login');
Route::group(['middleware' => 'auth'], function () {
    Route::patch('/user', [UserController::class, 'patch']);
    Route::get('/user', [UserController::class, 'get']);
    Route::delete('/user', [UserController::class, 'delete']);

    Route::get('/product', [ProductsController::class, 'get']);
    Route::post('/product', [ProductsController::class, 'create']);


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

    /**
     * @OA\Get(
     *     path="/",
     *     @OA\Response(
     *         response="200",
     *         description="returns swagger ui"
     *     )
     * )
     */
    Route::get('/', );
    /**
     * @OA\Get(
     *     path="/swagger",
     *     @OA\Response(
     *         response="200",
     *         description="returns swagger json"
     *     )
     * )
     */
    Route::get('/swagger', [SwaggerController::class, 'getSwaggerSchema']);
    /**
     * @OA\Get(
     *     path="/getCategory",
     *     @OA\Response(
     *         response="200",
     *         description="returns categoryObject"
     *     )
     * )
     */
});
