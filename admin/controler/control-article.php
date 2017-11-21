<?php
if (isset($_POST['id_article'])){
$id_article = htmlspecialchars(($_POST['id_article']));
require_once('../model/model-article.php');

}



?>