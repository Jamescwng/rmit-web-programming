
// Code snippet adapted from Kokos' post on https://www.sitepoint.com/community/t/how-to-create-the-more-link-button-to-display-rest-of-the-text/7437

$(function() {

	$('.description').each(function(event) {

		var max_length = 200;

		if($(this).html().length > max_length) {

			var short_content 	= $(this).html().substr(0, max_length);
			var long_content	= $(this).html().substr(max_length);

			$(this).html(short_content+
						 '<a href="#" class="read_more"><br><br>Read More</a>'+
						 '<span class="more_text" style="display:none;">'+long_content+'</span>'); /* Shows the remaining content */

			$(this).find('a.read_more').click(function(event) {

				event.preventDefault();
				$(this).hide(); /* hides the read more button */
				$(this).parents('.description').find('.more_text').show(); /* show the .more_text span */

			});

		}

	});

});
