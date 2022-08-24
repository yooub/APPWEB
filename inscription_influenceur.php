<?php
	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$email = $_POST['email'];

	
	$mdp = $_POST['mdp'];
	$civilite = $_POST['civilite'];
	$ville = $_POST['ville'];
    $insta = $_POST['insta'];
    $nbrabonne = $_POST['nbrabonne'];
    $descript = $_POST['descript'];
    $img = $_POST['img'];

	$conn = new mysqli('localhost','root','','publirs');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection echoué : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into influenceur(nom, prenom, email, mdp, civilite, ville, insta, nbrabonne, descript, img)
         values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssisb", $nom ,$prenom ,$email ,$mdp ,$civilite ,$ville ,$insta ,$nbrabonne ,$descript ,$img );
		$execval = $stmt->execute();
		header("location: loginInfluenceur.php"); 
		$stmt->close();
		$conn->close();
	}
?>