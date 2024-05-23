// JavaScript Document
var storedJson;

$(document).ready(function(){

	 //AJAX service request to get the main text data from the json data store
	 $.getJSON('../assignment/application/model/data.json', function(jsonObj) {
		
		storedJson = jsonObj;
		// Main Page
		$('#home_title').html('<h2 class="display-6 text-center text-white font-italic">' + jsonObj.pageTextData[0].quote1 + '</h2>');
		$('#home_subtitle').html('<h2 class="h4 text-center text-white"><br>' + jsonObj.pageTextData[0].quote2 + '<br><br><br>' + jsonObj.pageTextData[0].ourProducts + '</h2>');
	 
		$('#home_gcb_title').html('<h4>' + jsonObj.pageTextData[1].title + '</h4>');
		$('#home_gcb_caption').html('<p>' + jsonObj.pageTextData[1].caption + '</p>');
	
		$('#home_gsb_title').html('<h4>' + jsonObj.pageTextData[2].title + '</h4>');
		$('#home_gsb_caption').html('<p>' + jsonObj.pageTextData[2].caption + '</p>');

		$('#home_gfb_title').html('<h4>' + jsonObj.pageTextData[3].title + '</h4>');
		$('#home_gfb_caption').html('<p>' + jsonObj.pageTextData[3].caption + '</p>');

		$('#home_gcc_title').html('<h4>' + jsonObj.pageTextData[4].title + '</h4>');
		$('#home_gcc_caption').html('<p>' + jsonObj.pageTextData[4].caption + '</p>');

		$('#home_gsc_title').html('<h4>' + jsonObj.pageTextData[5].title + '</h4>');
		$('#home_gsc_caption').html('<p>' + jsonObj.pageTextData[5].caption + '</p>');

		$('#home_gfc_title').html('<h4>' + jsonObj.pageTextData[6].title + '</h4>');
		$('#home_gfc_caption').html('<p>' + jsonObj.pageTextData[6].caption + '</p>');

		$('#home_gcCup_title').html('<h4>' + jsonObj.pageTextData[7].title + '</h4>');
		$('#home_gcCup_caption').html('<p>' + jsonObj.pageTextData[7].caption + '</p>');

		$('#home_gsCup_title').html('<h4>' + jsonObj.pageTextData[8].title + '</h4>');
		$('#home_gsCup_caption').html('<p>' + jsonObj.pageTextData[8].caption + '</p>');

		$('#home_gfCup_title').html('<h4>' + jsonObj.pageTextData[9].title + '</h4>');
		$('#home_gfCup_caption').html('<p>' + jsonObj.pageTextData[9].caption + '</p>');

		$('#model_title').html('<h2 class="h4 text-center text-white"><br><br><i>' + jsonObj.pageTextData[10].title + '</i></h2>');

		updateModelCaption(4);
	});
});

function updateModelCaption(id)
{
	$('#model_caption').html('<h2 class="h4 text-center text-white"><br>' + storedJson.pageTextData[id].title + " - " + storedJson.pageTextData[id].caption + '</h2>');
}






