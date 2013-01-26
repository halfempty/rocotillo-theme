(function($) {
$(document).ready(function() {

	var currentSlideGlobal = 0;

	// Fade Gallery
	jQuery.fn.fadeGallery = function() {

		function animator() {

			function doTransition() {
				var nextPosition = currentSlideGlobal+1;
				manageGallery(nextPosition);
				animator();
			}

			window.setTimeout(doTransition, 8000, true);

		};

		function setupControls() {

			var $innards = '';

			$('.slideimage').each(function(){
				$innards += "<a></a>";
				});

			$('.slideshow').after('<p id="slidecontrols">' + $innards + '</p>');


		}


		function manageGallery(nextPosition){
						
			function performChange(gallery, oldSlide) {

				/* Images*/
				if ( nextPosition != oldSlide ) {
					$(gallery).find('.slideimage').eq(oldSlide).find('img').fadeOut('slow', function() {
					    $(gallery).find('.slideimage').eq(oldSlide).css('display','none');		
					});
				}

			    $(gallery).find('.slideimage').eq(nextPosition).css('display','block');
				$(gallery).find('.slideimage').eq(nextPosition).find('img').fadeIn('slow');

				/* Text */
				$(gallery).find('.slidetext').eq(oldSlide).fadeOut('slow', function() {
				    $(gallery).find('.slidetext').eq(oldSlide).css('display','none');		
				});

				$(gallery).find('.slidetext').eq(nextPosition).fadeIn('slow');

				/* Controls */
				$('#slidecontrols').find('a').removeClass('selected');
				$('#slidecontrols').find('a').eq(nextPosition).addClass('selected');
			}
			
			gallery = $('.slideshow');
			maxPosition = gallery.find('.slideimage').length -1;

			if (nextPosition >= 0) {

				var oldSlide = currentSlideGlobal;

				if ( nextPosition > maxPosition ) {
 					// We were on last slide

					nextPosition = 0;

				}

				currentSlideGlobal = nextPosition;
				performChange(gallery, oldSlide)
				
			}

		}

		var imageLength = $(this).find('.slideimage').length;

		$(this).find('.slideimage').hide();
		$(this).find('img').hide();
		
		setupControls();



		$(window).load(function(){
			manageGallery(0);
			animator();
		});

		// The action on the controls
		$('#slidecontrols a').click(function(event) {

			var nextPosition = $(this).index();
			manageGallery(nextPosition);


		});



	}// end Fade Gallery


	var theGallery = $('.slideinner');

	theGallery.fadeGallery();		

});

})(jQuery);