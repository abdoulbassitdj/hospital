// alert("bonjour");

nav_opener=document.querySelector('.open_nav');
nav_closer=document.querySelector('.close_nav');
nav=document.querySelector('.left');

nav_opener.onclick = () => {

    nav.classList.add("nav_visible");

}

nav_closer.onclick = () => {

    nav.classList.remove("nav_visible");

}