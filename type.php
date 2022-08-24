<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <link href="inc/css/style.css" rel="stylesheet">
        <link href="inc/img/img1.png" rel="icon">
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <title>PUBLI-RS</title>
    </head>
    <body id="bodytype">
        <div id="type">
            <div id="choixinfluenceur" class="choix">
                <a href="signup_influenceur.php"><img src="inc/img/influenceur.png" class="img-fluid animated" alt="">
                <h3><br> S'inscrire en tant qu'influenceur</h3></a>
            </div>
            <h1 id ="or">OU</h1>
            <div id="choixmarque" class="choix">
                <a href="signup_marque.php"><img src="inc/img/marque.jpg" class="img-fluid animated" alt="">
                <h3><br> S'inscrire en tant que marque</h3></a>
            </div>
        </div>
    </body>
</html>