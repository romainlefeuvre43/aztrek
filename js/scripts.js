$(document).ready(function() {

  // Responsive menu
  $('.burger').sidr({
    source: '#main-nav',
    displace: false,
    name: 'sidr-main',
  });

  $('header, main, footer').click(function(){
    $.sidr('close', 'sidr-main');
  });

  $('#sidr-main li.sidr-class-has-sub > a').click(function(e){
    e.preventDefault();
    console.log("ICI");
    $(this).next().slideToggle();
  });

  $('.carousel-incontournables').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: ["Précédent", "Suivant"],
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 3
      },
    }
  });
  $('.carousel-pictures').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: ["Précédent", "Suivant"],
    responsive: {
      0: {
        items: 1
      },

    }
  });

  $('.carousel-avis').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    navText: ["Précédent", "Suivant"],
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 3
      },

    }
  });
});
