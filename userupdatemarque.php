<?php
session_start();
// Report all PHP errors
error_reporting(E_ALL);

if(isset($_POST['update'])){

    
         $userNewName  =    $_POST['updateUserName'];
         $userNewEmail =    $_POST['userEmail'];
        //  $userImage    =   $_FILES['userImage'];

        if(!empty($userNewName) && !empty($userNewEmail)){

            
            
            // $imageName = $userImage ['name'];
            // $fileType  = $userImage['type'];
            // $fileSize  = $userImage['size'];
            // $fileTmpName = $userImage['tmp_name'];
            // $fileError = $userImage['error'];

            // $fileImageData = explode('/',$fileType);
            // $fileExtension = $fileImageData[count($fileImageData)-1];

            
            // if($fileExtension == 'jpg' || $fileExtension == 'png' || $fileExtension == 'jpeg'){
            //     //Process Image
                
            //     if($fileSize < 5000000){
            //         //var_dump(basename($imageName));

            //         $fileNewName = "../public/userImages/".$imageName;
                    
            //         $uploaded = move_uploaded_file($fileTmpName,$fileNewName);
                    
                    // if($uploaded){
                        $loggedInUser = $_SESSION['inf_if'];
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "publirs";
                        echo  $userNewName. " nqme :".$userNewEmail. " userEmqil :".$loggedInUser. " id :";
                        // Create connection
                        $conn = mysqli_connect('localhost', 'root', '', 'publirs') or die('erreur de connexion à la base de données');
                        // var_dump ($conn);
                        if( $conn){
                            $sql1 = "UPDATE `marque` SET `marque`=' $userNewName',`email`='$userNewEmail' WHERE `id`='$loggedInUser'";
                            $results = mysqli_query($conn,$sql1);
                          header('Location: usermarque.php?success=userUpdated');
                        }else{
                            echo "connexion failde";
                        }
                        
                //     exit;
                //     }


                // }else{
                //     header('Location:../userinfluenceur.php?error=invalidFileSize');
                //     exit;
                // }
                // exit;
            }else{
                header('Location: usermarque.php?error=invalidFileType');
                exit;
            }
            


        }else{
            header('Location: usermarque.php?error=emptyNameAndEmail');
            exit;
        }
        





?>