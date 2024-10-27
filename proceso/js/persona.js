// script.js

// URL de la consulta PHP que devuelve los datos en formato JSON
const url = 'http://localhost/jueves-/proceso/persona/consultar.php';

// Realiza la solicitud fetch
fetch(url)
    .then(response => {
        if (!response.ok) {
            throw new Error('Error en la respuesta de la red: ' + response.statusText);
        }
        return response.json(); // Devuelve la respuesta en formato JSON
    })
    .then(data => {
        const tbody = document.getElementById('tabla-personas').querySelector('tbody'); // Obtiene el tbody de la tabla
        tbody.innerHTML = ''; // Limpia el contenido actual del tbody

        // Recorre los datos y crea filas para cada persona
        data.forEach(persona => {
            tbody.innerHTML += `
                <tr>
                    <td>${persona.id_persona}</td>
                    <td>${persona.nombre}</td>
                    <td>${persona.apellido}</td>
                    <td>${persona.telefono}</td>
                    <td>${persona.edad}</td>
                    <td><img src="img/boton-editar.png" class="action-btn iconn" onclick="modificar(${persona.id_persona}, '${persona.nombre}', '${persona.apellido}',${persona.telefono}, ${persona.edad})"></td>
                    <td><img src="img/eliminar.png" class="action-btn iconn" data-bs-toggle="modal" data-bs-target="#eliminar"></td>
                </tr>
            `;
        });
    })
    .catch(error => {
        console.error('Hubo un problema con la operación fetch:', error);
    });





    // const url2= 'http://localhost/jueves-/proceso/persona/modificar.php';

function modificar(id, nombre, apellido, telefono, edad) {
    // Cargar los datos en los campos del formulario
    document.getElementById('editarId').value = id;
    document.getElementById('editarNombre').value = nombre;
    document.getElementById('editarApellido').value = apellido;
    document.getElementById('editarCelular').value = telefono;
    document.getElementById('editarEdad').value = edad;

    // Mostrar el modal
    const modal = new bootstrap.Modal(document.getElementById('editar'));
    modal.show();
}






// // Función para abrir el formulario de edición en el modal y cargar los datos
// function abrirModalEditar(id, nombre, apellido, telefono, edad) {
//     // Establece los valores en el formulario de edición dentro del modal
//     document.getElementById('editarId').value = id;
//     document.getElementById('editarNombre').value = nombre;
//     document.getElementById('editarApellido').value = apellido;
//     document.getElementById('editarCelular').value = telefono;
//     document.getElementById('editarEdad').value = edad;

//     // Muestra el modal de edición (Bootstrap se encarga de mostrarlo al activar `data-bs-toggle="modal"`)
// }

// // Configura el formulario para enviar los datos mediante fetch en lugar de recargar la página
// document.querySelector('#editar form').addEventListener('submit', function(event) {
//     event.preventDefault(); // Evitar el envío normal del formulario

//     // Obtiene los datos del formulario
//     const formData = new FormData(event.target);
//     const datos = {};
//     formData.forEach((value, key) => datos[key] = value);

//     // Realiza la solicitud para enviar los datos al servidor para su actualización
//     fetch("http://localhost/jueves-/proceso/persona/modificar.php", {
//         method: "POST",
//         headers: {
//             "Content-Type": "application/json"
//         },
//         body: JSON.stringify(datos)
//     })
//     .then(response => response.json())
//     .then(data => {
//         if (data.success) {
//             alert("Modificación exitosa");
//             location.reload(); // Recarga la página para actualizar la tabla
//         } else {
//             alert("Error al modificar");
//         }
//     })
//     .catch(error => {
//         console.error("Error en la solicitud:", error);
//         alert("Error en la conexión con el servidor");
//     });
// });