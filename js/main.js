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

	    var timer;
	    $('.members').hover(function(){
	    	var self = this;
	    	  timer = setTimeout(function(){
	    		console.log('timeout set' + timer);
	    		$(':nth-child(2)', self).fadeIn();
	    	},500);
	    },function(){
	    	$(':nth-child(2)', this).hide();
	    	clearTimeout(timer);
	    	console.log('timeout cleared' +timer);
	    });

	    setTimeout(function(){
	    	$('#homepage').fadeIn('slow');
	    },500);

	    function setHeight() {
          windowHeight = $(window).innerHeight();
          $('.full-height-section').css('min-height', windowHeight);
        };
        setHeight();
        
        $(window).resize(function() {
          setHeight();
        });
	   

});