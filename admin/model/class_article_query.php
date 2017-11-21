<?php 
class Article_query
{
	private $_bdd;



	public function __construct($_bdd)
	{
		$this->_bdd = $_bdd;
	}
     	

    public function getArticle($id_article)
    {
			$req = $this->_bdd->prepare('SELECT * FROM table_article WHERE id_article = :id_article');
			$req->execute(array(
			    'id_article' => $id_article));
			    
			$donnees = $req->fetch();
			
			$id_article = new Article($donnees);
			return $id_article;
    }
    public function getBdd()
    {
        return $this->_bdd;
    }

    
    public function setBdd($_bdd)
    {
        $this->_bdd = $_bdd;

        return $this;
    }
}


?>