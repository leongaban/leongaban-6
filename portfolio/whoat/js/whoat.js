var home = {
	itunesLink : "https://itunes.apple.com/us/app/who/id536254085?mt=8"
};


$(document).ready(function () {

	// Fancybox Modal for WhoAt Video
	$('.fancybox-media')
		.attr('rel', 'media-gallery')
		.fancybox({
			padding	    : 0,
			openEffect  : 'none',
			closeEffect : 'none',
			prevEffect  : 'none',
			nextEffect  : 'none',
			arrows      : false,
			helpers     : { media : {}}
		});

	var faqmenu = ['dl-general', 'dl-protecting', 'dl-search', 'dl-incoming', 'dl-requests'];
	var faqpane = "";

	// Main function
	$(function () {


		// Check window width & height
		var $window = $(window);
		$(window).resize(function() {
			var ww = $window.width();
			var wh = $window.height();
			console.log('window width = '+ww);
			//console.log('window height = '+wh);
		});


		// HOME PAGE
		/* -------------------------------------------------------------------------------- */

		//  Login
		$('.login-window').hide();
		$('.btn-login').click(function() {
	    	$('.login-window').slideToggle(200);
	    	return false;
	   	});

	   	$('.login-window input').on('click focusin', function() {
		    this.value =  '';
		});



		//  App link & Try Me chat bubble animation
		$('.home-content #whoatnet-to-itunes').click(function() {
			window.location = home.itunesLink + this.id;
		}).hover(function(){
			$('.home-content .tryme').find("img:last").fadeToggle();
		});



		//  Clear value of email subscribe text field
		$('.email-container input').on('click focusin', function() {
		    this.value =  '';
		});

		

		// LOGIN / REGISTER PAGE
		/* -------------------------------------------------------------------------------- */
		//  Clear value of login & register text fields
		$('input#login-password, input#register-password').on('click focusin', function() {
		    this.value =  '';
		});

		// tabs

		// Short
		$(".login-tab-nav #tab-login").click(function(){
			$('#register-form').hide();
		    $("#form-background").animate({height:273},200);
		    $('#login-form').fadeToggle();
		});

		// Tall
		$(".login-tab-nav #tab-register").click(function(){
			$('#login-form').hide();
		    $("#form-background").animate({height:353},200);
		    $('#register-form').fadeToggle();
		});



		/*
		$('#login-form #tab-register').click(function() {

			$('#login-form').fadeToggle();
	    	$(".form-background").animate(
	            {
	            	"width": "400px",
	            	"height": "410px"
	            },
	            "slow", function(){
	            	$(".form-background").css('top', '-342px');
    				$('#register-form').fadeToggle();
	            });
	   	});

	   	$('#register-form #tab-login').click(function() {

	   		$('#register-form').fadeToggle();
	    	$(".form-background").animate(
	            {
	            	
	            	"width": "400px",
	            	"height": "290px"
	            },
	            "slow", function(){
	            	$(".form-background").css('top', '-214px');
	                $('#login-form').fadeToggle();
	            });
	   	});
		*/

	   	// Tips
	   	$('#register-form .email-tip-icon').hover(function(){
			$('#message-email').fadeToggle();
		});

		$('#register-form .password-tip-icon').hover(function(){
			$('#message-password').fadeToggle();
		});

	   	// Validation
	   	


		// FAQ PAGE
		/* -------------------------------------------------------------------------------- */

		//  FAQ sidebar menu
		$('#faq-btn-general').click(function() {

			$('#dl-protecting').hide();		$('#faq-btn-protecting').parent().removeClass('faq-blue');
											$('#img-protecting-on').hide();
											$('#img-protecting-off').show();
			$('#dl-search').hide();			$('#faq-btn-search').parent().removeClass('faq-blue');
											$('#img-search-on').hide();
											$('#img-search-off').show();
			$('#dl-incoming').hide();		$('#faq-btn-incoming').parent().removeClass('faq-blue');
											$('#img-incoming-on').hide();
											$('#img-incoming-off').show();
			$('#dl-requests').hide();		$('#faq-btn-requests').parent().removeClass('faq-blue');
											$('#img-requests-on').hide();
											$('#img-requests-off').show();

			$(this).parent().addClass('faq-blue');
			$('#img-general-on').show();
			$('#img-general-off').hide();
			$('#dl-general').fadeToggle("slow", "linear");

		});

		$('#faq-btn-protecting').click(function() {

			$('#dl-search').hide();			$('#faq-btn-search').parent().removeClass('faq-blue');
											$('#img-search-on').hide();
											$('#img-search-off').show();
			$('#dl-incoming').hide();		$('#faq-btn-incoming').parent().removeClass('faq-blue');
											$('#img-incoming-on').hide();
											$('#img-incoming-off').show();
			$('#dl-requests ').hide();		$('#faq-btn-requests').parent().removeClass('faq-blue');
											$('#img-requests-on').hide();
											$('#img-requests-off').show();
			$('#dl-general').hide();		$('#faq-btn-general').parent().removeClass('faq-blue');
											$('#img-general-on').hide();
											$('#img-general-off').show();

			$(this).parent().addClass('faq-blue');
			$('#img-protecting-on').show();
			$('#img-protecting-off').hide();
			$('#dl-protecting').fadeToggle("slow", "linear");

		});

		$('#faq-btn-search').click(function() {

			$('#dl-protecting').hide();		$('#faq-btn-protecting').parent().removeClass('faq-blue');
											$('#img-protecting-on').hide();
											$('#img-protecting-off').show();
			$('#dl-incoming').hide();		$('#faq-btn-incoming').parent().removeClass('faq-blue');
											$('#img-incoming-on').hide();
											$('#img-incoming-off').show();
			$('#dl-requests ').hide();		$('#faq-btn-requests').parent().removeClass('faq-blue');
											$('#img-requests-on').hide();
											$('#img-requests-off').show();
			$('#dl-general').hide();		$('#faq-btn-general').parent().removeClass('faq-blue');
											$('#img-general-on').hide();
											$('#img-general-off').show();

			$(this).parent().addClass('faq-blue');
			$('#img-search-on').show();
			$('#img-search-off').hide();
			$('#dl-search').fadeToggle("slow", "linear");
		});

		$('#faq-btn-incoming').click(function() {

			$('#dl-protecting').hide();		$('#faq-btn-protecting').parent().removeClass('faq-blue');
											$('#img-protecting-on').hide();
											$('#img-protecting-off').show();
			$('#dl-search').hide();			$('#faq-btn-search').parent().removeClass('faq-blue');
											$('#img-search-on').hide();
											$('#img-search-off').show();
			$('#dl-requests ').hide();		$('#faq-btn-requests').parent().removeClass('faq-blue');
											$('#img-requests-on').hide();
											$('#img-requests-off').show();
			$('#dl-general').hide();		$('#faq-btn-general').parent().removeClass('faq-blue');

			$(this).parent().addClass('faq-blue');
			$('#img-incoming-on').show();
			$('#img-incoming-off').hide();
			$('#dl-incoming').fadeToggle("slow", "linear");
		});

		$('#faq-btn-requests').click(function() {

			$('#dl-protecting').hide();		$('#faq-btn-protecting').parent().removeClass('faq-blue');
											$('#img-protecting-on').hide();
											$('#img-protecting-off').show();
			$('#dl-search').hide();			$('#faq-btn-search').parent().removeClass('faq-blue');
											$('#img-search-on').hide();
											$('#img-search-off').show();
			$('#dl-incoming').hide();		$('#faq-btn-incoming').parent().removeClass('faq-blue');
											$('#img-incoming-on').hide();
											$('#img-incoming-off').show();
			$('#dl-general').hide();		$('#faq-btn-general').parent().removeClass('faq-blue');
											$('#img-general-on').hide();
											$('#img-general-off').show();

			$(this).parent().addClass('faq-blue');
			$('#img-requests-on').show();
			$('#img-requests-off').hide();
			$('#dl-requests').fadeToggle("slow", "linear");
		});

		/*

		// Optimize FAQ sidebar menu here...

		$('.faq-menu-item').click(faqMenuShow);
    	function faqMenuShow(event) {

	        faqpane = $(this).data('pane');

	        switch (faqpane) {
        		case 'faq-general':

        			$('#dl-general').css('display', 'none');
        			jQuery.each(faqmenu, function(index, value) {
				    	console.log(this);
				    	return (this != "dl-general");
				   	});
        			break;

        		case 'faq-protecting':
        			
        			break;
        		case 'faq-search':
        			
        			break;
        		case 'faq-incoming':
        			
        			break;
        		case 'faq-requests':

        			break;
        	}

	    };
	    */



	}); // Main function

}); // document ready

























