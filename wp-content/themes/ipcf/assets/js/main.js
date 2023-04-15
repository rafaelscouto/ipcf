// on load of the page, use javascript pure
jQuery(document).ready(function($) {

    // menu
    // get the .dropdown-toggle::after element and add the class .fa-angle-down
    $('.dropdown-toggle').append('<i class="fa fa-angle-down"></i>');

    // services
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        responsiveClass:true,
        items:4,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    });

    // search
    const searchIcon = document.querySelector('.search-icon');
    const cancelIcon = document.querySelector('.cancel-icon');
    const buscaDiv = document.querySelector('#busca');
    const searchInput = document.querySelector('#search-input');

    searchIcon.addEventListener('click', function() {
        searchIcon.style.display = 'none';
        cancelIcon.style.display = 'block';
        buscaDiv.classList.add('aberto');
        searchInput.focus();
    });
    cancelIcon.addEventListener('click', function(event) {
        event.preventDefault();
        cancelIcon.style.display = 'none';
        searchIcon.style.display = 'block';
        buscaDiv.classList.remove('aberto');
        searchInput.value = '';
    });

    // menu dropdown
    let dropdowns = document.querySelectorAll('#menu-main .dropdown');
    Array.prototype.forEach.call(dropdowns, function(dropdown) {
  
        dropdown.addEventListener('mouseenter', function() {
        this.querySelector('.dropdown-menu').classList.add('show');
        });
    
        dropdown.addEventListener('mouseleave', function() {
        this.querySelector('.dropdown-menu').classList.remove('show');
        });
    });
});
