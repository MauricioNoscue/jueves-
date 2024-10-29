<?php
include('crearSala.php');

$nombre = $_POST['nombreSala'];
$capacidad = $_POST['capacidad'];
$configuracionId = $_POST['configuracion_id']; // Obtener el ID de configuración

$sala = new Crear();
$sala->setNombreSala($nombre);
$sala->setCapacidad($capacidad);
// $sala->setConfiguracionId($configuracionId); // Asegúrate de que esta función exista

$sala->Crear();
