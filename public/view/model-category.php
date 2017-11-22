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
            $this->_id_categorie = $donnees['id_categorie'];
            $this->_name         = $donnees['name'];
        }

    
        public function getIdCategorie()
        {
            return $this->_id_categorie;
        }

        
        public function setIdCategorie($_id_categorie)
        {
            $this->_id_categorie = $_id_categorie;

            return $this;
        }

        
        public function getName()
        {
            return $this->_name;
        }

        
        public function setName($_name)
        {
            $this->_name = $_name;

            return $this;
        }

}

?>