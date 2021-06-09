<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

// Route::get("displayall", [EmployeeController::class, "index"]);
// Route::post("insert", [EmployeeController::class, "store"]);
// Route::get("displayone/{id}", [EmployeeController::class, "show"]);
// Route::put("update/{id}", [EmployeeController::class, "update"]);

// Route::delete("delete/{id}", [EmployeeController::class, "destroy"]);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
