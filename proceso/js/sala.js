const urlSala = 'http://localhost/2024/jueves-/proceso/sala/consultar.php';

fetch(urlSala)
    .then(response => {
        if (!response.ok) {
            throw new Error('Error en la respuesta de la red: ' + response.statusText);
        }
        return response.json(); // Devuelve la respuesta en formato JSON
    })
    .then(data => {
        const tablaSala = document.getElementById('tabla-sala').querySelector('tbody');
        tablaSala.innerHTML = ''; // Limpia el contenido actual del tbody

        data.forEach(sala => {
            tablaSala.innerHTML += `
                <tr>
                    <td>${sala.id_sala}</td>
                    <td>${sala.nombresala}</td>
                    <td>${sala.capacidad}</td>
                    <td>${sala.fechacreacion}</td>
                    <td>${sala.nombrejuego}</td>
                    <td>${sala.tematicajuego}</td>
                    <td>${sala.dificultadjuego}</td>
                    <td>${sala.modojuego}</td>
                    <td>${sala.nombrecreador}</td>
                    <td><img src="img/boton-editar.png" class="action-btn iconn" onclick="modificar(${sala.id_sala}, '${sala.nombreSala}', ${sala.capacidad}, '${sala.nombreJuego}', '${sala.tematicaJuego}', '${sala.dificultadJuego}', '${sala.modoJuego}', '${sala.nombreCreador}')"></td>
                    <td><img src="img/eliminar.png" class="action-btn iconn" onclick="eliminar(${sala.id_sala})"></td>
                </tr>
            `;
        });
    })
    .catch(error => {
        console.error('Hubo un problema con la operación fetch:', error);
    });
