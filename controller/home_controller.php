<?php 

require_once('../model/movie_model.php');
require_once('../allocine-api/PHP/search.php');
require_once('../allocine-api/PHP/allocine.class.php');
require_once('../model/movie.php');
/*	$reponse = get_movie();

	$array['mesfilms'] = $reponse;
	json_encode($array);*/

	if (isset($_POST['recherche']))
	{
		$resultat = get_movie(($_POST['recherche']));
		if($resultat != null)
		{
			$films = array();
			foreach($resultat as $film)
			{
				$films[] = array("Nom_Film" => $film["Nom_Film"], "Annee_Film" => $film["Annee_Film"], "Categorie_Film" => $film["Categorie_Film"], "Realisateur_Film" => $film["Realisateur_Film"]);
			}
			///////////////////////////////////////
			//////ESSAI DU PASSAGE A L'OBJET///////
			///////////////////////////////////////
			/*foreach($resultat as $film)
			{
				$nom = $film["Nom_Film"];
				$annee = $film["Annee_Film"];
				$categorie = $film["Categorie_Film"];
				$realisateur = $film["Realisateur_Film"];
				$films[] = array(new movie($nom, $annee, $categorie, $realisateur));
			}*/
			///////////////////////////////////////
			///////////////////////////////////////
			///////////////////////////////////////
			$retour = array_values($films);
			echo json_encode($retour);
		}
		else
		{
			$reponse = json_decode(get_movie_by_name($_POST['recherche']));
			echo json_encode($reponse);	
			//////////////////////////////////////////////////////
			/////////INSERTION DU RETOUR DU WS DANS LA BDD////////
			//////////////////////////////////////////////////////
			//$movies = array(new movie());
			//insert_movie($movies);
			//////////////////////////////////////////////////////
			//////////////////////ESSAIS//////////////////////////
			//////////////////////////////////////////////////////
		}
	}

?>