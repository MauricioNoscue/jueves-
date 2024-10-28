<?php
include('../conexion/conexion.php');
include('persona.php');

class Consultar extends Persona {

    private $sqlInsert;

    public function consultar($busqueda = null) {
        $conexion = new Conexion();

        // Prepara la consulta SQL con un parámetro de búsqueda
        if ($busqueda) {
            $this->sqlInsert = "SELECT * FROM persona WHERE nombre ILIKE :busqueda 
                                                        OR apellido ILIKE :busqueda 
                                                        OR telefono ILIKE :busqueda 
                                                        OR edad::text ILIKE :busqueda ORDER BY id_persona ASC";
        } else {
            $this->sqlInsert = "SELECT * FROM persona ORDER BY id_persona ASC";
        }

        // Si hay una búsqueda, se ejecuta con el valor de búsqueda
        if ($busqueda) {
            $resultado = $conexion->consulta($this->sqlInsert, ['busqueda' => "%$busqueda%"]);
        } else {
            // Si no hay búsqueda, se ejecuta la consulta sin parámetros
            $resultado = $conexion->consulta($this->sqlInsert, []);
        }

        header('Content-Type: application/json');
        echo json_encode($resultado);
    }
}

$consultar = new Consultar();
$busqueda = isset($_GET['busqueda']) ? $_GET['busqueda'] : null; // Obtener el parámetro de búsqueda
$consultar->consultar($busqueda);
