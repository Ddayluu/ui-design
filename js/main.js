const menuIcon = document.getElementById('menu-icon');
const slideMenu = document.getElementById('slide-menu');
const searchIcon = document.getElementById('search-icon');
const searchBox = document.getElementById('search-box');

searchIcon.addEventListener('click', function () {
    // debugger
    if (searchBox.style.top == '72px') {
        searchBox.style.top = '24px';
        searchBox.style.pointerEvents = 'none';
    } else {
        searchBox.style.top = '72px';
        searchBox.style.pointerEvents = 'auto';
    }
});

menuIcon.addEventListener('click', function () {
    if (slideMenu.style.opacity == 1) {
        slideMenu.style.opacity = '0';
        slideMenu.style.pointerEvents = 'none';
    } else {
        slideMenu.style.opacity = '1';
        slideMenu.style.pointerEvents = 'auto';
    }
})