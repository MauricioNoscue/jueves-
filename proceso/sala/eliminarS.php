<?php
include('../conexion/conexion.php');
include('sala.php');

class Eliminar extends Sala {
    private $idSala; 
    private $sqlEliminar;
    public function eliminarRegistro() {
        $idSala=$_POST['id_sala'];
        $conexion = new Conexion();
        $this->sqlEliminar = "DELETE FROM salas WHERE id_sala = :id;"; 
       
        $valores = [
            ':id' => $idSala
        ];
                                                                                                                                                                    
        // Ejecutar la consulta de eliminación
        $conexion->ejecutar($this->sqlEliminar, $valores);
        echo "Registro eliminado correctamente.";
    }
}

