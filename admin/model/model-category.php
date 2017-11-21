<?php
	class Category{
		private $_id_categorie;
		private $_name;


	/**
	 * Class Constructor
	 * @param    $_id_categorie   
	 * @param    $_name   
	 */
	public function __construct($donnees)
	{
		$this->_id_categorie = $donnees[0];
		$this->_name = $donnees[1];
	}	

    /**
     * @return mixed
     */
    public function getIdCategorie()
    {
        return $this->_id_categorie;
    }

    /**
     * @param mixed $_id_categorie
     *
     * @return self
     */
    public function setIdCategorie($_id_categorie)
    {
        $this->_id_categorie = $_id_categorie;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $_name
     *
     * @return self
     */
    public function setName($_name)
    {
        $this->_name = $_name;

        return $this;
    }
}