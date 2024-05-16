<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

// Visualizzazione dell'elenco delle attività
Route::get('/', [TaskController::class, 'index'])->name('index');

// Creazione di una nuova attività (Form)
Route::get('/create', [TaskController::class, 'create'])->name('create');

// Visualizzazione di una singola attività
Route::get('/{id}', [TaskController::class, 'singleTask'])->name('singleTask');

// Modifica di un'attività esistente (Form)
Route::get('/{id}/edit', [TaskController::class, 'edit'])->name('edit');

