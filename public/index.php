<?php

namespace proyecto;
require("../vendor/autoload.php");

use proyecto\Controller\crearPersonaController;
use proyecto\Models\User;
use proyecto\Response\Failure;
use proyecto\Response\Success;


Router::get('/prueba',[crearPersonaController::class,"prueba"]);
Router::post('/categoria/registrar',[categoriaController::class,"registrarcategoria"]);
Router::post('/detalleapartado/registrar',[detalleapartadoController::class,"registrardetalleapartado"]);
Router::post('/detalleventa/registrar',[detalleventaController::class,"registrardetalleventa"]);
Router::post('/orden_apartado/registrar',[orden_apartadoController::class,"registrarordenapartado"]);
Router::post('/orden_venta/registrar',[orden_ventaController::class,"registrarordenventa"]);
Router::post('/productos/registrar',[productosController::class,"registrarproducto"]);
Router::get('/crearpersona', [crearPersonaController::class, "crearPersona"]);
Router::get('/usuario/buscar/$id', function ($id) {

    $user= User::find($id);
    if(!$user)
    {
        $r= new Failure(404,"no se encontro el usuario");
        return $r->Send();
    }
   $r= new Success($user);
    return $r->Send();


});
Router::get('/respuesta', [crearPersonaController::class, "response"]);
Router::any('/404', '../views/404.php');
