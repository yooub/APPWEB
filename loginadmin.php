<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <link href="inc/css/style.css" rel="stylesheet">
        <link href="inc/img/img1.png" rel="icon">
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        <title>WILio marque login</title>
    </head>
    <body id="inscription_influenceur">
    <h1 align='center' border='3' style="text-decoration: underline;"><br> Login as administrator:</h1>
        <form class="form_connexion" style="margin: 130px 500px;
        padding: 10px;
        border-radius: 20px;
        box-shadow: 0px 1px 20px 15px #dc27434f;
        background-color: white;
        font-size: 18px;
        color: #dc2743;" method="post" action="admin.php">
            <div id="div1" class="divininf">
                <label for="email">Email :</label><br/>
                <input type="text" id="email" name="email" value="root@WILio.com" /><br/> <br/>
                <span>
                     <?php 
                    //   if(isset($_SESSION['error'])){
                    //       echo $_SESSION['error'];
                    //   }
                    //   unset($_SESSION['error']);
                      ?>
                    </span>
                <label for="mdp">Mot de passe :</label><br />
                <input type="password" id="mdp" name="mdp" value="*****"/><br/><br/>
        
                <input type="submit" value="Se connecter" onclick="navigate()" />
            </div>
        </form>
    </body>
</html>