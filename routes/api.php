<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CassetsesController;
use App\Http\Controllers\ReceiptInvoicesController;
use App\Http\Controllers\ReceiptInvoicesTablesController;
use App\Http\Controllers\SalesOfCassettesController;
use App\Http\Controllers\SalesOfCassettesTablesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::prefix('Cassetses')->group(function(){
    Route::get('/',[CassetsesController::Class,'index']);
    Route::get('/{id}',[CassetsesController::Class,'show']);
    Route::post('/',[CassetsesController::Class,'store']);
    Route::delete('/{id}',[CassetsesController::Class,'destroy']);
    Route::put('/',[CassetsesController::Class,'update']);
});
Route::prefix('ReceiptInvoices')->group(function(){
    Route::get('/',[ReceiptInvoicesController::Class,'index']);
    Route::get('/{id}',[ReceiptInvoicesController::Class,'show']);
    Route::post('/',[ReceiptInvoicesController::Class,'store']);
    Route::delete('/{id}',[ReceiptInvoicesController::Class,'destroy']);
    Route::put('/',[ReceiptInvoicesController::Class,'update']);
});
Route::prefix('ReceiptInvoicesTables')->group(function(){
    Route::get('/',[ReceiptInvoicesTablesController::Class,'index']);
    Route::get('/{id}',[ReceiptInvoicesTablesController::Class,'show']);
    Route::post('/',[ReceiptInvoicesTablesController::Class,'store']);
    Route::delete('/{id}',[ReceiptInvoicesTablesController::Class,'destroy']);
    Route::put('/',[ReceiptInvoicesTablesController::Class,'update']);
});
Route::prefix('SalesOfCassettes')->group(function(){
    Route::get('/',[SalesOfCassettesController::Class,'index']);
    Route::get('/{id}',[SalesOfCassettesController::Class,'show']);
    Route::post('/',[SalesOfCassettesController::Class,'store']);
    Route::delete('/{id}',[SalesOfCassettesController::Class,'destroy']);
    Route::put('/',[SalesOfCassettesController::Class,'update']);
});
Route::prefix('SalesOfCassettesTables')->group(function(){
    Route::get('/',[SalesOfCassettesTablesController::Class,'index']);
    Route::get('/{id}',[SalesOfCassettesTablesController::Class,'show']);
    Route::post('/',[SalesOfCassettesTablesController::Class,'store']);
    Route::delete('/{id}',[SalesOfCassettesTablesController::Class,'destroy']);
    Route::put('/',[SalesOfCassettesTablesController::Class,'update']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
