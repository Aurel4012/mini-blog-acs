<?php
if (isset($_POST['ID_ARTICLE'])){
htmlspecialchars(($_POST['ID_ARTICLE']));
require_once ('../model/model-article');
}
else{
	echo '<h4>Aucun Article sélectioné</h4>';
}


?>