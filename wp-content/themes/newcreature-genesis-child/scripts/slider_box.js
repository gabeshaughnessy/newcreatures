jQuery(document).ready(function($){
jQuery('#wrap').localScroll();
});

jQuery(window).load(function(){
jQuery('#project_slider').cycle({ 
    fx:'fade', 
    speed: 2000, 
        timeout: 5000, 
        containerResize: 1,
        pager:  '#project_pager', 
                 });
                   //jQuery('#wrap').localScroll();
                 });


