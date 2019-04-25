$(document).ready(function(){

	// Select Field
	jcf.setOptions('Select', {
		wrapNative: false,
		wrapNativeOnMobile: true,
		fakeDropInBody: false
	});

	jcf.replace( $('.select-field select') );

	jcf.setOptions('File', {
		buttonText: 'Attach File',
		placeholderText: 'Upload CV*'
	});

	jcf.replace( $('.input-file input') );

	$('.select-field').on('click change focus', function(){
		if ( !$(this).find('.jcf-select-text span').is('.jcf-option-hideme') ) {
			$(this).addClass('jcf-not-empty');
		} else{
			$(this).removeClass('jcf-not-empty');
		}
	});

	// Input fields, Textareas
	$('.input-field input, .input-field textarea').on('keyup', function(){
		if( $(this).val() !== '' ){
			$(this).parent().addClass('not-empty');
		} else{
			$(this).parent().removeClass('not-empty');
		}
	});

	$('.input-field, .textarea').each(function(){
		if( $(this).val() !== '' ){
			$(this).parent().addClass('not-empty');
		} else{
			$(this).parent().removeClass('not-empty');
		}
	});

	// Careers Card
	$('.job-opening-card .card-read-more').click(function(){
		$('.job-opening-card.opened').removeClass('opened').find('.card-hidden-content').stop().slideUp(300);
		$(this).closest('.job-opening-card').addClass('opened').find('.card-hidden-content').stop().slideDown(300);
	});

	// Sidebar Panels
	var isOpenedPanel = false;
	$('[data-toggle*="sidebar-panel"]').click(function(e){
		e.preventDefault();
		e.stopPropagation();

		var dest = $( $(this).data('target') );

		if ( !$(this).is('.current') ) {
			dest.siblings().removeClass('opened');

			if (!isOpenedPanel) {
				dest.addClass('opened');
				isOpenedPanel = true;
			} else{
				setTimeout(function(){
					dest.addClass('opened');
				}, 300);
			}

			$('[data-toggle*="sidebar-panel"]').removeClass('current');
			$('[data-target="'+$(this).data('target')+'"]').addClass('current');
		} else{
			console.log(1);
			dest.removeClass('opened');
			isOpenedPanel = false;

			$(this).removeClass('current');
		};
	});

	$('.panel-close').click(function(){
		var panel = $(this).closest('.sidebar-panel');
		panel.removeClass('opened');

		var linkedItemId = panel.prop('id');

		$('[data-target*=' + linkedItemId + ']').removeClass('current');
	});

	// Menu Panel
	$('[data-toggle="menu-panel"]').click(function(e){
		e.preventDefault();

		var dest = $( $(this).data('target') );

		if ( !$(this).is('.current') ) {
			dest.addClass('opened');
			$(this).addClass('current');
		} else{
			$('.sidebar-panel').removeClass('opened');
			$(this).removeClass('current');
			$('[data-toggle="sidebar-panel"]').removeClass('current');
			isOpenedPanel = false;
		}
	});

	$('.back-to-menu').click(function(e){
		e.preventDefault();

		var dest = $( $(this).data('target') );

		isOpenedPanel = false;
		$(this).closest('.sidebar-panel').removeClass('opened');
		$('[data-toggle="sidebar-panel"]').removeClass('current');

		dest.addClass('opened');
		$('.menu-opener').addClass('current');
	});

	// Tabs
	$("[data-tab]").click(function(e){
		e.preventDefault();
		var dest = $( $(this).data('tab') );
		dest.stop().fadeIn(300).siblings('.tab').hide(0);
		$(this).addClass('current').siblings().removeClass('current');
	});

	$("[data-tab]:first-child").trigger('click');

	// Hidden Tabs
	$("[data-hidden-tab]").click(function(e){
		e.preventDefault();

		var dest = $( $(this).data('hidden-tab') );

		dest.siblings('.tab').removeClass('opened');
		dest.addClass('opened');
		dest.closest('.section-hidden-tabs').addClass('opened');

		// if ( !dest.parent().is('.opened') ) {
		// 	dest.parent().stop().slideDown(300).addClass('opened');
		// 	dest.stop().slideDown(300).siblings('.tab').hide(0);
		// } else{
		// 	dest.stop().fadeIn(300).siblings('.tab').hide(0);
		// }

		$(this).addClass('current').siblings().removeClass('current');
	});

	$('.close-tabs').click(function(){
		$(this).closest('.tab').removeClass('opened');
		$(this).closest('.section-hidden-tabs').removeClass('opened');
		$( $(this).data('nav') + " > *" ).removeClass('current');
	});

	// Static Notifications
	$('.static-notification-section .notification-close').click(function(){
		$(this).closest('.static-notification-section').removeClass('opened');
	});

	setTimeout(function(){
		$('.static-notification-section').addClass('opened');
	}, 2000);

	// Notifications
	$('.notification-close').click(function(e){
		e.preventDefault();
		$(this).closest('.notification-line').removeClass('visible');
	});

	// Fullpage Tabs
	$("[data-fullpage-tab]").click(function(e){
		e.preventDefault();

		var dest = $( $(this).data('fullpage-tab') );

		dest.addClass('opened');
	});

	$('.fullpage-tabs-container .tab-close').click(function(){
		$(this).closest('.tab').removeClass('opened');
	});

	// Panel Form
	$('.panel-form-wrapper form').on('submit', function(e){
		e.preventDefault();

		// Action if valid
		$(this).closest('.panel-form-content').slideUp(300);
		$(this).closest('.panel-form-content').siblings('.panel-form-thank-you').addClass('visible');

		return false;
	});

	// Modals
	$('[data-modal]').click(function(e){
		e.preventDefault();

		var dest = $( $(this).data('modal') );

		dest.addClass('visible');
	});

	$('.modal').click(function(e){
		$(this).removeClass('visible');
	});

	$('.modal-dialog').click(function(e){
		e.stopPropagation();
	});

	$('.modal-close').click(function(e){
		e.preventDefault();

		$(this).closest('.modal').removeClass('visible');
	});

	// Tabs Nav
	$('.tabs-nav li').hover(function(){
		$(this).siblings('.underline').css({ 'left': $(this).position().left })
	}, function(){
		$(this).siblings('.underline').css({ 'left': $(this).siblings('.current-menu-item').position().left });
	});

	// Scroll to anchor
	$('a[href^="#"]').click(function(){
		 $('html, body').animate({
			scrollTop: $( $.attr(this, 'href') ).offset().top - 90
		}, 500);
		return false;
	});

	// Accordions
	$('[data-accordion]').click(function(){
		var dest = $( $(this).data('accordion') );

		if ($(this).hasClass('current')) {
			dest.slideUp(500);
			$(this).removeClass('current');
		} else{
			dest.slideDown(500).siblings('.accordion-content').slideUp(500);
			$('[data-accordion]').removeClass('current');
			$(this).addClass('current');
		}
	});

	// TODO: ↓↓↓ remove this script ↓↓↓
	// Current menu item highlithing
	$(function () {
		// var location = window.location.href;
		// var cur_url = location.split('/').pop();

		// $('.top-nav li, .panel-nav li, .footer-nav li, .sidebar-nav li').each(function () {
		// 	var link = $(this).find('a').attr('href');

		// 	// console.log(link);

		// 	if (cur_url == '') {
		// 		cur_url = 'index.php';
		// 	}

		// 	if (cur_url == link)
		// 	{
		// 		$(this).addClass('current-menu-item');
		// 		$(this).parents('li').addClass('current-menu-parent');
		// 	}
		// });
	});
});

