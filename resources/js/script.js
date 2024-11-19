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