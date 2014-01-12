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

//KEYBOARD EVENTS

$('body').keydown(function(e){
	//console.log('keycode: ',e.keyCode); //uncomment to see keycodes
	
	
	if(e.keyCode == 38 ){//up arrow(38) is pressed
		e.preventDefault();
	}
	if(e.keyCode == 40 ){//down(40) arrow is pressed
		
		e.preventDefault();
	}
	if(e.keyCode == 37){//left(37) arrow is pressed
		jQuery('.rslides_nav.prev').click();

		e.preventDefault();
	}
	if(e.keyCode == 39){//right(39) arrow is pressed
				jQuery('.rslides_nav.next').click(); //move the slider

		e.preventDefault();
	}
	if (e.keyCode == 13) {//return(13) key was pressed
	}
});//end keydown events
//end KEYBOARD EVENTS
});

