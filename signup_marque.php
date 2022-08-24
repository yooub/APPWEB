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
        <form id="forme_influenceur" method="post" action="inscription_marque.php">
            
            <div id="div1" class="divininf">
                <label for="nom">Marque :</label><br>
                <input type="text" id="marque" name="marque" placeholder="le nom de la marque" required="required"><br><br>
            
                <label for="email">Email :</label><br>
                <input type="email" id="email" name="email" placeholder="exemple@gmail.com" required="required"><br><br>
            
                <label for="mdp">Mot de passe :</label><br>
                <input type="password" id="mdp" name="mdp" required="required"><br><br>
                    
                <label for="typeproduit">Type de produit :</label><br>
                <input type="text" id="typeproduit" name="typeproduit" placeholder="cosmetics,nourriture..." required="required"><br><br>
                             
            </div>
            <div id="div2" class="divininf">
                <label for="produit">Produit :</label><br>
                <input type="text" id="produit" name="produit" placeholder="cosmetics,nourriture..." required="required"><br><br>

                <label for="tel">Telephone:</label><br>
                <input type="tel" id="tel" name="tel" placeholder="votre numero" required="required"><br><br>
            
                <label for="descript">Description :</label><br>
                <textarea id="descript" name="descript" placeholder="Description" required="required"></textarea><br><br>
            
                <label for="logo">Logo :</label><br>
                <input type="file" id="logo" name="logo" accept="image/png, image/jpeg" required="required"><br><br>
            
                <input type="submit" name="inscription_marque" value="S'inscrire" class="cnx" onclick="navigate()" >
            </div>
        </form>
    </body>
</html>