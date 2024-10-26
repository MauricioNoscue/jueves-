<?php
include('eliminar.php');

// Comprobar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['txtId'])) {
    
    // Obtener el ID de la persona a eliminar desde el formulario
    $idPersona = $_POST['txtId'];

    // Crear una instancia de la clase Eliminar
    $persona = new Eliminar();

    // Establecer el ID de la persona a eliminar
    $persona->setIdPersona($idPersona); // Cambia esto a setIdPersona

    // Llamar al método para eliminar el registro
    $persona->eliminarRegistro();

    // Redirigir después de eliminar
    header('Location: http://localhost/MEMORICE/formulario/persona/registrar.php');
    exit(); // Es recomendable usar exit() después de header()
} else {
    echo "ID no proporcionado.";
}
?>
