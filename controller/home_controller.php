<?php 

require_once('../model/movie_model.php');
require_once('../allocine-api/PHP/search.php');
require_once('../allocine-api/PHP/allocine.class.php');

/*	$reponse = get_movie();

	$array['mesfilms'] = $reponse;
	json_encode($array);*/

	if (isset($_POST['recherche']))
	{
		$resultat = get_movie(($_POST['recherche']));
		if($resultat != null)
		{
			$mon_film = new Movie($resultat->Nom_Film, $resultat->Annee_Film, $resultat->Categorie_Film, $reponse->Realisateur_Film)
			echo json_encode($mon_film);
		}
		else
		{
			$reponse = json_decode(get_movie_by_name($_POST['recherche']));
			echo json_encode($reponse);	
		//si il y a plusieurs réponses, on demande de faire un choix à l'utilisateur
		////////
		//TODO//
		///////
		//echo json_encode($reponse);
		//sinon, on affiche et on ajoute en base (créer fonction add_movie)
		////////
		//TODO//
		////////
		}
	}

?>