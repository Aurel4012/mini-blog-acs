<?php
// ici le modele d'edition des articles
function getarticle(){
if (isset($id_article)){
	$message= $id_article;
}else{ $message= 'Aucun Article';}

require_once ('view/edit-article.php');


}

?>