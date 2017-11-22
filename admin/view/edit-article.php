<?php
  // echo getcwd().'<br>'; 
	require_once('view/header.inc.php');
?>

<div class="container">
  <form method="post">

    <input type="text" name="titre_article" value="<?php echo $article_title ?>" class="form-control-file" id="titre_article">
     	 <label for="mini_img_import">Image Actuelle	 <img src="<?php echo $article_preview_image ?>"></label>
  	 <label for="mini_img_import">Importer l'image miniature</label>
  
    <input type="file" name="mini_img" class="form-control-file" id="mini_img">
=======
  	
>>>>>>> 3dca1478b3b61cd73cd6b2d12b675c48d5a3fb34
    <textarea id="mytextarea"><?php echo $article_text ?></textarea>


    <button type="submit" class="btn btn-danger lien-suppr" action="../controler/control-delete.php" method="post" name="id_article" value="<?php echo $id_article;?>">Supprimer</button>

<script type="text/javascript" src="../public/view/vendor/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../public/view/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" type="text/javascript" src="../public/view/vendor/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="../public/view/vendor/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="../public/view/vendor/tinymce/edit.js"></script>
<script type="text/javascript" src="js/action_button.js"></script>
</div>

