<?php 
Class Article
{
private $_id_article;
private $_title;
private $_auteur;
private $_text;
private $_data_creation;
private $_data_update;
private $_preview_image;
private $_categorie;


	public function __construct($donnees)
	{
		$this->_id_article = $donnees[0];
		$this->_title = $donnees[1];
		$this->_auteur = $donnees[2];
		$this->_text = $donnees[3];
		$this->_data_creation = $donnees[4];
		$this->_data_update = $donnees[5];
		$this->_preview_image = $donnees[6];
		$this->_categorie = $donnees[7];
	}

    
    public function setIdArticle($_id_article)
    {
        $this->_id_article = $_id_article;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->_title;
    }

   
    public function setTitle($_title)
    {
        $this->_title = $_title;

        return $this;
    }

   
    public function getAuteur()
    {
        return $this->_auteur;
    }

    public function setAuteur($_auteur)
    {
        $this->_auteur = $_auteur;

        return $this;
    }

    public function getText()
    {
        return $this->_text;
    }


    public function setText($_text)
    {
        $this->_text = $_text;

        return $this;
    }

    
    public function getDataCreation()
    {
        return $this->_data_creation;
    }

    
    public function setDataCreation($_data_creation)
    {
        $this->_data_creation = $_data_creation;

        return $this;
    }

    
    public function getDataUpdate()
    {
        return $this->_data_update;
    }

    
    public function setDataUpdate($_data_update)
    {
        $this->_data_update = $_data_update;

        return $this;
    }

    
    public function getPreviewImage()
    {
        return $this->_preview_image;
    }

   
    public function setPreviewImage($_preview_image)
    {
        $this->_preview_image = $_preview_image;

        return $this;
    }

    
    public function getCategorie()
    {
        return $this->_categorie;
    }

    
    public function setCategorie($_categorie)
    {
        $this->_categorie = $_categorie;

        return $this;
    }
}



?>