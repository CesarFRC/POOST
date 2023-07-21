<?php

namespace proyecto\Models;

class categoria extends Models
{
   public $fileable = ["nombre"];
   protected $table = "categoria";

   public $nombre;
}