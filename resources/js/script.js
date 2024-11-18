let isOpen = false;
let toggleButton = document.querySelector("#toggleButton");
let menuOverlay = document.querySelector("#mobile-menu");
let isClicked = false;

if(isOpen ==true){
    console.log('open');

    toggleButton.innerText = 'X'
    // menuOverlay.classList.remove('hidden')
}else if(isOpen ==false){
    console.log('closed');

    toggleButton.innerText = '='
    // menuOverlay.classList.add('hidden')
}

// toggleButton.addEventListener('click', function(){
//     isOpen = true;
//     console.log('click', isOpen);

// })

toggleButton.addEventListener('click', function () {
    console.log('click');
    if (menuOverlay.style.display == "block") { // if is menuOverlay displayed, hide it
        menuOverlay.style.display = "none";
        menuOverlay.classList.remove('showMenu');
    }
    else { // if is menuOverlay hidden, display it
        menuOverlay.style.display = "block";
        menuOverlay.classList.add('showMenu');
    }

})