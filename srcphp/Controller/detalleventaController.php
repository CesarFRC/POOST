<?php
namespace proyecto\Controller;

use proyecto\Models\detalleventa;
use proyecto\Reponse\Success;

class detalleventaController
{
    public function registrardetalleventa()
    {
        JSONData = file_get_contents();
        $detalleventa = new detallevent();
        $detalleventa -> orden_venta_id=2;
        $detalleventa -> producto=1;
        $detalleventa -> cantidad=2;
        $detalleventa -> save();
        $r = new Success();
        $r->Send();
    }
}