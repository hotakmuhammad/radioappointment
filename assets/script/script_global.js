
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
