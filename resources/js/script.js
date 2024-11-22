//! navbar toggle
let isOpen = false;
let toggleButton = document.querySelector("#toggleButton");
let toggleIcon = document.querySelector("#toggleIcon");
let menuOverlay = document.querySelector("#mobile-menu");

toggleButton.classList.add('text-slate-400', 'flex', 'items-center', 'px-3', 'py-2', 'border', 'rounded', 'border-slate-400', 'hover:text-white', 'hover:border-white')
toggleIcon.classList.add('bi-list')

toggleButton.addEventListener('click', function () {
    menuOverlay.classList.toggle("open");
    if (menuOverlay.classList.contains("open")) {
        toggleIcon.classList.add('bi-x-lg')
        toggleIcon.classList.remove('bi-list')


    } else {

        setTimeout(() => {
            toggleIcon.classList.remove('bi-x-lg')
            toggleIcon.classList.add('bi-list')
        }, 500);
    }
})

// ! collapse section

let collapseArrow = document.querySelector('.collapse-arrow')
let collapseSelector = document.querySelector('.collapseSelector')
let toBeCollapsed = document.querySelector('.toBeCollapsed')


collapseArrow.classList.add('bi-arrow-down-circle')

collapseSelector.addEventListener('click', function () {
    toBeCollapsed.classList.toggle("openCollapse")
    if (toBeCollapsed.classList.contains("openCollapse")) {
        collapseArrow.classList.replace('bi-arrow-right-circle', 'bi-arrow-down-circle');
    } else {
        collapseArrow.classList.replace('bi-arrow-down-circle', 'bi-arrow-right-circle');
    }
})
// ! typing
import Typed from 'typed.js';
var typed = new Typed('#typed', {
    stringsElement: '#typed-strings',
    typeSpeed: 80,
        startDelay: 300,
        backSpeed: 100,
        showCursor: false
});
