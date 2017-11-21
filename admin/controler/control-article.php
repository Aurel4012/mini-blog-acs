<?php
echo getcwd();
require_once('model/model-article.php');
if (isset($_GET['id_article'])){
$id_article = htmlspecialchars(($_GET['id_article']));
echo $id_article;
getarticle($id_article);

}else{
	getarticle();
}



?>