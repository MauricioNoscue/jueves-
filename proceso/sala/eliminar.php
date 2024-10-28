<?php
include('../conexion/conexion.php');
include('persona.php');

class Eliminar extends Persona {
    private $idPersona; 
    private $sqlEliminar;
    public function eliminarRegistro() {
        $idPersona=$_POST['id_persona2'];
        $conexion = new Conexion();
        $this->sqlEliminar = "DELETE FROM persona WHERE id_persona = :id;"; 
       
        $valores = [
            ':id' => $idPersona
        ];
                                                                                                                                                                    
        // Ejecutar la consulta de eliminación
        $conexion->ejecutar($this->sqlEliminar, $valores);
        echo "Registro eliminado correctamente.";
    }
}

