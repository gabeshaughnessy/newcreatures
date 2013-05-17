jQuery(document).ready(function($){
$(window).load(function(){
$('#project_slider').cycle({ 
    fx:'fade', 
    speed: 2000, 
        timeout: 5000, 
        containerResize: 1,
        pager:  '#project_pager', 
                 });
                   $('#wrap').localScroll();
                 });
                 });
