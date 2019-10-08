$(document).ready(function() {
	$('#content').load('defaultShop.php');
	$('div#filter form a').click(function() {
		var page = $(this).attr('href');
		$('#content').load(page + '.php');
		return false;
	});
});