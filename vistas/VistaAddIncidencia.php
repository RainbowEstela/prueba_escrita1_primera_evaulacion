<?php
    namespace Incidencias\vistas;

    class VistaAddIncidencia {
        public static function render($idCliente) {
            echo'
            <form action="index.php" method="POST" id="formAddRegalo">

            <input type="hidden" name="idCliente" value="'.$idCliente.'">

            <div class="form-floating">
              <input type="number" step="any" class="form-control" id="inputPrecio" name="latitud" placeholder="0" min="0" max="9999" required>
              <label for="inputPrecio">latitud</label>
            </div>

            <div class="form-floating">
              <input type="number" step="any" class="form-control" id="inputPrecio" name="longitud" placeholder="0" min="0" max="9999" required>
              <label for="inputPrecio">longitud</label>
            </div>

            <div class="form-floating">
              <input type="text" class="form-control" id="inputNombre" name="ciudad" placeholder="ciudad" required>

            </div>

            <div class="form-floating">
              <input type="text" class="form-control" id="inputNombre" name="direccion" placeholder="direccion" required>
 
            </div>

            <div class="form-floating">
              <input type="text" class="form-control" id="inputNombre" name="descripcion" placeholder="descripcion" required>
 
            </div>

            <div class="form-floating">
              <input type="text" class="form-control" id="inputNombre" name="solucion" placeholder="solucion">
 
            </div>

            

            <div class="form-floating">
              <select class="form-select py-3" name="estado" aria-label="Default select example">
                <option value="pendiente" selected>Pendiente</option>
                <option value="proceso">En proceso</option>
                <option value="solucionado">solucionado</option>
              </select>
            </div>


          </form>
          ';
          echo'

          <div class="modal-footer">
                  <button class="btn btn-primary" type="submit" name="accion" value="peticionAddInicendia" form="formAddRegalo">Añadir</button>
                </div>
                ';
        }
    }

?>