<?php
require_once "model/class_article.php";
require_once "model/class_article_query.php";
function getArticle($id_article){
if (isset($id_article)){
		$articlequery = new Article_query($_SESSION['bdd']);
	$article = $articlequery->getArticle($id_article);
	require_once ('view/edit-article.php');
}else{ $message= 'Aucun Article';}
echo 'Aucun Article!';
require_once ('view/edit-article.php');


}




	

?>