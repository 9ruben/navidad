/*Inicio Barra de Busqueda*/
let searchBtn = document.querySelector('#search-btn');
let searchForm = document.querySelector('.header .search-form');

searchBtn.onclick = () =>{
    searchBtn.classList.toggle('fa-times');
    searchForm.classList.toggle('active');

    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}
/*Fin Barra de Busqueda*/

/*Inicio Barra de Menu*/
let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');

    searchBtn.classList.remove('fa-times');
    searchForm.classList.remove('active');
}
/*Fin Barra de Menu*/

Window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchForm.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

/*Inicio Home*/
let slides = document.querySelectorAll('.home .slide');
let index = 0;

function next(){
    slides[index].classList.remove('active');
    index = (index + 1) % slides.length;
    slides[index].classList.add('active');
}

function prev(){
    slides[index].classList.remove('active');
    index = (index - 1 + slides.length) % slides.length;
    slides[index].classList.add('active');
}

 let respuesta = "";

        while (respuesta !== "S" && respuesta !== "N") {
          respuesta = prompt("Desea continuar S / N");
        }

        if (respuesta === "S") {
          // Realizar la conversión nuevamente
        } else {
          // Finalizar el programa
        }