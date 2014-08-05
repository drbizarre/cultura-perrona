// Setting some variables
var isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
var windowHeight = jQuery(window).height();	
var windowWidth = jQuery(window).width();
var navHeight = jQuery('header.navbar').height();
function saveCart(){
	$("#secplay").removeClass("col-sm-offset-2");
	$("#carrito").hide();
	$("#secpagar").removeClass("col-sm-4").addClass("col-sm-8");
	$("#secpagar").show();
}
function dicemimamaquesiempreno(){
	$("#secplay").addClass("col-sm-offset-2");
	$("#secpagar").hide();
}

/*=================================================================*/
// Preloader
$( window ).load(function() {
	'use strict';
    jQuery("#loading-animation").fadeOut();
    jQuery("#preloader").delay(600).fadeOut("slow");
});
/*=================================================================*/
simpleCart({
	// array representing the format and columns of the cart,
	// see the cart columns documentation
	cartColumns: [
		//{ attr: "name", label: "Concepto"},
		{ attr: "size", label: "Talla"},
		{ attr: "gender", label: "Tipo"},
		{ view: "currency", attr: "price", label: "Precio"},
		//{ view: "decrement", label: false},
		{ attr: "quantity", label: "Cant"},
		//{ view: "increment", label: false},
		{ view: "currency", attr: "total", label: "Subtotal" },
		{ view: "remove", text: "-", label: false}
	],

	// "div" or "table" - builds the cart as a 
	// table or collection of divs
	cartStyle: "table", 

	// how simpleCart should checkout, see the 
	// checkout reference for more info 
	checkout: { 
		type: "SendForm" , 
		url: "checkout.php",
		method: "POST",  
	},

	// set the currency, see the currency 
	// reference for more info
	currency: "USD",

	// collection of arbitrary data you may want to store 
	// with the cart, such as customer info
	data: {},

	// set the cart langauge 
	// (may be used for checkout)
	language: "english-us",

	// array of item fields that will not be 
	// sent to checkout
	excludeFromCheckout: [],

	// custom function to add shipping cost
	shippingCustom: null,

	// flat rate shipping option
	shippingFlatRate: 0,

	// added shipping based on this value 
	// multiplied by the cart quantity
	shippingQuantityRate: 0,

	// added shipping based on this value 
	// multiplied by the cart subtotal
	shippingTotalRate: 0,

	// tax rate applied to cart subtotal
	taxRate: 0,

	// true if tax should be applied to shipping
	taxShipping: false,

	// event callbacks 
	beforeAdd			: null,
	afterAdd			: null,
	load				: null,
	beforeSave		: null,
	afterSave			: null,
	update			: null,
	ready			: null,
	checkoutSuccess	: null,
	checkoutFail		: null,
	beforeCheckout		: null,
        beforeRemove           : null
});
jQuery(document).ready(function() {
 $('a.photoh').zoom({url: 'images/bigh.jpg',magnify:1});
 $('a.photom').zoom({url: 'images/bigm.jpg'});
 $('#tipo').change(function() {
 	if ($("#tipo").val()=="m") {
 		$("#fotoi").attr("src","images/smallm.jpg")
 		$("#fotoa").removeClass("photoh").addClass("photom").zoom({url: 'images/bigm.jpg'});
 	}
  	if ($("#tipo").val()=="h") {
 		$("#fotoi").attr("src","images/smallh.jpg")
 		$("#fotoa").removeClass("photom").addClass("photoh").zoom({url: 'images/bigh.jpg'});
 	}	
 });


	"use strict";
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	var field = current_fs.attr("id");
	if (field=='personal-data') { console.log("validar personal-data");}
	if (field=='shipping-details') { console.log("validar shipping-details");}

	next_fs = $(this).parent().next();
	
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	console.log("validar payment");
	return false;
})	
	/*=================================================================
		set home section height to fullscreen
	===================================================================*/
	jQuery('#home').css('height', windowHeight);
	
	// Parallax Backgrounds
		$(window).scroll(function(){
		var scrollAmount = $(window).scrollTop()/2;
		$('#home-slider .wrap').css('padding-top', scrollAmount);	
		});	
	
	skrollr.init();
	/*==========================================================*/
