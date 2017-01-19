/** some generic site functionality **/
$(document).ready(function(){
	
	setupMenu();
});

var setupMenu = function(){
	
	var phoneLandscapeWidth = 640;
	var smallMenuWidth = 200;
	
	var isPhone = $(window).width() <= phoneLandscapeWidth;
	
	console.log("is phone? " + isPhone);
	
	$(window).scroll(function() {
		//console.log("scrolling to " + $(this).scrollTop());
	    checkMenu();
	});
	
	$(window).resize(function(){
		
		isPhone = $(window).width() <= phoneLandscapeWidth;
		
		checkMenu();
	})
	
	$(window).on({
		"touchmove": function(){
			//console.log($(this).scrollTop());
			checkMenu();
			
		}
	});

	var checkMenu = function(){
		var isHomepage = $('body').hasClass('homepage');
		
		var topMenuPos = isHomepage ? $("#home-slide").height() : 0;
		
		if( $(window).scrollTop() > topMenuPos && !isPhone){
			$("header.title").width( smallMenuWidth );
			if( isHomepage ){
				$("header.title").addClass( 'fixed' );
				$("#home-menu-slide").height($("header.title").height());
			}
			
		} else {
			$("header.title").width($(window).width());
			if( isHomepage ) $("header.title").removeClass( 'fixed' );
		}
	};
	
	// show and hide the whole menu when hovering
	$('header.title').hover( 
		function() {
			
			if( !isPhone )
				$(this).width( $(window).width() );
		}, 
		function(){
			var isHomepage = $('body').hasClass('homepage');
			var topMenuPos = isHomepage ? $("#home-slide").height() : 0;
			
			if( $(window).scrollTop() > topMenuPos && !isPhone )
				$(this).width( smallMenuWidth );
			
		}
	);
	
	// smooth scrolling of in-page links
	/** SMOOTH SCROLLING **/
	$('body.homepage a[data-smooth-scroll]').click(function(){
		var animationSpeed = 300;
		var easing = "easeOutQuad";
		
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
			&& location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, { duration: animationSpeed, easing: easing});
	        return false;
	      }
	    }
	});
	
	var onlySummary = false;
	
	var toggleSummary = function(){
		onlySummary = !onlySummary;
		
		if( onlySummary ){
			$('.slide .slide-image').hide('fast');
			$('section.slide-text > p:not(.summary)').hide('fast');
			$('section.slide-text').addClass('no-bottom');
			$('.view-summary span').text('all text');
		} else {
			$('.slide .slide-image').show('fast');
			$('section.slide-text > p:not(.summary)').show('fast');
			$('section.slide-text').removeClass('no-bottom');
			$('.view-summary span').text('the summary');
		}
	};
	
	// allow hiding of all text that is not a summary (used in client pages)
	$('.summary').click(function(item){
		// toggle everything that is not a summary on click
		toggleSummary();
	});
	
	$('.view-summary').click(function(e){
		e.preventDefault();
		toggleSummary();
		
	})
	//$('#menu .menu-main a').smoothScroll();
};
