<?php

namespace proyecto\Models;

class detalleventa extends Models
{
   public $fileable = ["orden_venta_id","producto","cantidad"];
   protected $table = "detalle_venta";

   public $orden_venta_id;
   public $producto;
   public $cantidad;
}