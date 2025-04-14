// Radio button to display on table at time (usrs table / appointment table) in espace admin
document.addEventListener('DOMContentLoaded', ()=> {
    const userListDiv = document.querySelector('.usersList');
    const aptListDiv = document.querySelector('.aptList');
    const radios = document.querySelectorAll('input[name="listType"]');

    radios.forEach(radio =>{
        radio.addEventListener('change', () => {
            if(radio.value ==='users') {
                userListDiv.style.display = 'block';
                aptListDiv.style.display = 'none';
            } else if( radio.value === 'appointments') {
                userListDiv.style.display = 'none';
                aptListDiv.style.display = 'block';
            }
        });
    });
});

// Edite profiles - delete profiels popups in espace admin

function openEditPopup() {
    document.getElementById('editPopup').classList.remove('hidden');
}

function closeEditPopup() {
    document.getElementById('editPopup').classList.add('hidden');
}

function openDeletePopup() {
    document.getElementById('deletePopup').classList.remove('hidden');
}

function closeDeletePopup() {
    document.getElementById('deletePopup').classList.add('hidden');
    }

// function openDeletePopup(userId) {
//     document.getElementById('deletePopup').classList.remove('hidden');
//     document.getElementById('confirmDeleteLink').href = 'http://localhost/radioappointment/user/delete?id' + userId;
// }

// function closeDeletePopup() {
//     document.getElementById('deletePopup').classList.add('hidden');
//     document.getElementById('confirmDeleteLink').href = 'http://localhost/radioappointment/user/manage';
// }
