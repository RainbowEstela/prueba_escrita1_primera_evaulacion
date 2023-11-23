<?php
    namespace Incidencias\vistas;

    class VistaModificarIncidencia {
        public static function render($incidencia) {
            include("cabecera.php");

            echo '
            <form action="index.php" method="POST" class="w-50 mx-auto my-5">
                <div>
                    <h3 class="text-center text-primary">Modificar Incidencia</h3>
                </div>

                <input type="hidden" name="id" value="'.$incidencia->getId().'">

                <div class="form-floating">
                    <div class="form-floating">
                    <input type="text" class="form-control" id="inputNombre" name="solucion" placeholder="tu nombre" value="'.$incidencia->getSolucion().'">
                    <label for="inputNombre">Solucion</label>
                    </div>
                </div>

                
                <div class="form-floating">
                    <select class="form-select py-3" name="estado" aria-label="Default select example">
                ';

            $opciones = [
                [
                    "value" => "pendiente",
                    "name" => "Pendiente"
                ],

                [
                    "value" => "proceso",
                    "name" => "En proceso"
                ],

                [
                    "value" => "solucionado",
                    "name" => "Solucionado"
                ]
            ];

            
            foreach($opciones as $opcion) {
                if(strcmp($opcion["value"],$incidencia->getEstado()) == 0) {
                    echo '<option value="'.$opcion["value"].'" selected>'.$opcion["name"].'</option>';
                } else {
                    echo '<option value="'.$opcion["value"].'">'.$opcion["name"].'</option>';
                }
            }
            
            echo'

                    </select>
                </div>

                <div class="form-floating d-flex justify-content-center my-3">
                    <input type="submit" name="accion" value="modificarIncidencia" class="btn btn-primary">
                </div>
            </form>
            
            ';

            include("pie.php");
        }
    }
?>
