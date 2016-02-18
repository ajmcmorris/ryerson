$(document).ready(function(){

	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });

	 
	    $("#clickme").click(function () {
	        if($(this).parent().hasClass("popped")){
	        $(this).parent().animate({bottom:'-400px'}, {queue: false, duration: 500}).removeClass("popped");
	    }else {
	        $(this).parent().animate({bottom: "0px" }, {queue: false, duration: 500}).addClass("popped");}
	    });

	    $('.members').hover(function(){
	    	$(':nth-child(2)', this).fadeIn();
	    },function(){
	    	$(':nth-child(2)', this).fadeOut();
	    });

	    setTimeout(function(){
	    	$('#homepage').fadeIn('slow');
	    },500);
	   

});