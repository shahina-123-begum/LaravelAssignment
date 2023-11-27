<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get("/home",[PortfolioController::class,"web"]);



Route::get('/', function () {
    return view('welcome');
});
