function showSection(section) {
    document.querySelectorAll('.section').forEach(el => el.style.display = 'none');
    document.getElementById(section).style.display = 'block';

    document.querySelectorAll('.sidebar ul li').forEach(el => el.classList.remove('selected'));
    event.target.classList.add('selected');
}

function editRow(button) {
    const row = button.closest('tr');
    const nameCell = row.cells[1];
    const emailCell = row.cells[2];
    
    const newName = prompt("Editar Nombre:", nameCell.innerText);
    const newEmail = prompt("Editar Email:", emailCell.innerText);

    if (newName) nameCell.innerText = newName;
    if (newEmail) emailCell.innerText = newEmail;
}

function deleteRow(button) {
    const row = button.closest('tr');
    row.remove();
}