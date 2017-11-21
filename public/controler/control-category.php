<?php
	require_once('../mini-blog-acs/admin/model/model-category.php');
	require_once('../mini-blog-acs/admin/model/model-categoryquery.php');
	if (isset($_GET['id_categorie'])){
		$id_categorie = htmlspecialchars(($_GET['id_categorie']));
		echo $id_categorie;
	}
	else{
		echo "Ca marche pas !";
	}
	
?>