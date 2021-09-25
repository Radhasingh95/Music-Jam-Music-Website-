document.onkeydown = function (e) {
    console.log("Key code is : ", e.keyCode);
    if(e.keyCode == 38){
        dino = document.querySelector('.dino');
        dino.classList.add('animateDino');
        setTimeout(()=>{
            dino.classList.remove('animateDino');
        },700);
    }
}