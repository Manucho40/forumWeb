$(document).ready(function(){
       var scrollTop = $(window).scrollTop();
       var tailleFenetre =  $(window).height();
       var decalage = 50;

       affiche(scrollTop, tailleFenetre);














       function affiche(scrollTop, tailleFenetre){
       	$('.afficher').each(function(){
       		var elemTop = $(this).offset().top;

       		if ($(this).css('opacity') == 0 && (parseInt(elemTop)<=parseInt(scrollTop + tailleFenetre - decalage))) {
       			$(this).fadeTo(2000,1);
       		}



       	})
       }            


})