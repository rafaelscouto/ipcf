// on load of the page
jQuery(document).ready(function($) {

    // menu
    $('.dropdown-toggle').append('<i class="fa fa-angle-down"></i>');

    // services
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:20,
        nav:true,
        dots: false,
        responsiveClass:true,
        autoplay:true,
        autoplayTimeout:3500,
        items:4,
        navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:2
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

    // search mobile
    const searchMobileIcon = document.querySelector('.search-icon-mobile');
    const cancelMobileIcon = document.querySelector('.cancel-icon-mobile');

    searchMobileIcon.addEventListener('click', function() {
        searchMobileIcon.style.display = 'none';
        cancelMobileIcon.style.display = 'block';
        buscaDiv.classList.add('aberto');
        searchInput.focus();
    });
    cancelMobileIcon.addEventListener('click', function(event) {
        event.preventDefault();
        cancelMobileIcon.style.display = 'none';
        searchMobileIcon.style.display = 'block';
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

    let phone = document.querySelector('#newsletter-input-phone');

    // apply mask on phone input on newsletter form using jquery.inputmask.min.js and remove on submit
    phone.addEventListener('focus', function() {
        $(this).inputmask("(99) 99999-9999");
    });

    // remove mask on submit
    let form = document.querySelector('.wpcf7-form');
    form.addEventListener('submit', function() {
        $(this).inputmask("remove");
    });
});
