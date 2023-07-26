<?php
namespace proyecto\Controller;

use proyecto\Models\producto;
use proyecto\Reponse\Success;

class productosController
{
    public function registrarproducto()
    {
        JSONData = file_get_contents();
        $proc = new proct();
        $proc -> id=2;
        $proc -> nom_producto=23-10-01;
        $proc -> precio=400;
        $proc -> existencias=50;
        $proc -> talla="efectivo";
        $proc -> color="amarillo";
        $proc -> categoria=1;
        $proc -> descripcion="es un producto";
        $proc -> imagen="esto es una imagen";
        $proc -> save();
        $r = new Success();
        $r->Send();
    }
    function consultarproducto()
    {
        $q=Table::query("select * from producto");
        $t=new Success($q);
        $t->Send();
    }
}