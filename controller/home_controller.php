<?php 

include_once('model/movie_model.php');
	
	$reponse = get_movie();

	$array['mesfilms'] = $reponse;
	json_encode($array);
?>