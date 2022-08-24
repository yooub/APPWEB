<?php
session_start();
echo "in";
if(isset($_POST['email']) && isset($_POST['mdp']))
// if(isset($_POST['user']) && isset($_POST['password']))
{
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "publirs";

// Create 
$db = mysqli_connect($servername, $username, $password, $dbname);

$email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
$mdp = mysqli_real_escape_string($db,htmlspecialchars($_POST['mdp']));
   //  $db = mysqli_connect('localhost', 'root', '', 'publirs')
   //         or die('erreur de connexion à la base de données');
   //  $email = mysqli_real_escape_string($db,htmlspecialchars($_POST['email'])); 
   //  $mdp = mysqli_real_escape_string($db,htmlspecialchars($_POST['mdp']));
   echo "out";
   echo $email;
    if($email !== "" && $mdp !== "")
    {
        $requete = "SELECT count(*), marque ,id FROM marque where email = '".$email."' and mdp = '".$mdp."' ";
        $exec_requete = mysqli_query($db,$requete);
        $reponse = mysqli_fetch_array($exec_requete);
        $count = $reponse['count(*)'];
        echo "here";
        if($count!=0) 
        {
           $_SESSION['marque'] =  $reponse['marque'];
           $_SESSION['email'] = $email;
           $_SESSION['inf_if'] =$reponse['id'];
           header('Location: Marque.php');
        }
        else
        { 
         echo "else";
         $_SESSION['error'] =  "Mot de passe ou email incorrect";
         header('Location: login_marque.php'); 
        }
    }
    else
    {
       header('Location: connexion_marque.html?erreur=2'); 
    }
}
else
{
   header('Location: Marque.php');
}
mysqli_close($db); 
?>