<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">
            <title>Mini-Blog ACS</title>
            <!-- Bootstrap core CSS -->
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <!-- Custom styles for this template -->
            <link href="css/blog-post.css" rel="stylesheet">

            <?php
                require_once ('admin/controler/control-category.php');
                require_once ('admin/controler/control-article.php');
                require_once ('admin/controler/control-admin-user.php');
            ?>
        </head>
    <header>
   
        <div class="col-lg-12">
            <img src="css\img\logo.png" class="text-center">
          <div class="container row text-center">
            <h1 class="mt-5  text-center">L'AlcoBlog - Le blog qui va vous faire tourner la tête!</h1>
          </div>

          <p class="lead">
            Ici on ne parle que d'alcool donc si vous n'en buvez pas n'allez pas plus loin, on risque de vous saoûler! 
          </p>

          <hr>
    </header>