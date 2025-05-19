const areBanned = document.getElementsByClassName('isBanned'); 
 
for(let isBanned of areBanned) {

    if(isBanned && isBanned.textContent.trim() === "ISBANNED"){
        isBanned.style.color = "red";
    }  
} 
 