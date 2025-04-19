// Radio button to display on table at time (usrs table / appointment table) in espace admin
document.addEventListener('DOMContentLoaded', ()=> {
    const userListDiv = document.getElementById('userList');
    const aptListDiv = document.getElementById('aptList');
    const userRadio = document.getElementById('user');
    const aptRadio = document.getElementById('apt');

    function toggleList() {
        if (userRadio.checked) {
            userListDiv.classList.remove('hidden');
            userListDiv.classList.add('block');
            aptListDiv.classList.remove('block');
            aptListDiv.classList.add('hidden');
        } else {
            aptListDiv.classList.remove('hidden');
            aptListDiv.classList.add('block');
            userListDiv.classList.remove('block');
            userListDiv.classList.add('hidden');
        }
      }
  
      userRadio.addEventListener('change', toggleList);
      aptRadio.addEventListener('change', toggleList);
  
      toggleList();

});

const areBanned = document.getElementsByClassName('isBanned');

for(let isBanned of areBanned) {

    if(isBanned && isBanned.textContent.trim() === "ISBANNED"){
        isBanned.style.color = "red";
    } 
}

 
function openEditPopup() {
    document.getElementById('editPopup').classList.remove('hidden');
}

function closeEditPopup() {
    document.getElementById('editPopup').classList.add('hidden');
} 
 