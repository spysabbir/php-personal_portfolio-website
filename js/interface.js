( function($) {
  'use strict';
  	

  	/* Window Load */
	$(window).on('load',function(){
		$('.loader').fadeOut(200);
	});


	/* Parallax */
	$('.jarallax').jarallax({
	    speed: 0.75
	});

    
	/* Aos */
	AOS.init({
	    easing: 'ease-in-out-sine',
	    duration: 700,
	});


	/* Navbar Fixed */
	var navbarDesctop = $('.navbar-desctop');
    var origOffsetY = navbarDesctop.offset().top;

    $(window).on('scroll',function(){
    	if ($(window).scrollTop() > origOffsetY) {
            navbarDesctop.addClass('fixed');
        } else {
            navbarDesctop.removeClass('fixed');
        }
    });


    /* Navbar scroll*/
    $('body:not(.fullpage) .navbar ul li a').on('click', function() {
        var target = $(this.hash);
        if (target.length) {
            $('html,body').animate({
                scrollTop: (target.offset().top)
            }, 1000);
            $('body').removeClass('menu-is-opened').addClass('menu-is-closed');
            return false;
        }
    });

    /* Scrollspy*/
    $('body:not(.fullpage)').scrollspy({ target: '#scrollspy' });

    /* Full page scroll*/
    if ($('#pagepiling').length > 0){

        $('#pagepiling').pagepiling({
            scrollingSpeed: 280,
     
            menu: '.navbar-nav',
            anchors: ['home', 'about', 'video', 'experience', 'specialization', 'projects', 'partners', 'news'],
            afterRender: function(anchorLink, index){ 
              NavbarColor();
            },
            afterLoad: function(anchorLink, index){
                $('.pp-section .intro').removeClass('animate');
               $('.active .intro').addClass('animate');
                NavbarColor();

            }
        });

        $( ".pp-scrollable .intro" ).wrapInner( "<div class='scroll-wrap'>");

        function NavbarColor(){
         if ($('.pp-section.active').hasClass('navbar-is-white')){
                $('.navbar-desctop').addClass('navbar-white');
                $('#pp-nav').addClass('pp-nav-white');
            }
            else{
                $('.navbar-desctop').removeClass('navbar-white');
                $('#pp-nav').removeClass('pp-nav-white');
            }
        }
    }


    /* Navbar toggler */
    $('.toggler').on('click',function(){
    	$('body').addClass('menu-is-open');
    });

    $('.close, .click-capture').on('click',function(){
    	$('body').removeClass('menu-is-open');
    });


    /* Navbar mobile */
    $('.navbar-nav-mobile li a').on('click', function(){
    	$('body').removeClass('menu-is-open');
    	$('.navbar-nav-mobile li a').removeClass('active');
    	$(this).addClass('active');
    });

    /* Pop up*/
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',
      fixedBgPos: true,
      overflowY: 'auto',
      closeBtnInside: true,
      preloader: false,
      midClick: true,
      fixedContentPos: true,
      removalDelay: 0,
      mainClass: 'my-mfp-zoom-in'
    });

    /* Pop up Youtube*/
    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
        disableOn: 700,
        type: 'iframe',
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: false
    });


    /* Carousel project */
    $('.carousel-project').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    dots:true,
	    items:1
	});

    /* Carousel project2 */
    $('.carousel-project-2').owlCarousel({
        loop:true,
        margin:0,
        nav:true,
        dots:true,
        responsive:{
            0:{
                items:1,
                margin:0,
                dots:true
            },
            992:{
                items:2,
                margin:0,
                dots:true
            }
        }
    });

    /* Carousel testimonials */
    $('.carousel-testimonials').owlCarousel({
	    loop:true,
	    margin:10,
	    dots:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        992:{
	            items:2,
	            margin:20,
	            dots:true
	        }
	    }
	});

    /* Carousel testimonials */
    $('.carousel-testimonials-2').owlCarousel({
        loop:true,
        margin:10,
        dots:true,
        responsive:{
            0:{
                items:1
            }
        }
    });

    /* Subscribe Form */
	$('.js-subscribe-form').ajaxChimp({
        language: 'cm',
        url: 'http://csmthemes.us3.list-manage.com/subscribe/post?u=9666c25a337f497687875a388&id=5b881a50fb'
            //http://xxx.xxx.list-manage.com/subscribe/post?u=xxx&id=xxx
    });
    $.ajaxChimp.translations.cm = {
        'submit': 'Submitting...',
        0: 'Awesome! We have sent you a confirmation email',
        1: 'Please enter a value',
        2: 'An email address must contain a single @',
        3: 'The domain portion of the email address is invalid (the portion after the @: )',
        4: 'The username portion of the email address is invalid (the portion before the @: )',
        5: 'This email address looks fake or invalid. Please enter a real email address'
    };

    /* Send form */
	if ($('.js-ajax-form').length) {
		$('.js-ajax-form').each(function(){
			$(this).validate({
				errorClass: 'error',
			    submitHandler: function(form){
		        	$.ajax({
			            type: "POST",
			            url:"mail.php",
			            data: $(form).serialize(),
			            success: function() {
		                	$('#success-message').show();
		                },

		                error: function(){
		                	$('#error-message').show();
			            }
			        });
			    }
			});
		});
	}

})(jQuery);
