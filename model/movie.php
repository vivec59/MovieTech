class movie {
	private $_nom;
	private $_originalTitle;
	private $_annee;
	private $_categorie;
	private $_realisateur;

	 function __construct($nom, $originalTitle, $annee, $categorie, $realisateur)
    {
        $this->_nom = $nom;
        $this->_originalTitle = $originalTitle;
        $this->_annee = $annee;
        $this->_categorie = $categorie;
        $this->_realisateur = $realisateur;
    }

    public function nom()
	{
    	return $this->_nom;
	}

	public function originalTitle()
	{
    	return $this->_originalTitle;
	}

	public function annee()
	{
    	return $this->_annee;
	}

	public function categorie()
	{
    	return $this->_categorie;
	}

	public function realisateur()
	{
    	return $this->_realisateur;
	}	

	public function Nom($value = "")
	{
	    if ($value == "")
	    {
	        return $this->_nom;
	    }

	    $this->_nom = $value;
	}

	public function OriginalTitle($value = "")
	{
	    if ($value == "")
	    {
	        return $this->_originalTitle;
	    }

	    $this->_originalTitle = $value;
	}

	public function Annee($value = "")
	{
	    if ($value == "")
	    {
	        return $this->_annee;
	    }

	    $this->_annee = $value;
	}

	public function Categorie($value = "")
	{
	    if ($value == "")
	    {
	        return $this->_categorie;
	    }

	    $this->_categorie = $value;
	}

	public function Realisateur($value = "")
	{
	    if ($value == "")
	    {
	        return $this->_realisateur;
	    }

	    $this->_realisateur = $value;
	}
}