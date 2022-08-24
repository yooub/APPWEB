<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Influenceur</title>
  <link rel="stylesheet" href="CSS/inlfu.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" />
</head>
<body>
  <!-- Barre de navigation -->
  <nav>
  <img src="IMGS/logoweb.png" align="center" width="100px" height="100px">
    <div class="onglets">
      <a class="link" href="envoi.php">Messages</a> 
      <a class="link">Partenariats</a>
      <a class="link" href="userinfluenceur.php">Profil</a>
      <form class="link">
        <input type="search" placeholder="Rechercher">
      </form>
      
      <p class="ico"><i class="far fa-heart"></i></p>
      <p class="ico"><i class="fas fa-shopping-cart"></i></p>
    </div>
  </nav>
  <!-- Fin de la barre de navigation -->
  
  <!-- Header -->
   <header>
     <h1 >Salut <?= $_SESSION['nom']." ".$_SESSION['prenom'] ?>.</h1>
   </header>
  <!-- Fin du header -->
  
  <!-- Section principale -->
  <section class="main">
    
    <!-- Toutes les cartes -->
    <table align="center">
      <tr>
        <td>
          <img src="IMGS/DIOR.jpg"  alt="DIOR" width="300px" height="300px" border="3">
          <div class="newslatter">
            <form>
                <input type="text" name="message" id="msg" placeholder="Ecrire votre message">
                <input type="submit" value="Envoyer" name="submit">
            </form>
        </div>
        </td>
        <td><td><td><td><td></td></td></td></td></td>
        <td>
          <img src="IMGS/Gibson.jpg"  alt="Gibson" width="300px" height="300px" border="3">
          <div class="newslatter">
            <form>
                <input type="text" name="message" id="msg" placeholder="Ecrire votre message">
                <input type="submit" value="Envoyer" name="submit">
            </form>
        </div>
        </td>
        <td><td><td><td><td></td></td></td></td></td>
        <td>
          <img src="IMGS/Adidas.png" alt="Adidas" width="300px" height="300px" border="3">
          <div class="newslatter">
            <form>
                <input type="text" name="message" id="msg" placeholder="Ecrire votre message">
                <input type="submit" value="Envoyer" name="submit">
            </form>
        </div>
        </td>
      </tr>
      <tr><tr><tr><tr><tr></tr></tr></tr></tr></tr>
      <tr>
        <td>
          <img src="IMGS/LC.png"  alt="LC Waikiki" width="300px" height="300px" border="3">
          <div class="newslatter">
            <form>
                <input type="text" name="message" id="msg" placeholder="Ecrire votre message">
                <input type="submit" value="Envoyer" name="submit">
            </form>
        </div>
        </td>
        <td><td><td><td><td></td></td></td></td></td>
        <td>
          <img src="IMGS/Gucci.jpg"  alt="Gucci" width="300px" height="300px" border="3">
          <div class="newslatter">
            <form>
                <input type="text" name="message" id="msg" placeholder="Ecrire votre message">
                <input type="submit" value="Envoyer" name="submit">
            </form>
        </div>
        </td>
        <td><td><td><td><td></td></td></td></td></td>
        <td>
          <img src="IMGS/Zara.png" alt="Zara" width="300px" height="300px" border="3">
          <div class="newslatter">
            <form>
                <input type="text" name="message" id="msg" placeholder="Ecrire votre message">
                <input type="submit" value="Envoyer" name="submit">
            </form>
        </div>
        </td>
      </tr>

    </table>
    <div class="cards">
      
      <!--
      <div class="card">
        <img src="/IMGS/DIOR.jpg">
      </div>
      
      <div class="card">
        <img src="/IMGS/Gibson.jpg">
      </div>
      
      <div class="card">
        <img src="/IMGS/Adidas.png">
      </div>
      <div class="card">
        <img src="/IMGS/Louis Vuitton.png">
      </div>
      <div class="card">
        <img src="/IMGS/Gucci.jpg">
      </div>
      <div class="card">
        <img src="/IMGS/Bobbi.png">
      </div>
      
     </div> -- >
    <!-- Fin de toutes les cartes -->
    
    <!-- Video de presentation -->
    <!-- Fin de la video de presentation -->
  </section>
  <!-- Fin de la section principale -->
  
  <!-- Pied de page -->
  <footer>
    <p>&copy; Contactez-nous au 06 98 87 82 00</p>
    <div class="social-media">
      <p><i class="fab fa-facebook-f"></i></p>
      <p><i class="fab fa-twitter"></i></p>
      <p><i class="fab fa-instagram"></i></p>
      <p><i class="fab fa-linkedin-in"></i></p>
    </div>
  </footer>
  <!-- Fin du pied de page -->
</body>
</html>