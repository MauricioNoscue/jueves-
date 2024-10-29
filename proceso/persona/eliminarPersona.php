<?php
include('eliminar.php');


$persona = new Eliminar();

$persona->eliminarRegistro();

header('Location:http://localhost/jueves-/dasboard/index.html');

