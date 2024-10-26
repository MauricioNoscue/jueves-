<?php 
    include('../conexion/conexion.php');
    include('persona.php');

    class Modificar extends Persona{

        private $sqlModificar;
        public function registro(){
            $conexion=new Conexion();
            $this->sqlModificar="INSERT INTO persona(nombre,apellido,telefono,edad)
	                            VALUES (:nombre, :apellido, :telefono, :edad);";
            $valores=[
                ':nombre' => $this->getNombrePersona(),
                ':apellido' => $this->getApellido(),
                ':telefono' => $this->getTelefonoPersona(),
                ':edad' => $this->getEdadPersona(),

            ];

            $conexion->ejecutar($this->sqlModificar, $valores);
            //return $this->sqlModificar;                    
        }
        
    }
