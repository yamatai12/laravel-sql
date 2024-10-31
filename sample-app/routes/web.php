<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SqlTrainingController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/sql-training', [SqlTrainingController::class, 'index']);
/** employees一覧ページ */
/** projects一覧ページ */
/** departments一覧ページ */

