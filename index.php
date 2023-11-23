<?php
    namespace Incidencias;

    use Incidencias\Controladores\ControladorIncidencias;
    use Incidencias\Controladores\ControladorCliente;

    //Autocargar las clases --------------------------
    spl_autoload_register(function ($class) {
        //echo substr($class, strpos($class,"\\")+1);
        $ruta = substr($class, strpos($class,"\\")+1);
        $ruta = str_replace("\\", "/", $ruta);
        include_once "./" . $ruta . ".php"; 
    });
    //Fin Autcargar --

    if(isset($_REQUEST["accion"])) {
        if(strcmp($_REQUEST["accion"],"borrarIncidencia") == 0) {

            $id = $_REQUEST["idIncidencia"];

            ControladorIncidencias::borrarIncidencia($id);
        }

        if(strcmp($_REQUEST["accion"],"modificarIncidenciaForm") == 0) {
            $id = $_REQUEST["idIncidencia"];

            ControladorIncidencias::modificarInicendiaForm($id);
        }

        if(strcmp($_REQUEST["accion"],"modificarIncidencia") == 0) {
            $id = $_REQUEST["id"];
            $solucion = null;

            if(isset($_REQUEST["solucion"])) {
                $solucion = $_REQUEST["solucion"];
            }

            $estado = $_REQUEST["estado"];

            ControladorIncidencias::modificarIncidencia($id,$solucion,$estado);
        }

        if(strcmp($_REQUEST["accion"],"selectClienteForm") == 0) {

            $dni = "";

            if(isset($_REQUEST["dni"])) {
                $dni = $_REQUEST["dni"];
            }

            ControladorCliente::mostarClienteForm($dni);
        }

        if(strcmp($_REQUEST["accion"],"addIncidencia") == 0) {
            $idCliente = $_REQUEST["idCliente"];

            ControladorIncidencias::addIncidenciaForm($idCliente);
        }


        if(strcmp($_REQUEST["accion"],"peticionAddInicendia") == 0) {
            var_dump($_REQUEST);
    
            $latitud = $_REQUEST["latitud"];
            $logitud = $_REQUEST["longitud"];
            $ciudad = $_REQUEST["ciudad"];
            $direccion = $_REQUEST["direccion"];
            $descripcion = $_REQUEST["descripcion"];
            $estado = $_REQUEST["estado"];
            $solucion = "";
            if(isset($_REQUEST["solucion"])) {
                $solucion = $_REQUEST["solucion"];
            }
            
            ControladorIncidencias::addIncidencia($latitud,$logitud,$ciudad,$direccion,$descripcion,$solucion,$estado);
        }
        


    } else {
        
        ControladorIncidencias::mostrarTodas();
    }

?>