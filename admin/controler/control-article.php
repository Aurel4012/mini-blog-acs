<?php
if (isset($_POST['ID_ARTICLE'])){
$ID_ARTICLE = htmlspecialchars(($_POST['ID_ARTICLE']));
header('Location: ../model/model-article.php?ID_ARTICLE='.$ID_ARTICLE);

}
else{
	header('Location: ../model/model-article.php');
}


?>