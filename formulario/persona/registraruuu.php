<?php

// include('../../proceso/conexion/conexion.php');

// $SqlPersona = "SELECT * FROM persona";

// $conexion = new conexion;
// $datosPersona = $conexion->consulta($SqlPersona);

// $personaId = $_POST['id_persona'];
// $sqlPersona = "SELECT * FROM persona WHERE personaId=:id_persona;";
// $values = array(
//     ':id_persona' => $personaId,
// );

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <script src="fontawesome/css/all.css"></script>


    <title>Conexion base de datos</title>
</head>

<body>
    <div class="container">
        <!-- Formulario de búsqueda -->
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand">Registrar Personas</a>
                <form class="d-flex" role="search" method="post" action="libreria/busqueda.php">
                    <strong>Buscar</strong>
                    </br>
                    <input class="form-control me-2" type="search" name="busqueda" placeholder="Ingrese el término de búsqueda" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit" name="buscar" value="Buscar">Buscar</button>
                </form>
                <!-- <form class="d-flex" role="search" method="post" action="libreria/modificar.php">
      <button class="btn btn-outline-success" type="submit" name="buscar" value="Buscar">Modificar</button>
    </form> -->

                <!-- Formulario de búsqueda -->

                <form class="d-flex" method="post" action="libreria/modificar.php">
                    <strong>Modificar Datos</strong>
                    <input class="form-control" type="text" name="busqueda" placeholder="Ingrese el término de búsqueda">
                    <input class="btn btn-outline-success" type="submit" name="buscar" value="Buscar">
                </form>

            </div>
        </nav>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">ID</th>

                    <th scope="col">Nombre</th>

                    <th scope="col">Primer Apellido</th>

                    <th scope="col">Teléfono</th>

                    <th scope="col">Edad</th>


                </tr>
            </thead>
            <tbody>
                <?php
                $numero = 1;
                foreach ($datosPersona as $filaPersona) {
                    $personaId = $filaPersona['id_persona'];
                    $personaNombre = $filaPersona['nombre'];
                    $personaApellido = $filaPersona['apellido'];
                    $personaTelefono = $filaPersona['telefono'];
                    $personaoEdad = $filaPersona['edad'];

                    echo "<tr>";
                    echo "<th scope='row'>" . $numero . "</th>";
                    echo "<td>" . $personaNombre . "</td>";

                    echo "<td>" . $personaApellido . "</td>";

                    echo "<td>" . $personaTelefono . "</td>";
                    echo "<td>" . $personaoEdad . "</td>";
                    echo "<td>
                                <a href='' id='exampleModal2' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                    Modificar
                                </a>
                                
                             </td>";
                    echo "</tr>";

                    $numero++;
                }

                ?>

            </tbody>
        </table>
        <!-- Button trigger modal -->

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Registrar Persona</button>

        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal3">eliminar Persona</button>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Persona</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../../proceso/persona/registrarPersona.php" method="post" class="row g-3needs-validation" novalidate>

                        <div class="col-md-12">
                            <label for="txtNombres" class="form-label">Nombres</label>
                            <input type="text" class="form-control" name="txtNombres" id="txtNombres">
                            <div class="valid-feedback">
                                Digitar el Nombre
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="txtPrimerApellido" class="form-label">Primer Apellido</label>
                            <input type="text" class="form-control" name="txtPrimerApellido" id="txtPrimerApellido">
                            <div class="valid-feedback">
                                Digitar apellido
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="txtTelefono" class="form-label">Teléfono</label>
                            <input type="number" class="form-control" name="txtTelefono" id="txtTelefono">
                            <div class="valid-feedback">
                                Digitar el teléfono
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="txtTelefono" class="form-label">edad</label>
                            <input type="number" class="form-control" name="txtedad" id="txtedad">
                            <div class="valid-feedback">
                                Digitar la edad
                            </div>
                        </div>


                        <button type="submit" class="btn btn-primary" nane="agregar"> <i class="fa-regular fa-floppy-disk"></i> Guardar</button>
                    </form>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <!-- modal -->




    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Registrar Persona</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <label for="txtId">ID de la Persona a Eliminar:</label>
                        <input type="number" name="txtId" id="txtId" required>
                        <button type="submit">Eliminar</button>
                    </form>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>


                </div>
            </div>
        </div>
    </div>








    <script src="../bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
</body>

</html>