<?php
session_start();
echo "in";
if(isset($_POST['email']) && isset($_POST['mdp']))
{
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "publirs";

// Create connection
    $db = mysqli_connect($servername, $username, $password, $dbname);

    $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
    $mdp = mysqli_real_escape_string($db,htmlspecialchars($_POST['mdp']));
    echo "out";
    echo $email;
    if($email !== "" && $mdp !== "")
    {
        $requete = "SELECT count(*), nom , prenom ,id FROM influenceur where email = '".$email."' and mdp = '".$mdp."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        echo "here";
        if($count!=0) 
        {
           $_SESSION['prenom'] =  $reponse['prenom'];
           $_SESSION['nom'] =  $reponse['nom'];
           $_SESSION['email'] = $email;
           $_SESSION['inf_if'] =$reponse['id'];
           header('Location: Influ.php');
        }
        else
        {
           echo "else";
           $_SESSION['error'] =  "mot de passe ou email incorrect";
           header('Location: loginInfluenceur.php'); 
        }
    }
    else
    {
       header('Location: connexion_influenceur.html?erreur=2'); 
    }
}
else
{
   header('Location: profil_influenceur.html');
   echo "lqsr$";
}
mysqli_close($db); 
?>