/* Swiper slider
/*==========================================================*/

	/* Initialize sliders */

	var swiper = [];
	$('.swiper').each(function(i,obj){
		swiper[i] = new Swiper(obj, {
			loop: true,
			calculateHeight: true	
		});
		// Bind navigation arrows
		$(this).children('.nav-left').on('click', function(e){
			e.preventDefault();
			swiper[i].swipePrev();
		});
		$(this).children('.nav-right').on('click', function(e){
			e.preventDefault();
			swiper[i].swipeNext();
		});
	});

	/* Resize fix for IE11 */

	$(window).on('load', function(){
		swiper.forEach(function(entry) {
			window.setTimeout(function() { entry.resizeFix(); }, 500);
		});
	});

		
	/*=================================================================
	ANIMATE CONTENT       
	===================================================================*/                                                             
    if (isMobile == false) {
        $('*[data-animated]').addClass('animated');
    }
	function animated_contents() {
		$(".animated:appeared").each(function (i) {
			var $this    = $(this),
				animated = $(this).data('animated');

			setTimeout(function () {
				$this.addClass(animated);
			},180);
			
		});
	}
	animated_contents();
	$(window).scroll(function () {
		animated_contents();
	});

	/*=================================================================
	Gallery-Venobox Responsive Lightbox
	===================================================================*/       
	$('.venobox, .image-lightbox-link').venobox({
		numeratio: true
    }); 
	
	/*=================================================================
	show-hide navigation
	===================================================================*/ 
	var windowOffsetHeight = windowHeight - 1;
	if (!jQuery('header.navbar').hasClass('show')) {
		jQuery(window).scroll(function() {
			if ( jQuery(this).scrollTop() > 50 ) {
				jQuery('header.navbar').addClass('show');
			}
			else {
				jQuery('header.navbar').removeClass('show');
			}
		});
	};
	
	/*=================================================================
	show-hide about description
	===================================================================*/ 
	$('#about-section .hidden-block').find('a').click(function(e) {
		var itemID = $(this).attr('href');
		$('#about-section').addClass('portfolio-open');
		$(itemID).addClass('portfolio-open');		
		return false;
	});
	$('#intro-close').click(function() {
		$('.intro-full').removeClass('portfolio-open');
		$('#about-section').removeClass('portfolio-open');
		return false;
	});
	// Close using "ESC" key
	jQuery(document).keyup(function(e) {
		if (e.keyCode == 27) {
			$('.intro-full').removeClass('portfolio-open');
			$('#about-section').removeClass('portfolio-open');
			return false;
		}
	});
	
	/*=================================================================
	show-hide contact from
	===================================================================*/ 
	$('#contact-section .hidden-block').find('a').click(function(e) {
		var itemID = $(this).attr('href');
		$('#contact-section').addClass('portfolio-open');
		$(itemID).addClass('portfolio-open');		
		return false;
	});
	$('#contact-close').click(function() {
		$('.form-full').removeClass('portfolio-open');
		$('#contact-section').removeClass('portfolio-open');
		return false;
	});
	// Close using "ESC" key
	jQuery(document).keyup(function(e) {
		if (e.keyCode == 27) {
			$('.form-full').removeClass('portfolio-open');
			$('#contact-section').removeClass('portfolio-open');
			return false;
		}
	});
	
	/*=================================================================
	Portfolio: Isotope Layout Plugin
	===================================================================*/ 

	var container = jQuery('#portfolio-list');
	// Portfolio: Number of columns
	// 2 columns grid for mobile
	// 3 columns grid for tablet & desktop
	function portfolioColumnNumber() {
			if (windowWidth < 768) {
			var portfolioColumns = 2;
		}
		else if (windowWidth >= 768) {
			var portfolioColumns = 3;
		}
		return portfolioColumns;
	}
	
	/*=================================================================
	Initialize Isotope & Masonry Layout
	===================================================================*/ 

	container.imagesLoaded( function() {
		container.isotope({
		  itemSelector: 'li',
		  resizable: false,  // disable normal resizing
		  masonry: { columnWidth: container.width() / portfolioColumnNumber }
		 });
	 });
	
	/*=================================================================
	Update portfolio layout when resizing the browser window
	===================================================================*/ 

	jQuery(window).smartresize(function() {
		container.isotope({
	    masonry: { columnWidth: container.width() / portfolioColumnNumber }
	  });
	});
    jQuery(window).smartresize();

	/*=================================================================
	Initialize Portfolio Filter (on click)
	===================================================================*/ 
 
	jQuery('#portfolio-filter a').click(function(e) {		
			e.preventDefault();		
	  var selector = jQuery(this).attr('data-filter');
	  container.isotope({ filter: selector });		
		// Active Filter Class
		jQuery('#portfolio-filter').find('.active').removeClass('active');
		jQuery(this).parent().addClass('active');		
		return false;		
	});
	
	/*=================================================================
	Portfolio 
	===================================================================*/ 

	var portfolio = jQuery('#portfolio-list');
	var portfolioItem = portfolio.find('li');
	var projectLength = portfolioItem.length;
	var prevButton = jQuery('#project-container .prev');
	var nextButton = jQuery('#project-container .next');
	
	/*=================================================================
	Portfolio Direction Aware Hover Effect
	===================================================================*/ 

	portfolio.find('li').each(function() { 
		jQuery(this).hoverdir({
			speed : 			300,
			hoverDelay : 100,
			inverse : true
		});
	});
	
	
	/*=================================================================
	portfolio Opening a Project
	===================================================================*/ 

	portfolioItem.find('a').click(function(e) {
		var itemID = $(this).attr('href');
		$('#portfolio-section').addClass('portfolio-open');
		$(itemID).addClass('portfolio-open');		
		return false;
	});
	$('#portfolio-close').click(function() {
		$('.portfolio-full').removeClass('portfolio-open');
		$('#portfolio-section').removeClass('portfolio-open');
		return false;
	});
	// Close using "ESC" key
	jQuery(document).keyup(function(e) {
		if (e.keyCode == 27) {
			$('.portfolio-full').removeClass('portfolio-open');
			$('#portfolio-section').removeClass('portfolio-open');
			return false;
		}
	});

	/*=================================================================
	Bootstrap Plugins : Navigation - Collapse (for mobile)
	===================================================================*/ 
	jQuery('.navbar .collapse').collapse();
	jQuery(".navbar-nav li a").click(function() {
		jQuery(".collapse").toggleClass("in");
	});
	

	/*=================================================================
	Contact form
	===================================================================*/ 

	contentEditable();contactForm();
	

	/*=================================================================
	clients slider	
	===================================================================*/ 
	
	$("#client-slider").owlCarousel({
        navigation: false,
        pagination: false,
		autoPlay:5000,
        items: 5,
        navigationText: false
    });

	$("#home-slider").owlCarousel({
        navigation: false,
        pagination: false,
        items: 1,
		autoPlay:5000,
		itemsDesktop : [1000,1], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,1], // betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0
        navigationText: false,
		transitionStyle : "backSlide"
    });
	
	/*=================================================================
	testimonial slider
	===================================================================*/ 

	$("#testimonial-slider").owlCarousel({
        navigation: false,
        pagination: false,
        items: 1,
		autoPlay:5000,
		itemsDesktop : [1000,1], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,1], // betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0
        navigationText: false,
		transitionStyle : "backSlide"
    });
	
	/*=================================================================
	gallery slider
	===================================================================*/ 
	$("#gallery-slider").owlCarousel({
        navigation: false,
        pagination: false,
		autoPlay:5000,
        items: 3,
        navigationText: false
    });
	
	/*=================================================================
	Service slider
	===================================================================*/ 
	$("#service-slider").owlCarousel({
        navigation: false,
        pagination: false,
		autoPlay:5000,
        items: 3,
		itemsDesktop : [1000,3], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,2], // betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0
        navigationText: false
    });
	
	/*=================================================================
	Post slider
	===================================================================*/ 
	$("#post-slider").owlCarousel({
        navigation: false,
        pagination: false,
		autoPlay:5000,
        items: 2,
		itemsDesktop : [1000,2], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,2], // betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0
        navigationText: false
    });
	
	/* Fullscreen slider 

	var fSwiper = new Swiper('#fullscreen-slider',{
		mode:'horizontal',
			loop: false,
			longSwipesRatio: 0.3,
			speed:1200,
			autoplay:5000,
			autoplayStopOnLast:true,
			keyboardControl: true,
			mousewheelControl: false,
	
		onSwiperCreated: function() {			
			$('.swiper-slide-active .hiResImg').addClass('visible');			
		},
        onSlideChangeEnd: function() {
          $('.swiper-slide-active .hiResImg').addClass('visible');
        },
		onSetWrapperTransition: function(swiper, speed) {        
			$('.swiper-slide .hiResImg').removeClass('visible');
		},
		onSlideChangeStart: function() {
			// Hide arrow on first and last slide
			if (fSwiper.activeIndex == 0) {
				$('#nav-arrows .nav-left').addClass('hidden');
			} else {
				$('#nav-arrows .nav-left').removeClass('hidden');
			}
			if (fSwiper.activeIndex == (fSwiper.slides.length - 1)) {
				$('#nav-arrows .nav-right').addClass('hidden');
			} else {
				$('#nav-arrows .nav-right').removeClass('hidden');
			}
		}
	});
	// Bind external navigation arrows for fullscreen slider
	$('#nav-arrows .nav-left').on('click', function(e){
		e.preventDefault();
		fSwiper.swipePrev();
	});
	$('#nav-arrows .nav-right').on('click', function(e){
		e.preventDefault();
		fSwiper.swipeNext();
	});*/
	
}); 
// END jQuery(document).ready()

