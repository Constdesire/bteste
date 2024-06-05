<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Route::get("/ClienteCad", [ClienteController::class, "ClienteCad"]);
Route::post("/adicionaCliente", [ClienteController::class, "adicionarC"]);
Route::get("/editarCL/{id}", [ClienteController::class, "editarC"]);
Route::post("/atualizarCL/{id}", [ClienteController::class, "atualizarC"]);
Route::get("/excluirCL/{id}", [ClienteController::class, "excluirC"]);

Route::get("/FC", [FuncionarioController::class, "FuncionarioCad"]);
Route::post("/adicionarFunc", [FuncionarioController::class, "adicionarFunc"]);
Route::get("/editarFunc/{id}", [FuncionarioController::class, "editarFunc"]);
Route::post("/atualizarFunc/{id}", [FuncionarioController::class, "atualizarFunc"]);
Route::get("/excluirFunc/{id}", [FuncionarioController::class, "excluirFunc"]);

Route::get("/AC", [AgendamentoController::class, "AgendamentoCad"]);
Route::get("/AJ", [AgendamentoController::class, "AgendamentoCad"]);
/*Route::get("/editarAA/{id}", [AgendamentoController::class, "editarA"]);
Route::post("/atualizarAA/{id}", [AgendamentoController::class, "atualizarA"]);
Route::get("/excluirAA/{id}", [AgendamentoController::class, "excluirA"]);*/


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');*/

Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register']);

