$(function() {
	var pag = $('#pag').position().top;
	var nav = $('#nav-scroll');
	var go1 = true;
	/*scroll animación*/
	$('.nav-btn').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
		&& location.hostname == this.hostname) {
			var $target = $(this.hash);
			$target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
		  	if ($target.length) {
				var targetOffset = $target.offset().top;
				$('html,body').animate({scrollTop: targetOffset}, 1000);
		   		return false;
		  	}
		}
  	});
	/*nav-top*/
	$(window).scroll(function() { 
		if ($(this).scrollTop() >= (pag-50) && go1) {	
			nav.css({'display':'none','top':'-50px'});		
			nav.delay(300).css({'display':'block','position':'fixed'}).animate({top:0},300);
			go1 = false;
		} 
		else if ($(this).scrollTop() < pag && !go1) {
			nav.css('position','relative');
			go1 = true;
		}	
	});
	$('.a-nav').css('color','#000');
	/*nav-click*/
	$('.btn-1').click(function() {
		$(this).css('color','#FFF').siblings('.animacion-nav').slideDown(500);
		$('.btn-2').css('color','#000').siblings('.animacion-nav').slideUp(500)
		$('.btn-3').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-4').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-5').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-6').css('color','#000').siblings('.animacion-nav').slideUp(500);
  	});
	$('.btn-2').click(function() {
		$(this).css('color','#FFF').siblings('.animacion-nav').slideDown(500);
		$('.btn-1').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-3').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-4').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-5').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-6').css('color','#000').siblings('.animacion-nav').slideUp(500);
  	});
	$('.btn-3').click(function() {
		$(this).css('color','#FFF').siblings('.animacion-nav').slideDown(500);
		$('.btn-1').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-2').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-4').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-5').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-6').css('color','#000').siblings('.animacion-nav').slideUp(500);
	});
	$('.btn-4').click(function() {
		$(this).css('color','#FFF').siblings('.animacion-nav').slideDown(500);
		$('.btn-1').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-2').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-3').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-5').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-6').css('color','#000').siblings('.animacion-nav').slideUp(500);  		
  	});
	$('.btn-5').click(function() {
		$(this).css('color','#FFF').siblings('.animacion-nav').slideDown(500);
		$('.btn-1').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-2').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-3').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-4').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-6').css('color','#000').siblings('.animacion-nav').slideUp(500);		
  	});
	$('.btn-6').click(function() {
		$(this).css('color','#FFF').siblings('.animacion-nav').slideDown(500);
		$('.btn-1').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-2').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-3').css('color','#000').siblings('.animacion-nav').slideUp(500);
		$('.btn-4').css('color','#000').siblings('.animacion-nav').slideUp(500);	
		$('.btn-5').css('color','#000').siblings('.animacion-nav').slideUp(500); 	
  	});
	/*nav-hover*/
	/*$('.nav-btn*').hover(
	function(){
		$(this).animate({color:'rgba(0, 0, 0, 1)'}, 500);
		$(this).parents('li').animate({backgroundColor:'rgba(255, 255, 255, 1)'}, 500);
	},
	function(){
		$(this).animate({color:'rgba(255, 255, 255, 1)'}, 500);
		$(this).parents('li').animate({backgroundColor:'rgba(26, 27, 52, 0)'}, 500);
	});*/
	
	/*img gal hover*/
	$('.img').hover(
		function(){
			$(this).find('.imagen').animate({opacity:0.3},300);
			$(this).find('.lupa').show('scale', {},300);
		},
		function(){
			$(this).find('.imagen').animate({opacity:1},300);
			$(this).find('.lupa').hide('scale', {},300);
		}
	);
	/*galeria click*/
	$('#btn_gal_1').click(function(){
		$('#gal_2').slideUp(500);
		$('#gal_3').slideUp(500);
		$('#gal_4').slideUp(500);
		$('#gal_5').slideUp(500);
		$('#gal_6').slideUp(500);
		$('#gal_7').slideUp(500);
		$('#gal_1').delay(500).slideDown(1000);
	});
	$('#btn_gal_2').click(function(){
		$('#gal_1').slideUp(500);
		$('#gal_3').slideUp(500);
		$('#gal_4').slideUp(500);
		$('#gal_5').slideUp(500);
		$('#gal_6').slideUp(500);
		$('#gal_7').slideUp(500);
		$('#gal_2').delay(500).slideDown(1000);
	});
	$('#btn_gal_3').click(function(){
		$('#gal_1').slideUp(500);
		$('#gal_2').slideUp(500);
		$('#gal_4').slideUp(500);
		$('#gal_5').slideUp(500);
		$('#gal_6').slideUp(500);
		$('#gal_7').slideUp(500);
		$('#gal_3').delay(500).slideDown(1000);
	});
	$('#btn_gal_4').click(function(){
		$('#gal_1').slideUp(500);
		$('#gal_2').slideUp(500);
		$('#gal_3').slideUp(500);
		$('#gal_5').slideUp(500);
		$('#gal_6').slideUp(500);
		$('#gal_7').slideUp(500);
		$('#gal_4').delay(500).slideDown(1000);
	});
	$('#btn_gal_5').click(function(){
		$('#gal_1').slideUp(500);
		$('#gal_2').slideUp(500);
		$('#gal_3').slideUp(500);
		$('#gal_4').slideUp(500);
		$('#gal_6').slideUp(500);
		$('#gal_7').slideUp(500);
		$('#gal_5').delay(500).slideDown(1000);
	});
	$('#btn_gal_6').click(function(){
		$('#gal_1').slideUp(500);
		$('#gal_2').slideUp(500);
		$('#gal_3').slideUp(500);
		$('#gal_4').slideUp(500);
		$('#gal_5').slideUp(500);
		$('#gal_7').slideUp(500);
		$('#gal_6').delay(500).slideDown(1000);
	});
	$('#btn_gal_7').click(function(){
		$('#gal_1').slideUp(500);
		$('#gal_2').slideUp(500);
		$('#gal_3').slideUp(500);
		$('#gal_4').slideUp(500);
		$('#gal_5').slideUp(500);
		$('#gal_6').slideUp(500);
		$('#gal_7').delay(500).slideDown(1000);
	});
});
/*aplicar cambios al detectar xs sm md lg*/ 
(function($, document, window, viewport){
	$(document).ready(function() {
		if( viewport.is('xs') ) {
			$('.load-gif').css('width','50%');
			$('.youtube-iframe').css('height','350px');
			$('#logo').css('width','100%');
			$('#logo').css('padding','10px');
			$('.gal').removeClass('btn-sm');
			$('.gal').removeClass('btn-lg');
			$('.gal').addClass('btn-xs');
			$('#br').css('display','block');
			$('#br2').css('display','block');
		}
		else if( viewport.is('sm') ) {
			$('.load-gif').css('width','100%');
			$('.youtube-iframe').css('height','150px');
			$('#logo').css('width','50%');
			$('#logo').css('padding','0px');
			$('.gal').removeClass('btn-xs');
			$('.gal').removeClass('btn-lg');
			$('.gal').addClass('btn-sm');
			$('#br').css('display','none');
			$('#br2').css('display','block');
		}
		else if( viewport.is('md') ) {
			$('.load-gif').css('width','100%');
			$('.youtube-iframe').css('height','200px');
			$('#logo').css('width','50%');
			$('#logo').css('padding','0px');
			$('.gal').removeClass('btn-sm');
			$('.gal').removeClass('btn-lg');
			$('.gal').removeClass('btn-xs');
			$('#br').css('display','none');
			$('#br2').css('display','none');
		}
		else if( viewport.is('lg') ) {
			$('.load-gif').css('width','100%');
			$('.youtube-iframe').css('height','250px');
			$('#logo').css('width','50%');
			$('#logo').css('padding','0px');
			$('.gal').removeClass('btn-xs');
			$('.gal').removeClass('btn-sm');
			$('.gal').addClass('btn-lg');
			$('#br').css('display','none');
			$('#br2').css('display','none');
		}
	});
	$(window).bind('resize', function() {
		if( viewport.is('xs') ) {
			$('.load-gif').css('width','50%');
			$('.youtube-iframe').css('height','250px');
			$('#logo').css('width','100%');
			$('#logo').css('padding','10px');
			$('.gal').removeClass('btn-sm');
			$('.gal').removeClass('btn-lg');
			$('.gal').addClass('btn-xs');
			$('#br').css('display','block');
			$('#br2').css('display','block');
		}
		else if( viewport.is('sm') ) {
			$('.load-gif').css('width','100%');
			$('.youtube-iframe').css('height','150px');
			$('#logo').css('width','50%');
			$('#logo').css('padding','0px');
			$('.gal').removeClass('btn-xs');
			$('.gal').removeClass('btn-lg');
			$('.gal').addClass('btn-sm');
			$('#br').css('display','none');
			$('#br2').css('display','block');
		}
		else if( viewport.is('md') ) {
			$('.load-gif').css('width','100%');
			$('.youtube-iframe').css('height','200px');
			$('#logo').css('width','50%');
			$('#logo').css('padding','0px');
			$('.gal').removeClass('btn-sm');
			$('.gal').removeClass('btn-lg');
			$('.gal').removeClass('btn-xs');
			$('#br').css('display','none');
			$('#br2').css('display','none');
		}
		else if( viewport.is('lg') ) {
			$('.load-gif').css('width','100%');
			$('.youtube-iframe').css('height','250px');
			$('#logo').css('width','50%');
			$('#logo').css('padding','0px');
			$('.gal').removeClass('btn-xs');
			$('.gal').removeClass('btn-sm');
			$('.gal').addClass('btn-lg');
			$('#br').css('display','none');
			$('#br2').css('display','none');
		}
	});	 
})(jQuery, document, window, ResponsiveBootstrapToolkit);