$(document).ready(function() {
	$('ul#cate li a').click(function() {
		var page = $(this).attr('href');
		$('#content').load(page + '.php');
		return false;
	});
});