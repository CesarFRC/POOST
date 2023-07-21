<?php
namespace proyecto\Controller;

use proyecto\Models\detalleapartado;
use proyecto\Reponse\Success;

class detalleapartadoController
{
    public function registrardetalleapartado()
    {
        JSONData = file_get_contents();
        $detalleaparta = new detalleapart();
        $detalleaparta -> cantidad=2;
        $detalleaparta -> orden_apartado_id=1;
        $detalleaparta -> producto=2;
        $detalleaparta -> save();
        $r = new Success();
        $r->Send();
    }
}