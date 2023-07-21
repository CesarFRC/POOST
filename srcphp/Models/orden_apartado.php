<?php

namespace proyecto\Models;

class orden_apartado extends Models
{
   public $fileable = ["id","fecha","cliente","contacto","forma_pago","total_pagar","estado","abono"];
   protected $table = "orden_apartado";

   public $id;
   public $fecha;
   public $cliente;
   public $contacto;
   public $forma_pago;
   public $total_pagar;
   public $estado;
   public $abono;
}