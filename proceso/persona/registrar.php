<?php
include('../conexion/conexion.php');
include('persona.php');

class Registrar extends Persona{

    private $sqlInsert;
    public function registro()
    {
        $conexion = new Conexion();
        $this->sqlInsert = "INSERT INTO persona(nombre,apellido,telefono,edad)
	                            VALUES (:nombre, :apellido, :telefono, :edad);";
        $valores = [
            ':nombre' => $this->getNombrePersona(),
            ':apellido' => $this->getApellidoPersona(),
            ':telefono' => $this->getCelularPersona(),
            ':edad' => $this->getEdadPersona(),

        ];

        $conexion->ejecutar($this->sqlInsert, $valores);
        header('Location:http://localhost/2024/jueves-/dasboard/index.html');

    }
}
