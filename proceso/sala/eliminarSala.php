<?php
include('eliminarS.php');


$persona = new Eliminar();

$persona->eliminarRegistro();

header('Location:http://localhost/2024/jueves-/dasboard/sala.html');

