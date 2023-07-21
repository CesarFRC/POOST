<?php

namespace proyecto\Models;

class ordenventa extends Models
{
   public $fileable = ["id","forma_pago","cliente","fecha"];
   protected $table = "orden_apartado";

   public $id;
   public $forma_pago;
   public $cliente;
   public $fecha;
}