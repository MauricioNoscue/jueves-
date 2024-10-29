<?php
include('../conexion/conexion.php');

class ConsultarSala {

    private $sqlSelect;

    public function consultar() {
        $conexion = new Conexion();

        // Consulta SQL que realiza los JOINs necesarios para obtener los datos de otras tablas
        $this->sqlSelect = "SELECT 
            s.id_sala,
            s.nombre_sala AS nombreSala, 
            s.capacidad_sala AS capacidad, 
            s.fecha_creacion AS fechaCreacion, 
            t.nombre_tipo_juego AS nombreJuego,       -- Desde tabla tipoJuego
            tm.nombre_tematica AS tematicaJuego,      -- Desde tabla tematicaJuego
            d.nombre_dificultad AS dificultadJuego,   -- Desde tabla dificultad
            m.nombre_modo_juego AS modoJuego,         -- Desde tabla modoJuego
            p.nombre AS nombreCreador                 -- Desde tabla persona
        FROM salas s
        INNER JOIN persona p ON s.id_creador = p.id_persona
        INNER JOIN configuracionJuego c ON c.id_configuracion_juego = s.id_configuracion_juego
        INNER JOIN tipoJuego t ON t.id_tipo_juego = c.id_tipo_juego
        INNER JOIN tematicaJuego tm ON tm.id_tematica = c.id_tematica
        FULL JOIN dificultad d ON d.id_dificultad = c.id_dificultad
        INNER JOIN modoJuego m ON m.id_modo_juego = c.id_modo_juego
        ORDER BY s.id_sala ASC";

        $resultado = $conexion->consulta($this->sqlSelect, []);

        header('Content-Type: application/json');
        echo json_encode($resultado);
    }
}

$consultar = new ConsultarSala();
$consultar->consultar();
