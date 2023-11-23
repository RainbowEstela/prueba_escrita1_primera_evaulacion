<?php
    namespace Incidencias\vistas;

    class VistaClientesForm {

        public static function render($clientes) {
            include("cabecera.php");
            echo' <main class="container ">';
            echo'
            <div class="d-flex justify-content-end">
            <form class="form-inline" style="width:200px;">
              <div class="d-flex nowrap">
                <input class="form-control" type="text" placeholder="Buscar dni" aria-label="Search" name="dni" required>
                <button class="btn btn btn-success" type="submit" name="accion" value="selectClienteForm">Buscar</button>
              </div>
            </form>
            </div>
            ';
            echo'
            <table class="table table-hover table-striped table-bordered">
                <tr class="table-dark text-center">
                  <th>Nombre</th>
                  <th>Destinatario</th>
                  </tr>
            ';

            foreach($clientes as $cliente) {
                echo'<tr>';
                echo' <td>'.$cliente->getDni().'</td>';
                echo' <td class="d-flex justify-content-center">
                <a href="index.php?accion=addIncidencia&idCliente='.$cliente->getId().'"><button class="btn btn-success">añadir</button></a>
              </td>';
                echo'</tr>';
            }

            echo '</main>';
            include("pie.php");
        }
        
    }
?>