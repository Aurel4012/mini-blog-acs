<?php
	class CategoryQuery{
		private $_bdd;

		public function __construct($bdd){
			$this->_bdd = $bdd;
		}

		public function getListeCategories(){
            $categories = [];

            $req = $this->_bdd->prepare('SELECT * FROM `mini-blog`.`table_categorie`;');
            $req->execute();
            while($donnees = $req->fetch()){
                $categories[] = new Categorie($donnees);
            }
            return $categories;
    	}

    	public function getCategorie($id){
    		$req = $this->_bdd->prepare('SELECT * FROM `mini-blog`.`table_categorie` WHERE id_categorie= :id;');
    		$req->execute(array(
    			'id' => $id
    		));
    		return $req->fetch();
    	}
	    
}

	
?>