<?php
// Le contôleur des articles si id_article existe formulaire d'edition préremplit, sinon formulaire d'ajout
// echo getcwd(); pour afficher l'url courante du dossier
require_once('model/model-article.php');
if (isset($_GET['id_article'])){
$id_article = htmlspecialchars(($_GET['id_article']));
echo $id_article;
getarticle($id_article);

}else{
	getarticle();
}



?>