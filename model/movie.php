<?php

class movie {
	private $_nom;
	//private $_originalTitle;
	private $_annee;
	private $_categorie;
	private $_realisateur;

	 function __construct($nom1, /*$originalTitle,*/ $annee1, $categorie1, $realisateur1)
    {
        $this->_nom = $nom1;
        //$this->_originalTitle = $originalTitle;
        $this->_annee = $annee1;
        $this->_categorie = $categorie1;
        $this->_realisateur = $realisateur1;
    }


    public function getNom()
	{
    	return $this->_nom;
	}

/*	public function originalTitle()
	{
    	return $this->_originalTitle;
	}*/

	public function getAnnee()
	{
    	return $this->_annee;
	}

	public function getCetegorie()
	{
    	return $this->_categorie;
	}

	public function getRealisateur()
	{
    	return $this->_realisateur;
	}	

	public function setNom($value = "")
	{
	    if ($value == "")
	    {
	        return $this->_nom;
	    }

	    $this->_nom = $value;
	}

	/*public function OriginalTitle($value = "")
	{
	    if ($value == "")
	    {
	        return $this->_originalTitle;
	    }

	    $this->_originalTitle = $value;
	}*/

	public function setAnnee($value = "")
	{
	    if ($value == "")
	    {
	        return $this->_annee;
	    }

	    $this->_annee = $value;
	}

	public function setCategorie($value = "")
	{
	    if ($value == "")
	    {
	        return $this->_categorie;
	    }

	    $this->_categorie = $value;
	}

	public function setRealisateur($value = "")
	{
	    if ($value == "")
	    {
	        return $this->_realisateur;
	    }

	    $this->_realisateur = $value;
	}
}

?>