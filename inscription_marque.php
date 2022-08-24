<?php
	$marque = $_POST['marque'];
	$email = $_POST['email'];
	$mdp = $_POST['mdp'];
	$typeproduit = $_POST['typeproduit'];
	$produit = $_POST['produit'];
    $tel = $_POST['tel'];
    $descript = $_POST['descript'];
    $logo = $_POST['logo'];

	$conn = new mysqli('localhost','root','','publirs');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection echoué : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into marque(marque, email, mdp, typeproduit, produit, tel, descript, logo)
         values(?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssssb", $marque ,$email ,$mdp ,$typeproduit ,$produit ,$tel ,$descript ,$logo );
		$execval = $stmt->execute();
		echo $execval;
		header("location: login_marque.php"); 
		$stmt->close();
		$conn->close();
	}
?>