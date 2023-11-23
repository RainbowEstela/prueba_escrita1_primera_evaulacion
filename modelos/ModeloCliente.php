<?php
    namespace Incidencias\modelos;

    use Incidencias\modelos\ConexionBD;
    use Incidencias\modelos\Cliente;
    use \PDO;

    class ModeloCliente {

        public static function buscarParecidos($dni) {
            $conexionObjet = new ConexionBD();
            $conexion = $conexionObjet->getConexion();

            $consulta = $conexion->prepare("SELECT id,dni,nombre,direccion,localidad,movil,email FROM clientes WHERE dni like ?;");

            $consulta->bindValue(1,'%'.$dni.'%');

            $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Incidencias\modelos\Cliente');
            $consulta->execute();

            $clientes = $consulta->fetchAll();

            $conexionObjet->cerrarConexion();

            return $clientes;
        }

    }

?>