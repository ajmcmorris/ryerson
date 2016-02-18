$(document).ready(function(){
	setTimeout(function(){
		$("#dialog").fadeOut(3000,"linear").hide();
		$("#welcome").fadeIn(3000,"linear").show();
		$(".cmg-soon").fadeIn(3000,"linear").show();
	},1500);
	$("#button").click(function(){
		$('.opacity-nav').fadeIn("slow").css("display","block");
	});
	$("#buttons").click(function(){
		$('.opacity-nav').fadeOut("slow");
	});

	
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
	

});