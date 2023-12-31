<?php
    namespace Incidencias\modelos;

    class Incidencia {
        private $id;
        private $latitud;
        private $longitud;
        private $ciudad;
        private $direccion;
        private $descripcion;
        private $solucion;
        private $estado;
        
        public function __construct($id="",$latitud="",$longitud="",$ciudad="",$direccion="",$descripcion="",$solucion="",$estado="")
        {
            $this->id = $id;
            $this->latitud = $latitud;
            $this->longitud = $longitud;
            $this->ciudad = $ciudad;
            $this->direccion = $direccion;
            $this->descripcion = $descripcion;
            $this->solucion = $solucion;
            $this->estado = $estado;
        }

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of latitud
         */ 
        public function getLatitud()
        {
                return $this->latitud;
        }

        /**
         * Set the value of latitud
         *
         * @return  self
         */ 
        public function setLatitud($latitud)
        {
                $this->latitud = $latitud;

                return $this;
        }

        /**
         * Get the value of longitud
         */ 
        public function getLongitud()
        {
                return $this->longitud;
        }

        /**
         * Set the value of longitud
         *
         * @return  self
         */ 
        public function setLongitud($longitud)
        {
                $this->longitud = $longitud;

                return $this;
        }

        /**
         * Get the value of ciudad
         */ 
        public function getCiudad()
        {
                return $this->ciudad;
        }

        /**
         * Set the value of ciudad
         *
         * @return  self
         */ 
        public function setCiudad($ciudad)
        {
                $this->ciudad = $ciudad;

                return $this;
        }

        /**
         * Get the value of direccion
         */ 
        public function getDireccion()
        {
                return $this->direccion;
        }

        /**
         * Set the value of direccion
         *
         * @return  self
         */ 
        public function setDireccion($direccion)
        {
                $this->direccion = $direccion;

                return $this;
        }

        /**
         * Get the value of descripcion
         */ 
        public function getDescripcion()
        {
                return $this->descripcion;
        }

        /**
         * Set the value of descripcion
         *
         * @return  self
         */ 
        public function setDescripcion($descripcion)
        {
                $this->descripcion = $descripcion;

                return $this;
        }

        /**
         * Get the value of solucion
         */ 
        public function getSolucion()
        {
                return $this->solucion;
        }

        /**
         * Set the value of solucion
         *
         * @return  self
         */ 
        public function setSolucion($solucion)
        {
                $this->solucion = $solucion;

                return $this;
        }

        /**
         * Get the value of estado
         */ 
        public function getEstado()
        {
                return $this->estado;
        }

        /**
         * Set the value of estado
         *
         * @return  self
         */ 
        public function setEstado($estado)
        {
                $this->estado = $estado;

                return $this;
        }
    }
?>