let isOpen = false;
let toggleButton = document.querySelector("#toggleButton");
let menuOverlay = document.querySelector("#mobile-menu");
let isClicked = false;

if (!isOpen) {
    toggleButton.innerText = '='
}
//  else if (isOpen == false) {
//     console.log('closed', isOpen);

//     toggleButton.innerText = '='
//     // menuOverlay.classList.add('hidden')
// }

toggleButton.addEventListener('click', function () {
    menuOverlay.classList.toggle("open")
    if (menuOverlay.classList.contains("open")) {
        toggleButton.innerText = 'X'

    } else {
        setTimeout(()=> {toggleButton.innerText = '='}, 750);
    }
})