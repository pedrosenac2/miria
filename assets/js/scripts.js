/*!
* Start Bootstrap - Small Business v5.0.6 (https://startbootstrap.com/template/small-business)
* Copyright 2013-2023 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-small-business/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project


// // Obtém todos os links de navegação
// var navLinks = document.querySelectorAll('.nav-link');

// // Itera sobre cada link
// for (var i = 0; i < navLinks.length; i++) {
//     // Cria um novo objeto URL usando o href do link
//     var linkUrl = new URL(navLinks[i].href);

//     // Remove o subdiretório do pathname do link, se houver
//     var linkPath = linkUrl.pathname.replace('/subdiretorio', '');

//     // Remove o subdiretório do pathname da página atual, se houver
//     var pagePath = window.location.pathname.replace('/subdiretorio', '');

//     // Verifica se o pathname do link corresponde ao pathname da página atual
//     if (linkPath == pagePath) {
//         // Adiciona a classe 'active' ao link
//         navLinks[i].classList.add('active');
//     }
// }


// Opcional

// var navLinkFooter = document.querySelectorAll('.footer-container .footer-column1 .navigation a');

// for (var i = 0; i < navLinkFooter.length; i++){
//     if(navLinkFooter[i].href == document.URL){
//         navLinkFooter[i].className = 'active';
//     }
// }

// 

// Botão Flutuante

function toggleFAB(fab) {
    if (document.querySelector(fab).classList.contains('show')) {
        document.querySelector(fab).classList.remove('show');
    } else {
        document.querySelector(fab).classList.add('show');
    }
}

document.querySelector('.fab .main').addEventListener('click', function () {
    toggleFAB('.fab');
});

document.querySelectorAll('.fab ul li button').forEach((item) => {
    item.addEventListener('click', function () {
        toggleFAB('.fab');
    });
});