// script.js

// URL de la consulta PHP que devuelve los datos en formato JSON
const url = 'http://localhost/2024/jueves-/proceso/persona/consultar.php';

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
