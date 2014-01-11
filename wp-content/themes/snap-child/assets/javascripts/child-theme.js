jQuery(document).ready(function($){
	//Responsive slider nav callbacks;
	jQuery('#slider-nav').on('click', '.rslides_nav', function(){
		var vidPlayers = jQuery('.slider-vid');
		vidPlayers.each(function(i){
			thePlayer = "";
			thePlayer = jQuery(this).find('.fluid-width-video-wrapper').detach();
			var container =  jQuery(this).parent('a').parent('li').find('.slider-vid');
			thePlayer.appendTo(container);
		});
	});
});