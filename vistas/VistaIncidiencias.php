<?php
    namespace Incidencias\vistas;

    class VistaIncidiencias {
        public static function render($incidencias) {
            include "cabecera.php";

             //contenido principal
          echo' <main class="container ">';
          echo '
          <div class="d-flex justify-content-center p-4">
            <a href="index.php?accion=selectClienteForm">
            <button class="btn btn-success"">Añadir</button> 
            </a> 
          </div>';

          if($incidencias == null) {
            echo '
            <h3 class="text-center text-info">Aun no tiene regalos que mostrar</h3>
            </main>
            ';
          } else {

            echo '
              <table class="table table-hover table-striped table-bordered">
                <tr class="table-dark text-center">
                  <th>latitud</th>
                  <th>longitid</th>
                  <th>ciudad</th>
                  <th>direccion</th>
                  <th>descripcion</th>
                  <th>solucion</th>
                  <th>estado</th>
                  <th>acciones</th>
                </tr>
            ';
          
            foreach($incidencias as $incidencia) {

              echo'<tr>';
              echo' <td>'.$incidencia->getLatitud().'</td>';
              echo' <td>'.$incidencia->getLongitud().'</td>';
              echo' <td>'.$incidencia->getCiudad().'</td>';
              echo' <td>'.$incidencia->getDireccion().'</td>';
              echo' <td>'.$incidencia->getDescripcion().'</td>';
              echo' <td>'.$incidencia->getSolucion().'</td>';
              echo' <td>'.$incidencia->getEstado().'</td>';

              echo' <td class="d-flex justify-content-center">
                <a href="index.php?accion=borrarIncidencia&idIncidencia='.$incidencia->getId().'"><button class="btn btn-danger">x</button></a>
                <a href="index.php?accion=modificarIncidenciaForm&idIncidencia='.$incidencia->getId().'" class="px-2"><button class="btn btn-success"><img src="./vistas/imgs/configuracion.png" alt="modificar" width="20px" height="20px"></button></a>
              </td>
              ';
              echo'</tr>';

            }
  
  
            echo'</table>';

          }

          echo '</main>';
          //fin contenido principal

            include "pie.php";
        }
    }
?>
