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
    <body id="inscription_influenceur">
        <form id="forme_influenceur" action="inscription_influenceur.php" method="post">
            
            <div id="div1" class="divininf">
                <label for="nom">Nom :</label><br>
                <input type="text" id="nom" name="nom" placeholder="votre nom" required="required"><br><br>
                    
                <label for="prenom">Prénom :</label><br>
                <input type="text" id="prenom" name="prenom" placeholder="votre prénom" required="required"><br><br>
            
                <label for="email">Email :</label><br>
                <input type="email" id="email" name="email" placeholder="exemple@gmail.com" required="required"><br><br>
            
                <label for="mdp">Mot de passe :</label><br>
                <input type="password" id="mdp" name="mdp" required="required"><br><br>
                    
                <label for="civilite">Civilité :</label><br>
                <input name="civilite" value="homme" type="radio"> Homme
                <input name="civilite" value="femme" checked="" type="radio"> Femme<br><br>
                            
                <label for="ville">Ville :</label><br>
                <input type="text" id="ville" name="ville" placeholder="votre ville" required="required" ><br><br>
            </div>
            <div id="div2" class="divininf">
                <label for="insta">Instagram :</label><br>
                <input type="url" id="insta" name="insta" placeholder="votre url de compte instagram" required="required"><br><br>
            
                <label for="nbrabonne">Nombre d'abonnés :</label><br>
                <input type="text" id="nbrabonne" name="nbrabonne" placeholder="votre nombre d'abonnés" required="required"><br><br>
            
                <label for="descript">Description :</label><br>
                <textarea id="descript" name="descript" placeholder="Description" required="required"></textarea><br><br>
            
                <label for="img">photo de profil :</label><br>
                <input type="file" id="img" name="img" accept="image/png, image/jpeg" required="required"><br><br>
            
               
                    <input type="submit" name="inscription_influenceur" value="S'inscrire" class="cnx" onclick="navigate()" >
                
            </div>
        </form>
    </body>
</html>