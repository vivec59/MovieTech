<?php
	function getConnection() 
	{
		try
		{
			$bdd = new PDO('mysql:host=127.0.0.1;dbname=movieepsi;charset=utf8','root','');
			return $bdd;
		}
		catch(Exception $e)
		{
			die('Erreur : '.$e->getMessage());
		}
	}
?>

