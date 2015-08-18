var home = {
	//btnClicked : ""
};


$(document).ready(function () {

	// Main function
	$(function () {
		
		// var $window = $(window);
		// $(window).resize(function() {
			// var windowsize = $window.width();
			// console.log('windowsize = '+windowsize);
		// });

		/* Portfolio thumb rollover */
		$('#showcase-holder li a').mouseover(thumbOn);
    	function thumbOn(event) {
	        //home.btnClicked  = $(this).data('btn');
	        $(this).css('color', 'white');
	    };

	    $('#showcase-holder li a').mouseout(thumbOff);
    	function thumbOff(event) {
	        $(this).css('color', '#333');
	    };

	    /* Github Rollover */
	    $('#github-img').mouseover(git_ico_On);
    	function git_ico_On(event) {
	        $(this).attr("src","images/github-white.png");
	        console.log($(this).attr("src"));
	    };

	    $('#github-img').mouseout(git_ico_Off);
    	function git_ico_Off(event) {
	        $(this).attr("src","images/github.png");
	        console.log($(this).attr("src"));
	    };

	    /* Audio Effects */
	    var audio = $("#mySoundClip")[0];
    
		// Homepage | Portfolio | Contact //
		$("#showcase-holder li").mouseenter(function() { audio.play(); });
		$("#main-nav a").mouseenter(function() { audio.play(); });
		$(".social-links a").mouseenter(function() { audio.play(); });
		$(".submit-button").mouseenter(function() { audio.play(); });

		// Showcase Navigation
		$("#btn-prev").mouseenter(function() { audio.play();
			$(".pattern .showcase-nav .previous-showcase .showcase-btn-shadow").stop().animate({opacity:.5}) 
		});
		$("#btn-prev").mouseout(function() {
			$(".pattern .showcase-nav .previous-showcase .showcase-btn-shadow").stop().animate({opacity:.2}) 
		});
		$("#btn-next").mouseenter(function() { audio.play();
			$(".pattern .showcase-nav .next-showcase .showcase-btn-shadow").stop().animate({opacity:.5}) 
		});
		$("#btn-next").mouseout(function() {
			$(".pattern .showcase-nav .next-showcase .showcase-btn-shadow").stop().animate({opacity:.2}) 
		});

		// Showcases //
		$("#case-nav a").mouseenter(function() { audio.play(); });
		$(".cta-button").mouseenter(function() { audio.play(); });
		$(".view-more-button").mouseenter(function() { audio.play(); });

	}); // Main function

}); // document ready