<?php

use App\Http\Controllers\api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



/**
 * Login
 *
 *  Segue um exemplo de sucesso
 * 
  * @response 200 scenario="Logado com sucesso" {"data": {"token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNzE5NjE3NDk4LCJleHAiOjE3MTk2MjEwOTgsIm5iZiI6MTcxOTYxNzQ5OCwianRpIjoiSEJBZjZDUkZGVTZGU1N2WSIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.m95EIBJB_DcMdM5TTVmQYHucHH5Aimh0lVeYxz7WSbA","token_type": "bearer","expires_in": 3600}}
 *
 * @responseField A requisição foi realizada com sucesso.
 * 
 * @urlParams email Email do usuario para realizar o login
 * @urlParams password Senha do usuario para realizar o login
 * 
 * @response 401 scenario="Não autorizado" {"message": "Unauthenticated."}
 * @responseField O usuario não está autorizado para realizar o login
 */


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);
Route::get('user', [AuthController::class, 'getAuthenticatedUser']);
