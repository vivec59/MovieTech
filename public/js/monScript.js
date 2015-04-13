$(document).ready(function(){

	$("#frm_search").submit(function(){
		var $pos = $(this);

		$(".film").remove();
		$.ajax
		({
			url: $pos.attr('action'),
			type: $pos.attr('method'),
			data: $pos.serialize(),
			success: function(html)
			{
				alert(html);
				var $reponse = $.parseJSON(html);
				var $jaquette;
				if($reponse.hasOwnProperty("feed"))
				{
					$.each($reponse.feed.movie, function(key, value)
					{	

						if(value.hasOwnProperty("poster"))
	                    {
	                        $jaquette = value.poster.href;
	                    }
	                    else
	                    {
	                    	$jaquette = "http://fr.web.img4.acsta.net/r_160_240/b_1_d6d6d6/commons/emptymedia/empty_photo.jpg";
	                    }
	                    var $divfilm = $("<div class='row film'><div class='ListFilm col-md-5 col-md-offset-1'><div class='col-md-2'><img src=\"" + $jaquette + "\" width=\"60\" height=\"80\" /></div> <div class='col-md-10'><label>Nom : </label>  " + value.title + " <label>Titre original : </label> " + value.originalTitle + " </br><label>Année : </label> " + value.productionYear + "</br><label>Acteurs : </label> " + value.castingShort.actors + "</div></div></div>");
						
	                    $("body").append($divfilm);
	                });
                }
                else
                {
                	$.each($reponse, function(key, value)
					{	
	                    $jaquette = "http://fr.web.img4.acsta.net/r_160_240/b_1_d6d6d6/commons/emptymedia/empty_photo.jpg";
	                    var $divfilm = $("<div class='row film'><div class='ListFilm col-md-5 col-md-offset-1'><div class='col-md-2'><img src=\"" + $jaquette + "\" width=\"60\" height=\"80\" /></div> <div class='col-md-10'><label>Nom : </label>  " + $reponse[key]["Nom_Film"] + " <label>Année : </label> " + $reponse[key]["Annee_Film"] + "</br><label>Catégorie : </label> " + $reponse[key]["Categorie_Film"] + "</br><label>Réalisateur : </label> " + $reponse[key]["Realisateur_Film"] + "</br></div></div></div>");
						
	                    $("body").append($divfilm);

	                    console.log(key + " : " + $reponse[key]);
	                });
                }
			}
		});

		return false;
	});


});