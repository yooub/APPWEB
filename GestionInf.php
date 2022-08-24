<?php 
if(isset($_GET["idSup"])){
    $loggedInUser = $_GET["idSup"];
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "publirs";
    
    // Create connection
    $conn = mysqli_connect('localhost', 'root', '', 'publirs') or die('erreur de connexion à la base de données');
    // var_dump ($conn);
    if( $conn){
        $sql1 = "DELETE FROM `influenceur`  WHERE `id`='$loggedInUser'";
        $results = mysqli_query($conn,$sql1);
         header('Location: admin.php?success=userDeleted');
    }else{
        echo "connexion failde";
    }
}

?>