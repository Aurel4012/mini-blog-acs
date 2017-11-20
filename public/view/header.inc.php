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
                require_once ('../admin/controler/control-category.php');
                require_once ('../admin/controler/control-article.php');
                require_once ('../admin/controler/control-admin-user.php');
            ?>
        </head>
    <header>
    <!-- Post Content Column -->
        <div class="col-lg-8">

          <!-- Title -->
          <h1 class="mt-4">Post Title</h1>

          <!-- Author -->
          <p class="lead">
            by
            <a href="#">Start Bootstrap</a>
          </p>

          <hr>
    </header>