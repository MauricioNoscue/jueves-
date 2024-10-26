<?php
include('../conexion/conexion.php');
include('persona.php');

class Eliminar extends Persona {
    private $idPersona; // Atributo para almacenar el ID a eliminar
    private $sqlEliminar;

    // Método para establecer el ID del registro a eliminar
    public function setIdPersona($id) {
        $this->idPersona = $id;
    }

    // Método para eliminar el registro
    public function eliminarRegistro() {
        $conexion = new Conexion();
        $this->sqlEliminar = "DELETE FROM persona WHERE id_persona = :id;"; // Cambia esto según el nombre del campo en tu base de datos

        // Pasar el ID como parámetro para eliminar
        $valores = [
            ':id' => $this->idPersona
        ];

        // Ejecutar la consulta de eliminación
        $conexion->ejecutar($this->sqlEliminar, $valores);
        echo "Registro eliminado correctamente.";
    }
}
?>
