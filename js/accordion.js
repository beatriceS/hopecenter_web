// JavaScript Document

$(document).ready(function() {
	$('.answer_ver1').hide();
	$('.main_ver1').toggle(
		function() {
			$(this).next('.answer_ver1').slideDown();
			$(this).addClass('close');
		},
		function() {
			$(this).next('.answer_ver1').slideUp();
			$(this).removeClass ('close');
			}); // end of toggle
}); // end ready

$(document).ready(function() {
	$('.answer_ver2').hide();
	$('.main_ver2').toggle(
		function() {
			$(this).next('.answer_ver2').slideDown();
			$(this).addClass('close');
		},
		function() {
			$(this).next('.answer_ver2').slideUp();
			$(this).removeClass ('close');
			}); // end of toggle
}); // end ready