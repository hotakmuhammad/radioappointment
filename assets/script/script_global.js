const areBanned = document.getElementsByClassName('isBanned'); 
 
for(let isBanned of areBanned) {

    if(isBanned && isBanned.textContent.trim() === "ISBANNED"){
        isBanned.style.color = "red";
    }  
} 
 
  const userBtn = document.getElementById('userMenuButton');
  const userDropdown = document.getElementById('userDropdown');
  const mobileBtn = document.getElementById('mobileMenuButton');
  const mobileMenu = document.getElementById('mobileMenu');

  userBtn.addEventListener('click', () => {
    userDropdown.classList.toggle('hidden');
  });

  mobileBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

  // Optional: Close dropdown when clicking outside
  document.addEventListener('click', (e) => {
    if (!userBtn.contains(e.target) && !userDropdown.contains(e.target)) {
      userDropdown.classList.add('hidden');
    }
  });