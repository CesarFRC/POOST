<?php

namespace proyecto\Models;

class producto extends Models
{
   public $fileable = ["id","nom_producto","precio","existencias","talla","color","categoria","descripcion","imagen"];
   protected $table = "producto";

   public $id;
   public $nom_producto;
   public $precio;
   public $existencias;
   public $talla;
   public $color;
   public $categoria;
   public $descripcion;
   public $imagen;
}