<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=publirs', 'root', '');
if(isset( $_SESSION['inf_if']) AND !empty( $_SESSION['inf_if'])) {
   if(isset($_POST['envoi_message'])) {
      if(isset($_POST['destinataire'],$_POST['message']) AND !empty($_POST['destinataire']) AND !empty($_POST['message'])) {
         $destinataire = htmlspecialchars($_POST['destinataire']);
         $message = htmlspecialchars($_POST['message']);
         $id_destinataire = $bdd->prepare('SELECT id FROM marque  WHERE marque  = ?');
         // $id_destinataire = $bdd->prepare('SELECT id FROM infleunceur WHERE nom = ?');
         $id_destinataire->execute(array($destinataire));
         $dest_exist = $id_destinataire->rowCount();
         if($dest_exist == 1) {
            $id_destinataire = $id_destinataire->fetch();
            $id_destinataire = $id_destinataire['id'];
            $ins = $bdd->prepare('INSERT INTO messages(id_expediteur,id_destinataire,message) VALUES (?,?,?)');
            $ins->execute(array( $_SESSION['inf_if'],$id_destinataire,$message));
            $error = "Votre message a bien été envoyé !";
         } else {
            $error = "Cet utilisateur n'existe pas...";
         }
      } else {
         $error = "Veuillez compléter tous les champs";
      }
   }
   $destinataires = $bdd->query('SELECT marque  FROM marque  ORDER BY marque ');
   // $destinataires = $bdd->query('SELECT marque FROM marque ORDER BY marque');
   ?>
   <!DOCTYPE html>
   <html>
   <head>
      <title>Envoi de message</title>
      <meta charset="utf-8" />
   </head>
   <body>
      <form method="POST" action="envoi.php">
         <label>Destinataire:</label>
         <select  name="destinataire">
            <?php while($d = $destinataires->fetch()) { ?>
            <option><?= $d['marque'] ?></option>
            <?php } ?>
         </select> 
         <input type="text" name="destinataire" />
         <br /><br />
         <textarea placeholder="Votre message" name="message"></textarea>
         <br /><br />
         <input type="submit" value="Envoyer" name="envoi_message" />
         <br /><br />
         <?php if(isset($error)) { echo '<span style="color:red">'.$error.'</span>'; } ?>
      </form>
      <br />
      <a href="reception.php">Boîte de réception</a>
   </body>
   </html>
<?php
}
?>