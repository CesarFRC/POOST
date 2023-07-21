<?php

namespace proyecto\Models;

class detalleapartado extends Models
{
   public $fileable = ["cantidad","orden_apartado_id","producto"];
   protected $table = "detalle_apartado";

   public $cantidad;
   public $orden_apartado_id;
   public $producto;
}