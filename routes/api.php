<?php

use App\Http\Controllers\BitacoraController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\NotificacionController;
use App\Http\Controllers\PermisoController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\RolPermisoController;
use App\Http\Controllers\TipoCitaController;
use App\Http\Controllers\TipoNotificacionController;
use App\Http\Controllers\TipoUsuarioController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::apiResource('roles', RolController::class);
Route::apiResource('permisos', PermisoController::class);
Route::apiResource('rol_permiso', RolPermisoController::class);
Route::apiResource('tipo_usuario', TipoUsuarioController::class);
Route::apiResource('usuarios', UsuarioController::class);
Route::apiResource('tipo_cita', TipoCitaController::class);
Route::apiResource('citas', CitaController::class);
Route::apiResource('bitacora', BitacoraController::class);
Route::apiResource('tipo_notificacion', TipoNotificacionController::class);
Route::apiResource('notificacion', NotificacionController::class);