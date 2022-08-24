<?php
session_start();
$bdd = new PDO('mysql:host=127.0.0.1;dbname=publirs', 'root', '');
if(isset( $_SESSION['inf_if']) AND !empty( $_SESSION['inf_if'])) {
$msg = $bdd->prepare('SELECT * FROM messages WHERE id_destinataire = ? ');
$msg->execute(array($_SESSION['inf_if']));
$msg_nbr = $msg->rowCount();
?>
<!DOCTYPE html>
<html>
<head>
   <title>Boîte de réception</title>
   <meta charset="utf-8" />
</head>
<body>
   <a href="envoi.php">Nouveau message</a><br /><br /><br />
   <h3>Votre boîte de réception:</h3>
   <?php
   if($msg_nbr == 0) { echo "Vous n'avez aucun message..."; }
   while($m = $msg->fetch()) {
      $p_exp = $bdd->prepare('SELECT marque FROM marque WHERE id = ?');
      $p_exp->execute(array($m['id_expediteur']));
      $p_exp = $p_exp->fetch();
      $p_exp = $p_exp['marque'];
   ?>
   <b><?= $p_exp ?></b> vous a envoyé: <br />
   <?= nl2br($m['message']) ?><br />
   <br/>
   <?php } ?>
</body>
</html>
<?php } ?>