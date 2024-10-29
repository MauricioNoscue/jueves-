<?php

    include('registrar.php');
    
    $nombre=$_POST['txtNombre'];
    $apellido=$_POST['txtApellido'];
    $celular=$_POST['txtCelular'];
    $edad=$_POST['txtEdad'];

    $persona = new Registrar();
    $persona->setNombrePersona($nombre);
    $persona->setApellidoPersona($apellido);
    $persona->setCelularPersona($celular);
    $persona->setEdadPersona($edad);

    $persona->registro();