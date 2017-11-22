<?php

$article_query = getArticle($id_article,$bdd);
// var_dump($article_object);
// foreach ($article as $key => $value) {
// 	# code...
// }
$article_title= $article_query->getTitle($id_article,$bdd);
$article_auteur= $article_query->getAuteur($id_article,$bdd);
$article_text= $article_query->getText($id_article,$bdd);
$article_data_creation= $article_query->getDataCreation($id_article,$bdd);

	echo $article_title;

?>