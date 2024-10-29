<?php
include('../conexion/conexion.php');
include('persona.php');

class Modificar extends Persona
{

    private $sqlModificar; 
    public function modifico()
    {
        $idPersona = $_POST['editarId'];
        $conexion = new Conexion();
        $this->sqlModificar = "UPDATE persona
                                SET nombre=:nombre, apellido=:apellido, telefono=:telefono, edad=:edad
                                WHERE id_persona=:id_persona;";
        $valores = [
            ':id_persona' => $idPersona,
            ':nombre' => $this->getNombrePersona(),
            ':apellido' => $this->getApellidoPersona(),
            ':telefono' => $this->getCelularPersona(),
            ':edad' => $this->getEdadPersona(),
        ];

        
        $resultado = $conexion->ejecutar($this->sqlModificar, $valores);
        header('Content-Type: application/json');
        echo json_encode($resultado);

        header('Location:http://localhost/jueves-/dasboard/index.html');
    }

}
