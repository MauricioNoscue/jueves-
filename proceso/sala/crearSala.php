<?php

include('../conexion/conexion.php');
include('sala.php');
class Crear extends Sala {
    private $sqlInsert;

    public function crear() {
        $conexion = new Conexion();
        $idConfiguracion = $conexion->obtenerUltimoIdConfiguracion(); // Obtener el último id de configuracion

        if ($idConfiguracion === null) {
            // Manejar el error si no se encuentra ninguna configuración
            echo "No se encontró ninguna configuración de juego.";
            return;
        }

        $this->sqlInsert = "INSERT INTO salas(nombre_sala, capacidad_sala, fecha_creacion, id_configuracion_juego, id_creador)
                            VALUES(:nombreSala, :capacidad, NOW(), :configuracion, :creador);"; 

        $valores = [
            ':nombreSala' => $this->getNombreSala(), 
            ':capacidad' => $this->getCapacidad(),
            ':configuracion' => $idConfiguracion, 
            ':creador' => 1 
        ];

        $conexion->ejecutar($this->sqlInsert, $valores); // Ejecutar la inserción
        header('Location:http://localhost/2024/jueves-/dasboard/sala.html'); // Redirigir después de la creación
    }
}