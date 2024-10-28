<?php

    include('modificar.php');
    
    $nombre=$_POST['editarNombre'];
    $apellido=$_POST['editarApellido'];
    $celular=$_POST['editarCelular'];
    $edad=$_POST['editarEdad'];

    $persona = new Modificar();
    $persona->setNombrePersona($nombre);
    $persona->setApellidoPersona($apellido);
    $persona->setCelularPersona($celular);
    $persona->setEdadPersona($edad);

    $persona->modifico();


