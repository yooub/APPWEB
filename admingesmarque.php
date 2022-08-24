<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <title>PAGE ADMIN</title>
        <link rel="stylesheet" href="CSS/s.css" type="text/css" >

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    
    </head>
    <style>
.customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

.customers td, .customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

.customers tr:nth-child(even){background-color: #f2f2f2;}

.customers tr:hover {background-color: #ddd;}

.customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #f9004d;
  color: white;
}
.hero ,#home{
 
    background : none;
    /* background : #333; */
}
nav{
    background-color:black;
}
body{
    padding : 10px;
}
</style>
<body>
    
<div class="hero" id="home">
        <nav>
            <img src="IMGS/logoweb.png" align="center" width="150px" height="150px">
            <h2  class="logo" >WIL<span>io</span></h2>
            <ul>
                <li><a href="admin.php">Afficher les deux tables</a></li>
                <li><a href="admingesinf.php">Gestion des influecuers</a></li>
                <li><a href="admingesmarque.php">Gestion des marques</a></li>
            </ul>
        </nav>


<div class="infl" id="mq">
            <table class="customers">
            <tr>
                <th>id</th>
                <th>Nom de la marque</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php
             $servername = "localhost";
             $username = "root";
             $password = "";
             $dbname = "publirs";
            
             // Create connection
             $connection = mysqli_connect($servername, $username, $password, $dbname);
             $sql = "SELECT * FROM marque";
             $gotResuslts = mysqli_query($connection,$sql);
             if($gotResuslts){
                if(mysqli_num_rows($gotResuslts)>0){
                    while($row = mysqli_fetch_array($gotResuslts)){
             ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["marque"] ?></td>
                <td><?= $row["email"] ?></td>
                <td>
                    <a href="Gestionmarque.php?idSup=<?= $row["id"]?>">Supprimer</a>
                </td>
            </tr>
            <?php }}}?>

            </table>
        </div>

</body>
</html>
