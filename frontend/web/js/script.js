$(document).ready(function () {
  // ** HEADER MENU BURGER
  $('.header__burger').click(function (event) {
    $('.header__burger,.header__menu').toggleClass('active');
    $('body').toggleClass('lock');

    //if burger is black

  });

  $('.header__search-icon').click(function (event) {
    $('.header__search-input, .header__categories').toggleClass('active');
  });
  // ** HEADER MENU BURGER END

  // ** MAIN PAGE LAST NEWS CARUSEL
  $(".last_news_carousel").owlCarousel({
    center: true,
    loop: true,
    dots: false,
    rewindNav: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 2000,
    animateOut: 'slideOutUp',
    animateIn: 'slideInUp',
    items: 1,
    responsive: {
      // breakpoint from 0 up
      0: {
        items: 1,
      },
      // breakpoint from 480 up
      480: {
        items: 2,
      },
      // breakpoint from 768 up
      768: {
        items: 3,
      },

      1024: {
        items: 4,
      },
      1230: {
        items: 5,
      }
    }
  });

  // ** MAIN PAGE MAIN NEWS CARUSEL
  $(".main_news_carousel").owlCarousel({
    center: true,
    loop: true,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 3000,
    items: 1,
  });
});

//Bottom to Top BTN

mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () { scrollFunction() };

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
