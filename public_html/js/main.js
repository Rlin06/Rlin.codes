jQuery(function($) {

	//Preloader
	var preloader = $('.preloader');
	$(window).load(function(){
		preloader.remove();
	});

	// Menu
	$('#header .nav-button').on('click',function(){
		$('#navigation').fadeIn();
	});

	$('#hidemenu').on('click', function(){
		$('#navigation').fadeOut();
	});

	$('.main-nav ul li a').on('click', function(){
		$('#navigation').fadeOut();
	});

	var slider = $('#page-slider .carousel-inner').find('.item');
	$('#page-slider').on('slid.bs.carousel', function () {
		var curIndex 	= slider.filter('.active').index();
		var menuItems 	= $('.main-nav ul').find('li');
		menuItems.removeClass('active').eq(curIndex).addClass('active');
	});

	//Contact Form
	// var form = $('#contact-form');
	// form.submit(function(event){
	// 	event.preventDefault();
	// 	var form_status = $('.form-status');
	// 	$.ajax({
	// 		type: "POST",
	// 		url: $(this).attr('action'),
	// 		beforeSend: function(){
	// 			form_status.find('.form-status-content').html('<p><i class="fa fa-spinner fa-spin"></i> Email is sending...</p>').fadeIn();
	// 		}
	// 	}).done(function(data){
	// 		form_status.find('.form-status-content').html('<p class="text-success" align="center">Thanks! I\'ll get right back at you!</p>').delay(3000).fadeOut();
	// 	});
	// });

});
