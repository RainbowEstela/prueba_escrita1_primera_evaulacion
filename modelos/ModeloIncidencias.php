<?php
    namespace Incidencias\modelos;
    
    use Incidencias\modelos\ConexionBD;
    use Incidencias\modelos\Incidencia;
    use \PDO;

    class ModeloIncidencias {
        public static function buscarTodas() {
            $conexionObjet = new ConexionBD();
            $conexion = $conexionObjet->getConexion();

            $consulta = $conexion->prepare("SELECT id,latitud,longitud,ciudad,direccion,descripcion,solucion,estado FROM incidencias;");

            $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Incidencias\modelos\Incidencia');
            $consulta->execute();

            $incidencias = $consulta->fetchAll();

            $conexionObjet->cerrarConexion();

            return $incidencias;

        }

        public static function buscarIncidencia($id) {
            $conexionObjet = new ConexionBD();
            $conexion = $conexionObjet->getConexion();

            $consulta = $conexion->prepare("SELECT id,latitud,longitud,ciudad,direccion,descripcion,solucion,estado FROM incidencias WHERE id=?;");

            $consulta->bindValue(1,$id);

            $consulta->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'Incidencias\modelos\Incidencia');
            $consulta->execute();

            $incidencia = $consulta->fetch();

            $conexionObjet->cerrarConexion();

            return $incidencia;
        }


        public static function borrarIncidencia($id) {
            $conexionObjet = new ConexionBD();
            $conexion = $conexionObjet->getConexion();

            $consulta = $conexion->prepare("DELETE FROM incidencias WHERE id = ?");

            $consulta->bindValue(1,$id);

            $consulta->execute();
            $conexionObjet->cerrarConexion();
        }

        public static function modificarIncidencia($id,$solucion,$estado) {
            $conexionObjet = new ConexionBD();
            $conexion = $conexionObjet->getConexion();

            $consulta = $conexion->prepare("UPDATE incidencias SET solucion=?, estado=? WHERE id = ?");

            $consulta->bindValue(1,$solucion);
            $consulta->bindValue(2,$estado);
            $consulta->bindValue(3,$id);

            $consulta->execute();
            $conexionObjet->cerrarConexion();
        }

        public static function addIncidencia($latitud,$logitud,$ciudad,$direccion,$descripcion,$solucion,$estado) {
            $conexionObjet = new ConexionBD();
            $conexion = $conexionObjet->getConexion();

            $consulta = $conexion->prepare("INSERT INTO  (latitud,longitud,ciudad,direccion,descripcion,solucion,estado,idCliente) VALUES (?,?,?,?,?,?,?,?)')

            $consulta->execute();
            $conexionObjet->cerrarConexion();

        }
    }
?>