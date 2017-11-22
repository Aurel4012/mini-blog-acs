<?php
require 'index.php';

	if(!empty($_GET['id_article'])) 
    {
        $id_article = checkInput($_GET['id_article']);
    }

    if(!empty($_POST)) 
    {
        $id_article = checkInput($_POST['id_article']);
        $bdd = Database::connect();
        $statement = $bdd->prepare("DELETE FROM table_article WHERE id_article = ?");
        $statement->execute(array($id_aricle));
        Database::disconnect();
        header("Location: index.php"); 
    }

    function checkInput($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }
?>