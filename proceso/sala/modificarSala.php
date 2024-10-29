<?php

    include('modificar.php');
    
    $nombreSala=$_POST['editarNombreSala'];
    $capacidadSala=$_POST['editarCapacidadSala'];
    

    $persona = new Modificar();
    $persona->setNombreSala($nombreSala);
    $persona->setCapacidad($capacidadSala);

    $persona->modificar();


