<?php

use App\Http\Controllers\Address\AddressController;
use App\Http\Controllers\Author\AuthorController;
use App\Http\Controllers\Book\BookController;
use App\Http\Controllers\Client\ClientController;
use App\Http\Controllers\Color\ColorController;
use App\Http\Controllers\Employee\EmployeeController;
use App\Http\Controllers\Gender\GenderController;
use App\Http\Controllers\Owner\OwnerController;
use App\Http\Controllers\Role\RoleController;
use App\Http\Controllers\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('users', UserController::class);

Route::prefix('user')->group(function () {
    Route::resources([
        'clients' => ClientController::class,
        'employees' => EmployeeController::class,
        'owners' => OwnerController::class,
        'addresses' => AddressController::class,
    ]);

    Route::prefix('employee')->group(function () {
        Route::resource('roles', RoleController::class);
    });
});

Route::prefix('library')->group(function () {
    Route::resource('books', BookController::class);

    Route::prefix('book')->group(function () {
        Route::resources([
            'authors' => AuthorController::class,
            'genders' => GenderController::class,
            'colors' => ColorController::class,
        ]);
    });
});
