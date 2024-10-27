<?php
include('../conexion/conexion.php');
include('persona.php');

class Consultar extends Persona {

    private $sqlInsert;

    public function consultar() {
        $conexion = new Conexion();
        $this->sqlInsert = "SELECT * FROM persona;";
        
        $resultado = $conexion->consulta($this->sqlInsert, []);

        header('Content-Type: application/json');
        echo json_encode($resultado);
    }
} 

$consultar = new Consultar();
$consultar->consultar();
