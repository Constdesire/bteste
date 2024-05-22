<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/', function () { return view('welcome');});
Route::get('/login.blade.php', function () { return view('login');});
Route::get('/Adm.blade.php', function () { return view('adm');});


Route::get("/ClienteCad", [ClienteController::class, "ClienteCad"]);
Route::post("/adicionaCliente", [ClienteController::class, "adicionarC"]);
Route::get("/editarCL/{id}", [ClienteController::class, "editarC"]);
Route::post("/atualizarCL/{id}", [ClienteController::class, "atualizarC"]);
Route::get("/excluirCL/{id}", [ClienteController::class, "excluirC"]);

Route::get("/FuncionarioCad", [FuncionarioController::class, "FuncionarioCad"]);
Route::post("/adicionarFunc", [FuncionarioController::class, "adicionarF"]);
Route::get("/editarFunc/{id}", [FuncionarioController::class, "editarF"]);
Route::post("/atualizarFunc/{id}", [FuncionarioController::class, "atualizarF"]);
Route::get("/excluirFunc/{id}", [FuncionarioController::class, "excluirF"]);

Route::get("/AgendamentoCad", [AgendamentoController::class, "AgendamentoCad"]);
Route::post("/adicionarCA", [AgendamentoController::class, "adicionarA"]);
Route::get("/editarA/{id}", [AgendamentoController::class, "editarA"]);
Route::post("/atualizarAL/{id}", [AgendamentoController::class, "atualizarA"]);
Route::get("/excluirA/{id}", [AgendamentoController::class, "excluirA"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');