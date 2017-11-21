 <?php  
    session_start();
    	//Connexion base de données
	try{
		$bdd = new PDO('mysql:host=localhost;dbname=mini-blog', 'root', '');
	}
	catch(Exception $e){
		die('Erreur : '.$e->getMessage());
	} 
	$_SESSION['bdd'] =  $bdd;//creer la variable session user
    require_once ('controler/control-category.php');
    require_once ('controler/control-article.php');
    require_once ('controler/control-admin-user.php');
 ?>