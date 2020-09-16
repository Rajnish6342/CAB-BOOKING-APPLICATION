/************* Main Js File ************************
    Template Name: gauto
    Author: Themescare
    Version: 1.0
    Copyright 2019
*************************************************************/


/*------------------------------------------------------------------------------------
    
JS INDEX
=============

01 - Main Slider JS
02 - Select JS
03 - Clockpicker JS
04 - Service Slider JS
05 - Testimonial Slider JS
06 - Responsive Menu JS
07 - Back To Top




-------------------------------------------------------------------------------------*/


(function ($) {
	"use strict";

	jQuery(document).ready(function ($) {


		/* 
		=================================================================
		01 - Main Slider JS
		=================================================================	
		*/

		$(".gauto-slide").owlCarousel({
			animateOut: 'fadeOutLeft',
			animateIn: 'fadeIn',
			items: 2,
			nav: true,
			dots: false,
			autoplayTimeout: 9000,
			autoplaySpeed: 5000,
			autoplay: true,
			loop: true,
			navText: ["<img src='assets/img/prev-1.png'>", "<img src='assets/img/next-1.png'>"],
			mouseDrag: true,
			touchDrag: true,
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 1
				},
				600: {
					items: 1
				},
				750: {
					items: 1
				},
				1000: {
					items: 1
				},
				1200: {
					items: 1
				}
			}
		});

		$(".gauto-slide").on("translate.owl.carousel", function () {
			$(".gauto-main-slide h2").removeClass("animated fadeInUp").css("opacity", "0");
			$(".gauto-main-slide p").removeClass("animated fadeInDown").css("opacity", "0");
			$(".gauto-main-slide .gauto-btn").removeClass("animated fadeInDown").css("opacity", "0");
		});
		$(".gauto-slide").on("translated.owl.carousel", function () {
			$(".gauto-main-slide h2").addClass("animated fadeInUp").css("opacity", "1");
			$(".gauto-main-slide p").addClass("animated fadeInDown").css("opacity", "1");
			$(".gauto-main-slide .gauto-btn").addClass("animated fadeInDown").css("opacity", "1");
		});

		/* 
		=================================================================
		02 - Select JS
		=================================================================	
		*/

		$('select').niceSelect();

		/* 
		=================================================================
		03 - Clockpicker JS
		=================================================================	
		*/

		$('.clockpicker').clockpicker();


		/* 
		=================================================================
		04 - Service Slider JS
		=================================================================	
		*/

		$(".service-slider").owlCarousel({
			autoplay: true,
			loop: true,
			margin: 25,
			touchDrag: true,
			mouseDrag: true,
			items: 1,
			nav: false,
			dots: true,
			autoplayTimeout: 6000,
			autoplaySpeed: 1200,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 1
				},
				600: {
					items: 2
				},
				1000: {
					items: 3
				},
				1200: {
					items: 3
				}
			}
		});


		/* 
		=================================================================
		05 - Testimonial Slider JS
		=================================================================	
		*/

		$(".testimonial-slider").owlCarousel({
			autoplay: true,
			loop: true,
			margin: 25,
			touchDrag: true,
			mouseDrag: true,
			items: 1,
			nav: false,
			dots: true,
			autoplayTimeout: 6000,
			autoplaySpeed: 1200,
			navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
			responsive: {
				0: {
					items: 1
				},
				480: {
					items: 1
				},
				600: {
					items: 1
				},
				1000: {
					items: 3
				},
				1200: {
					items: 3
				}
			}
		});


		/* 
		=================================================================
		06 - Responsive Menu JS
		=================================================================	
		*/
		$("ul#gauto_navigation").slicknav({
			prependTo: ".gauto-responsive-menu"
		});


		/* 
		=================================================================
		07 - Back To Top
		=================================================================	
		*/
		if ($("body").length) {
			var btnUp = $('<div/>', {
				'class': 'btntoTop'
			});
			btnUp.appendTo('body');
			$(document).on('click', '.btntoTop', function () {
				$('html, body').animate({
					scrollTop: 0
				}, 700);
			});
			$(window).on('scroll', function () {
				if ($(this).scrollTop() > 200) $('.btntoTop').addClass('active');
				else $('.btntoTop').removeClass('active');
			});
		}


	});


}(jQuery));

