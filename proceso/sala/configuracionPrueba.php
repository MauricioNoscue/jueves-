 <?php



include('../conexion/conexion.php');

$tipoJuego = $_POST['txttipoJuego'];
$modoJuego = $_POST['txtmodoJuego'];
$tematica = $_POST['txtTematica'];
$dificultad = $_POST['txtdificultad'];

if ($tipoJuego == "1") { 
    $dificultad = null; 
}


$conexion = new Conexion();
$sqlInsert = "INSERT INTO configuracionJuego(id_tipo_juego, id_tematica, id_dificultad, id_modo_juego) 
              VALUES (:tipoJuego, :tematica, :dificultad, :modoJuego);";

$valores = [
    ':tipoJuego' => $tipoJuego,
    ':tematica' => $tematica,
    ':dificultad' => $dificultad,
    ':modoJuego' => $modoJuego
];

$conexion->ejecutar($sqlInsert, $valores);



// // Obtener el último ID insertado
// $idConfiguracion = $conexion->conectar()->lastInsertId();

// // Redirigir a sala.html pasando el ID de configuración como parámetro en la URL
// header("Location: sala.html?id=$idConfiguracion");

header('Location:http://localhost/2024/jueves-/dasboard/sala.html#crearSalaModal');

