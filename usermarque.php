<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
</head>
<body>
    <style>
      input {
	appearance: none;
	border-radius: 0;
}
    small{
		display: block;
		font-size: .75em;
		font-weight: 400;
		margin-top: .25em;
	}
    .card-form {
	padding: 2rem 1rem 0;
}
.input {
	display: flex;
	flex-direction: column-reverse;
	position: relative;
	padding-top: 1.5rem;
	&+.input {
		margin-top: 1.5rem;
	}
}
.input-field {
	border: 1;
	z-index: 1;
	background-color: transparent;
	border-bottom: 2px solid #eee; 
    border-radius: 25px;
	font: inherit;
	font-size: 1.125rem;
	padding: .25rem 0;
	&:focus, &:valid {
		outline: 0;
		border-bottom-color: #6658d3;
		&+.input-label {
			color: #6658d3;
			transform: translateY(-1.5rem);
		}
	}
}

.input-label {
	color: white;
	top: 2rem;
	transition: .25s ease;
    background-color: black;
    border: 1;
    border-radius: 25px;
    text-align: center;
}
.action {
	margin-top: 2rem;
}
*, *:after, *:before {
	box-sizing: border-box;
}

body {
	font-family: "DM Sans", sans-serif;
	line-height: 1.5;
	background-color: #f1f3fb;
	padding: 0 2rem;
}


.Sub{
    border-radius: 15px;
    background-color: #ffff;
    text-align: center;
}

    </style>


    <div class="container">
        <div class="card">
            <div class="card-image">
            <h2 align="center" style="text-decoration:underline; background: #f9004d; border-radius:25px;">
                Update User Information
                <small>modify your information</small>
            </h2>
            </div>
        <div class="row">
            <div class="col-md-6 offset-3">
                <?php
                if(isset($_GET['success'])){
                    if($_GET['success'] == 'userUpdated'){
                        ?>
                        <small class="alert alert-success"> User updated Successfully</small>
                        <hr>
                        <?php
                    }
                }


                if(isset($_GET['error'])){

                    if($_GET['error'] == 'emptyNameAndEmail'){
                        ?>
                        <small class="alert alert-danger"> Name and email is required</small>
                        <hr>
                        <?php
                    }else if($_GET['error'] == 'invalidFileType'){
                        ?>
                        <small class="alert alert-danger"> Invalid file type, Only Images allowed.</small>
                        <hr>
                        <?php
                    }else if($_GET['error'] == 'invalidFileSize'){
                        ?>
                        <small class="alert alert-danger"> Maximum 5mb Image size allowed.</small>
                        <hr>
                        <?php
                    }
                }
                ?>
                <form action="userupdatemarque.php"
                      method="POST"
                      enctype="multipart/form-data"
                      class="card-form"
                >
                    <?php
                        $inf_id =  $_SESSION['inf_if'];
                       
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "publirs";
                       
                        // Create connection
                        $connection = mysqli_connect($servername, $username, $password, $dbname);
                        $sql = "SELECT * FROM marque WHERE id = $inf_id ";
                        $gotResuslts = mysqli_query($connection,$sql);
                      
                        if($gotResuslts){
                            if(mysqli_num_rows($gotResuslts)>0){
                                while($row = mysqli_fetch_array($gotResuslts)){
                                    //print_r($row['user_name']);
                                    ?>
                                        <div class="input">
                                           <input type="text" name="updateUserName" class="input-field" value="<?php echo $row['marque']; ?>">
                                           <label class="input-label">New Name</label>
                                        </div>
                                       
                                        <div class="input">
                                            <input type="email" name="userEmail" class="input-field" value="<?php echo $row['email']; ?>">
                                            <label class="input-label">Email</label>
                                        </div>
                                        <div class="action">
                                            <input type="submit" name="update"  class="Sub" value="Update">
                                        </div>
                                    <?php
                                }
                            }
                        }


                    ?>
                
                </form>
            </div>
            
        </div>


    </div>
    
</body>
</html>