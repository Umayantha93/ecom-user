<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', function () {
    return view('welcome');
});


// Route::get("displayall", [EmployeeController::class, "index"]);
// Route::post("insert", [EmployeeController::class, "store"]);
// Route::get("displayone/{id}", [EmployeeController::class, "show"]);
// Route::put("update/{id}", [EmployeeController::class, "update"]);
Route::resource("employee", EmployeeController::class);
// Route::delete("delete/{id}", [EmployeeController::class, "destroy"]);
