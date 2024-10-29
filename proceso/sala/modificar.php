<?php
include('../conexion/conexion.php');
include('sala.php');

class Modificar extends Sala
{

    private $sqlModificar;
    public function modificar()
    {
        $idSala = $_POST['editarId'];
        $conexion = new Conexion();
        $this->sqlModificar = "UPDATE salas
                                SET nombre_sala=:nombre, capacidad_sala=:capacidad
                                WHERE id_sala=:id_sala;";
        $valores = [
            ':id_sala' => $idSala,
            ':nombre' => $this->getNombreSala(),
            ':capacidad' =>$this->getCapacidad()
        ];


        $resultado = $conexion->ejecutar($this->sqlModificar, $valores);
        header('Content-Type: application/json');
        echo json_encode($resultado);

        header('Location:http://localhost/2024/jueves-/dasboard/sala.html');
    }
}
