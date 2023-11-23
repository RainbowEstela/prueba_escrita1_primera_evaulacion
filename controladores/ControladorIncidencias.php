<?php
    namespace Incidencias\Controladores;

    use Incidencias\modelos\ModeloIncidencias;
    use Incidencias\vistas\VistaIncidiencias;
use Incidencias\vistas\VistaModificarIncidencia;
use Incidencias\vistas\VistaAddIncidencia;

    class ControladorIncidencias {
        public static function mostrarTodas() {
            $incidencias = ModeloIncidencias::buscarTodas();

            VistaIncidiencias::render($incidencias);
        }

        public static function borrarIncidencia($id) {
            ModeloIncidencias::borrarIncidencia($id);

            ControladorIncidencias::mostrarTodas();
        }

        public static function modificarInicendiaForm($id) {
            $incidencia = ModeloIncidencias::buscarIncidencia($id);

            VistaModificarIncidencia::render($incidencia);
        }

        public static function modificarIncidencia($id,$solucion,$estado) {
            ModeloIncidencias::modificarIncidencia($id,$solucion,$estado);

            ControladorIncidencias::mostrarTodas();
        }

        public static function addIncidenciaForm($idCliente) {
            VistaAddIncidencia::render($idCliente);
        }

        public static function addIncidencia($latitud,$logitud,$ciudad,$direccion,$descripcion,$solucion,$estado) {
            ModeloIncidencias::addIncidencia($latitud,$logitud,$ciudad,$direccion,$descripcion,$solucion,$estado);

            ControladorIncidencias::mostrarTodas();
        }
    }
?>