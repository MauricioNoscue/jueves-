<?php

    include('registrar.php');
    
    $nombre=$_POST['txtNombres'];
    $apellido=$_POST['txtPrimerApellido'];
    $telefono=$_POST['txtTelefono'];
    $edad=$_POST['txtedad'];
    $persona = new Registrar();
    $persona->setNombrePersona($nombre);
    $persona->setApellido($apellido);
    $persona->setTelefonoPersona($telefono);
    $persona->setEdadPersona($edad);


    $persona->registro();


   
    header('Location:http://localhost/MEMORICE/formulario/persona/registrar.php');
?>