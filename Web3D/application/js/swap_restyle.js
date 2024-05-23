// JavaScript Document
var counter = 0;
$(document).ready(function() {
	
	selectPage();
	
});

function selectPage() {

	$('#home').show();
	$('#models').hide();

	$('#navHome').click(function(){
		$('#home').show();
		$('#models').hide();
	});

	$('#navModels').click(function(){
		$('#home').hide();
		$('#models').show();
	});
}

