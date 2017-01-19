/**
provide functionality for the slides (image & scrolling)

	requires
	- jquery smoothscroll (included by Bower)
	
**/

$(document).ready(function(){
	
	/** SLIDE BACKGROUNDS **/
	// see if we have slides
	
	var imageDir = '../images/' + $('body').data('image-dir');
	
	//var gallery = $(document).gallery();
	
	
	// load all the images
	$('.slide, .slide-image').each(function(){
		
		var type = $(this).data('type');
		
		if( type == 'image'){
			
			var bgUrl = $(this).data('background');
			
			setImageBackground( this, bgUrl );
				
			// TODO, probably pre-load it, or check if the slide is visible?
			
		} else if( type == 'vimeo' || type == 'youtube' ){
			
			// first get the still
			var bgUrl = $(this).data('still');
			// create the right url
			setImageBackground( this, bgUrl );
		}
	});
	
	function setImageBackground( item, imageUrl ){
		// get the data-background property

		// create the right url
		var dir = '/' + imageDir + '/' + imageUrl;

		if( imageUrl == 'none')
			// reset the background iamge
			$(item).css('background-image', "none");
		else
			// put it into the css
			$(item).css('background-image', "url('" + dir + "')");
	}
	
	
	// the default height of a slide image
	var slideImageHeight = 200;
	
	var imageScrollTop = null;
	
	// some gallery setup functions
	
	
	$('#blueimp-gallery')
	    .on('open', function (event) {
			var gallery = $('#blueimp-gallery').data('gallery');
			gallery.toggleControls = function(){};
			
			gallery.options.vimeoClickToPlay= false;
			gallery.options.youtubeClickToPlay= false;
			
	        $('#blueimp-gallery .slides').click(function(event){
				
				if( !(event.target.tagName.toLowerCase() == 'a') ){
					console.log("closing gallery");
					gallery.close();
				}
					
			})
	    });
	
	
	
});


