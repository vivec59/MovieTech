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
			/*foreach($resultat as $film)
			{
				$films[] = $film["Nom_Film"];
			}*/
			foreach($resultat as $film)
			{
				$nom = $film["Nom_Film"];
				$annee = $film["Annee_Film"];
				$categorie = $film["Categorie_Film"];
				$realisateur = $film["Realisateur_Film"];
				$monObjet = new movie($nom, $annee, $categorie, $realisateur);
				$films[] = $monObjet;
				print_r($monObjet);
			}
			$retour = array_values($films);
			print_r($retour);
			echo json_encode($retour);
		}
		else
		{
			$reponse = json_decode(get_movie_by_name($_POST['recherche']));
			echo json_encode($reponse);	
		}
	}

?>