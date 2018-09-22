
// const menu = document.querySelector('#menu');
// const mehuHover = document.querySelector('.menu-hover');
// function showThis() {
//     mehuHover.classList.toggle('appear-menu');
//   }


// menu.addEventListener('click',showThis);

$(document).ready(function(){
    $('#menu').click(function(){
     $(this).next('.header-avoid').slideToggle(1000);
     return false;
    });
   });
