<?php
    namespace Incidencias\Controladores;

use Incidencias\modelos\ModeloCliente;
use Incidencias\vistas\VistaClientesForm;

    class ControladorCliente {
        public static function mostarClienteForm($dni) {
            $clientes = ModeloCliente::buscarParecidos($dni);

            VistaClientesForm::render($clientes);
        }
    }

?>