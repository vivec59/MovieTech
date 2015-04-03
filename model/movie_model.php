<?php 
	include_once('connection_sql.php');

<<<<<<< HEAD
function get_movie()
{
	$bdd = getConnection();
	$marequete = "select * FROM film where ID_Film = 1";
	$resultat = $bdd->query($marequete);
	return $resultat->fetchAll();
}
=======
	function get_movie($movie_name)
	{
		$bdd = getConnection();
	}
>>>>>>> origin/master
?>