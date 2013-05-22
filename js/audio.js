var audio = $("#mySoundClip")[0];
    
// Homepage | Portfolio | Contact //
$("#showcase-holder li").mouseenter(function() {
  audio.play();
});
$("#main-nav a").mouseenter(function() {
  audio.play();
});
$(".social-links a").mouseenter(function() {
  audio.play();
});
$(".submit-button").mouseenter(function() {
  audio.play();
});

$("#btn-prev").mouseenter(function() {
  audio.play();
  $(".pattern .showcase-nav .previous-showcase .showcase-btn-shadow").stop().animate({opacity:.5}) 
});
$("#btn-prev").mouseout(function() {
  $(".pattern .showcase-nav .previous-showcase .showcase-btn-shadow").stop().animate({opacity:.2}) 
});

// Showcase Navigation
$("#btn-next").mouseenter(function() {
  audio.play();
  $(".pattern .showcase-nav .next-showcase .showcase-btn-shadow").stop().animate({opacity:.5}) 
});
$("#btn-next").mouseout(function() {
  $(".pattern .showcase-nav .next-showcase .showcase-btn-shadow").stop().animate({opacity:.2}) 
});

// Showcases //
$("#case-nav a").mouseenter(function() {
    audio.play();
});
  $(".view-more-button").mouseenter(function() {
    audio.play();
});
  $(".cta-button").mouseenter(function() {
    audio.play();
});


    