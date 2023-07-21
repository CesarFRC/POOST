<?php
namespace proyecto\Controller;

use proyecto\Models\orden_apartado;
use proyecto\Reponse\Success;

class orden_apartadoController
{
    public function registrarordenapartado()
    {
        JSONData = file_get_contents();
        $detalleord = new detalleorde();
        $detalleord -> id=2;
        $detalleord -> fecha=23-10-01;
        $detalleord -> cliente=2;
        $detalleord -> contacto=8713580513;
        $detalleord -> forma_pago="efectivo";
        $detalleord -> total_pagar=300;
        $detalleord -> estado=pendiente;
        $detalleord -> abono=200;
        $detalleord -> save();
        $r = new Success();
        $r->Send();
    }
}