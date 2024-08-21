menu=document.querySelectorAll('.drop');
sm=document.querySelectorAll('.sous_menu_box');

for (let i = 0; i <= menu.length; i++) {
    
    menu[i].addEventListener('mouseover', showMenu);
    menu[i].addEventListener('mouseout', hideMenu);

    sm[i].addEventListener('mouseover', showMenu);
    sm[i].addEventListener('mouseout', hideMenu);

    function showMenu() {
        sm[i].classList.add('menu_visible');
    }

    function hideMenu() {
        sm[i].classList.remove('menu_visible');
    }

}