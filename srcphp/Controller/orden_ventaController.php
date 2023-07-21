<?php
namespace proyecto\Controller;

use proyecto\Models\ordenventa;
use proyecto\Reponse\Success;

class orden_ventaController
{
    public function registrarordenventa()
    {
        JSONData = file_get_contents();
        $ordenvent = new ordenven();
        $ordenvent -> id=2;
        $ordenvent -> forma_pago="efectivo";
        $ordenvent -> cliente=2;
        $ordenvent -> fecha=22-10-15;
        $ordenvent -> save();
        $r = new Success();
        $r->Send();
    }
}