// Logos Slider
$(window).on("load", function() {

	var $landingWrapper = $(".logos-slider"),
		$landingInnerContent = $(".slider-track");

		$landingInnerContent.each(function(){
			$(this).width( $(this).find('.slide').length * 180 );
		});

	// set initial container to half of .landing-inner-content width
	//TweenMax.set($landingWrapper, {scrollTo: {x: $landingInnerContent.width()/4}, ease: Power2.easeOut});

	// scroll left and right
	$landingInnerContent.on("mousemove touchmove", function(e) {
		if ($(window).width() > 767) {
			if (e.clientX > ($landingWrapper.width() / 2 + $landingWrapper.offset().left) + 200 ) {
				TweenMax.to($landingWrapper, 2, {
					scrollTo: {
						x: "+=150"
					},
					ease: Power2.easeOut
				});
			} else if(e.clientX < ($landingWrapper.width() / 2 + $landingWrapper.offset().left) - 200) {
				TweenMax.to($landingWrapper, 2, {
					scrollTo: {
						x: "-=150"
					},
					ease: Power2.easeOut
				});
			}
		}
	});

});

// Simple Content Filter
$(document).ready(function(){
	$('[data-filter]').click(function(){
		var condition = $(this).data('filter');

		$( condition ).siblings('.mix').addClass('not-visible');
		$( condition ).removeClass('not-visible');

		$(this).addClass('current-menu-item');
		$(this).siblings().removeClass('current-menu-item');


	});

	$('[data-filter] a').click(function(e){
		e.preventDefault();
	});
});