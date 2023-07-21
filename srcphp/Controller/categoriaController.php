<?php
namespace proyecto\Controller;

use proyecto\Models\categoria;
use proyecto\Reponse\Success;

class categoriaController
{
    public function registrarcategoria()
    {
        JSONData = file_get_contents();
        $categor = new categoria();
        $categor -> nombre="conjuntos";
        $categor -> save();
        $r = new Success();
        $r->Send();
    }
}