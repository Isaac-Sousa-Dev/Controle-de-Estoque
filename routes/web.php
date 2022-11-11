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

/*Route::get('/', function () {
    return view('welcome');
});*/
use App\Http\Controllers\MonitorController;
use App\Http\Controllers\ImpressoraController;
use App\Http\Controllers\NotebookController;
use App\Http\Controllers\TonerController;
use App\Http\Controllers\ComputadorController;
use App\Http\Controllers\LoginController;

//Home
Route::get('/', function () {
    return view('inicial');
});
Route::get('/home', function () {
    return view('inicial');
});

// Route Equipamentos
Route::get('/equipamentos', function () {
    return view('equipamentos');
})->name('app.equipamentos');

//Route Cadastro
Route::get('/register', function(){
    return view('site.cadastrar');
})->name('app.register');


// Route Impressora
Route::get('/impressora/index', [ImpressoraController::class, 'index']);
Route::get('/impressora/show{id}', [ImpressoraController::class, 'show']);
Route::get('/impressora/create', [ImpressoraController::class, 'create']);
Route::post('/impressora/store', [ImpressoraController::class, 'store']);



// Route Toner
Route::get('/toner/index', [TonerController::class, 'index']);
Route::get('/toner/show{id}', [TonerController::class, 'show']);
Route::get('/toner/create', [TonerController::class, 'create']);
Route::post('toner/store', [TonerController::class, 'store']);



// Route Login
Route::get('/login', [LoginController::class, 'index'])->name('site.login');
Route::post('/login', [LoginController::class, 'autenticar'])->name('site.login');

// Route App [GRUPO AUTENTICADO]
Route::middleware('autenticacao')->prefix('/app/system')->group(function () {
    
    // Route Computador
    Route::get('/computador/index', [ComputadorController::class, 'index'])->name('app.index.computador'); //Done
    Route::get('/computador/create', [ComputadorController::class, 'create'])->name('app.create.computador'); //Done. Usuários não cadastrados não acessam.
    Route::post('/computador/store', [ComputadorController::class, 'store'])->name('app.store.computador'); //Done
    Route::get('/computador/edit{id}', [ComputadorController::class, 'edit'])->name('app.edit.computador'); //Done
    Route::get('/computador/show{id}', [ComputadorController::class, 'show']);
    Route::delete('/computador/delete{id}',[ComputadorController::class, 'destroy']); //Done
    Route::put('/computador/update/{id}', [ComputadorController::class, 'update']);


    // Route Notebook
    Route::get('/notebook/index', [NotebookController::class, 'index'])->name('app.index.notebook'); //Done
    Route::get('/notebook/show{id}', [NotebookController::class, 'show']); 
    Route::get('/notebook/create', [NotebookController::class, 'create'])->name('app.create.notebook'); //Done
    Route::post('/notebook/store', [NotebookController::class, 'store'])->name('app.store.notebook'); //Done
    Route::delete('notebook/delete{id}', [NotebookController::class, 'destroy']); //Done
    Route::get('/notebook/edit{id}', [NotebookController::class, 'edit']); //Done
    Route::put('/notebook/update/{id}', [NotebookController::class, 'update']);


    // Route Monitor
    Route::get('/monitor/index', [MonitorController::class, 'index'])->name('app.index.monitor'); //Done
    Route::get('/monitor/show{id}', [MonitorController::class, 'show']); //Done
    Route::get('/monitor/create', [MonitorController::class, 'create'])->name('app.create.monitor'); //Done
    Route::post('/monitor/store', [MonitorController::class, 'store'])->name('app.store.monitor'); //Done
    Route::delete('/monitor/delete{id}', [MonitorController::class, 'destroy']); //Done
    Route::get('/monitor/edit{id}', [MonitorController::class, 'edit']); //Done
    Route::put('/monitor/update/{id}', [MonitorController::class, 'update']); //Done

    // Logout
    Route::get('/login', [LoginController::class, 'sair'])->name('app.sair');
});

//Route Dashboard
Route::get('/dashboard', function() {
    return view('site.dashboard');
})->name('app.dashboard');
