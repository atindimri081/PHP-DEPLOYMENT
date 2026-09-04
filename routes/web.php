<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncidentController;

Route::get('/', [IncidentController::class, 'index']);
Route::post('/incidents', [IncidentController::class, 'store']);