jQuery(window).load(function() {

	/*=================================================================
	Activate animate.css effects once page is loaded
	http://css-tricks.com/transitions-only-after-page-load/
	===================================================================*/ 
	
	jQuery("body").removeClass("loading");
  
	
		/*=================================================================
	Smooth scroll for menu links
	===================================================================*/       		
	jQuery('header.navbar a[href^="#"], #home a.scroll[href^="#"]').on('click', function (e) { 
		e.preventDefault(); 
		var jqBH = jQuery('html,body'); jqBH.unbind("scroll mousedown DOMMouseScroll mousewheel keyup"); 
		jqBH.bind("scroll mousedown DOMMouseScroll mousewheel keyup", function(){ jqBH.stop(true); }); 
		jqBH.stop(true).animate({scrollTop: jQuery(this.hash).offset().top-78}, 1200, function (){ jqBH.unbind("scroll mousedown DOMMouseScroll mousewheel keyup"); }); 
	});
	// Smooth scroll for menu links
	jQuery('.backtop a[href^="#"]').on('click', function(e) {	
    e.preventDefault();
    jQuery('html,body').animate({scrollTop:jQuery(this.hash).offset().top}, 1200);
	});

	
	
	/*=================================================================
	TwitterFeed
	===================================================================*/ 
	
	$('#twitter-box').tweet({
	    modpath: 'js/twitter/',
	    list_id: 'twitter-box',
	    count: 4,
	    avatar_size: 0,
	    loading_text: 'loading twitter feed',
	    username:'contact20twelve'
	});
	
	/*=================================================================
	twitter slider
	===================================================================*/ 
	
	$("#tweet-slider").owlCarousel({
        navigation: true,
        pagination: false,
        items: 1,
        navigationText: false,
		autoPlay:3000,
		itemsDesktop : [1000,1], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,1], // betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0
		transitionStyle : "goDown"
    });
	
	/*=================================================================
	values slider
	===================================================================*/ 
	
	$("#values-slider").owlCarousel({
        navigation: true,
        pagination: false,
        items: 1,
        navigationText: false,
		autoPlay:3000,
		itemsDesktop : [1000,1], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,1], // betweem 900px and 601px
		itemsTablet: [600,1], //2 items between 600 and 0
		transitionStyle : "goDown"
    });
	
	/*=================================================================
	Parallax 
	===================================================================*/ 
	jQuery('.parallax').each(function() {
			parallax();
	});
	
	
	

});
// END Window.load()

