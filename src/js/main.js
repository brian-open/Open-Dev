import "../scss/main.scss";
//import { $, $$ } from "./libs/bling";
import Swiper from 'swiper';

import $ from "jquery";

document.addEventListener("DOMContentLoaded", () => {
    console.log("running...");





    /*
    |--------------------------------------------------
    | Slider
    |--------------------------------------------------
    */


    
    var swiperTestimonial = new Swiper('.swiper-container.testimonial', {
          fadeEffect: { crossFade: true },
          autoplay: {
             delay: 2500,
             disableOnInteraction: true,
          },
          slidersPerView: 1,
          effect: "fade",
          pagination: {
            el: '.swiper-pagination',
            clickable: true,
          },
              
    });
    
var swiperLogos = new Swiper('.swiper-container.logo-carousel', {
      effect: 'slide',
      speed: 900,
      slidesPerView: 5,
      spaceBetween: 20,
      simulateTouch: true,
      autoplay: {
        delay: 5000,
        stopOnLastSlide: false,
        disableOnInteraction: false
      },
      pagination: {
        el: '.carousel-gallery .swiper-pagination',
        clickable: true
      },
      breakpoints: {
        // when window width is <= 320px
        320: {
          slidesPerView: 1,
          spaceBetween: 5
        },
        // when window width is <= 480px
        425: {
          slidesPerView: 4,
          spaceBetween: 10
        },
        // when window width is <= 640px
        768: {
          slidesPerView: 4,
          spaceBetween: 20
        },
        960: {
          slidesPerView: 5,
          spaceBetween: 20
        }, 
        1110: {
          slidesPerView: 8,
          spaceBetween: 40
        },           
      }
});    

    /*
    |--------------------------------------------------
    | ScrollTrigger
    |--------------------------------------------------
    */
    
    function isScrolledIntoView(elem) {
        var docViewTop = $(window).scrollTop();
        var docViewBottom = docViewTop + $(window).height();

        var elemTop = $(elem).offset().top;
        var elemBottom = elemTop + $(elem).height();

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }

    $(window).scroll(function () {
        $('.animate-in').each(function () {
            if (isScrolledIntoView(this) === true) {
                $(this).addClass('in-view')
            }
        });       

    });
    
    /*
    |--------------------------------------------------
    | ScrollTarget
    |--------------------------------------------------
    */

       $(function() {
        $('.smooth-scroll').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html, body').animate({
                scrollTop: target.offset().top -100
              }, 1000);
              return false;
            }
          }
        });
      });      


    /*
    |--------------------------------------------------
    | Testimonial
    |--------------------------------------------------
    */


    
    /*
    |--------------------------------------------------
    | Logo Slider
    |--------------------------------------------------
    */


    /*
    |--------------------------------------------------
    | Hamburger
    |--------------------------------------------------
    */

//    const actionMenu = e => {
//        e.preventDefault();
//        $(".hamburger").classList.toggle("is-active");
//    };
//
//    $(".hamburger").on("touchstart", actionMenu);
//    $(".hamburger").on("click", actionMenu);

    
  $(".hamburger").click(function(event){
  	event.preventDefault();
  	// Check if the hamburger icon is-active (ie. modal is open)
        $('.mobile-menu').toggleClass("menu-open");
        $('nav.main').toggleClass("menu-open");
        $('body').toggleClass("opened");
        $('.hamburger').toggleClass("is-active");
		 $('.full-menu').toggleClass("modal-open");
        $('.head-nav').toggleClass("modal-open");
      $('.scroll-nav').toggleClass("modal-open");
       $('.h-nav').toggleClass("hidden");
	});  
    

    
    
    
    /*
    |--------------------------------------------------
    | Layout
    |--------------------------------------------------
    */

});