/*=================================================================
	Bootstrap Specific
===================================================================*/       
	
/*parallax scrolling effects to any scrolling element*/
function parallax() {
	// Check for mobile
	if( !isMobile ) {
		jQuery(window).stellar({
			horizontalScrolling: false
		});
	}
}

/*Contact from*/
function contentEditable(){
	function e(t){
		var n=jQuery.Event("keypress",{which:t});
		t.keyCode!==9?$(this).text("").addClass("js-populated").removeClass("js-error").trigger(n):$(this).one("keypress",e)
	}
	$("[contenteditable=true]").each(function(){
		var t=$(this).data("placeholder");
		$(this).one("keypress",e);
		$(this).keyup(function(){
			if($(this).text().length===0){
				$(this).text(t).removeClass("js-populated");
				$(this).one("keypress",e)
			}
		})
	});
	$("[contenteditable=true]").focus(function(){
		$(this).removeClass("js-error")
	})
}

function contactForm(){
	
	function e(e){
		var t=/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		return t.test(e)
	}
	$(".js-contact-form").submit(function(){
		var i=$(".js-contact-email"),
			s=$(".js-contact-name"),			
			u=$(".js-contact-brief"),
			a=1;
			
			i.removeClass("js-error");s.removeClass("js-error");
			if(i.text()===i.data("placeholder")){i.addClass("js-error");a=0}else if(!e(i.text())){i.addClass("js-error");a=0}if(s.text()===s.data("placeholder")){s.addClass("js-error");a=0}if(u.text()===u.data("placeholder")){u.addClass("js-error");a=0}if(!a)return!1
			
			//send the ajax request
			$.post('email.php',{name:$(".js-contact-name").text(),
							  email:$(".js-contact-email").text().replace(/(\r\n|\n|\r)/gm,"").replace(/\s+/g," "),
							  message:$(".js-contact-brief").text().replace(/(\r\n|\n|\r)/gm,"").replace(/\s+/g," ")},
		
			//return the data
			function(data){
			  $(".js-mail-message").addClass("js-hidden");
				$(".js-contact-submit").addClass("js-hidden");
				$(".js-mail-success").removeClass("js-hidden")
			});
			//stay on the page
			return false;
	})
}

