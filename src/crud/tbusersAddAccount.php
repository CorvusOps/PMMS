<?php
include '../includes/connectdb.php';

// declare retrieved variables
$clUrUsername = trim($_POST['clUrUsername']);
$clUrPassword = trim($_POST['clUrPassword']);
$clUrName = $_POST['clUrName'];
$clUrContactNum = $_POST['clUrContactNum'];
$clUremail = $_POST['clUremail'];
$clUrLevel = $_POST['clUrLevel'];

/**FUNCTIONS
 * IF USERNAME IS VALID - close the statement ;;; same as edit
 * IF PASSWORD IS VALID - close the statement ;;; same as edit
 * IF USERNAME IS UNAVAILABLE - close the statement ;;; same as edit, if an account has the same name arealdy
 * IF THE CONDITIONS ARE MET 
 */
if(isset($_POST['addUserBtn'])){
  if(isset($clUrUsername)&& isset($clUrPassword)){
     $clUserquery = "SELECT * FROM tbusers WHERE clUrUsername = '$clUrUsername'";
     $results = mysqli_query($connectdb,$clUserquery);
     //checks if there records with the same username
     if(mysqli_num_rows($results)>0){
      echo "<script>
            alert('Username already exists');  
            window.location = '../admin/adminAccounts.php';
            </script>"; 
     }else{
        if(strlen($clUrPassword)<6){
          echo "<script>
          alert('Password must be 6 characters or more');  
          window.location = '../admin/adminAccounts.php';
          </script>"; 
        }else{
    
          $hashedPassword = password_hash($clUrPassword, PASSWORD_DEFAULT);
          $usersquery = "INSERT INTO tbusers ( clUrUsername, clUrPassword, clUrName, 
                                          clUrContactNum, clUremail, clUrLevel, clUrRole)
                          VALUES ('$clUrUsername','$hashedPassword','$clUrName', 
                                  '$clUrContactNum','$clUremail','$clUrLevel','$clUrLevel');";
          //catch mysqli exception
          if($result = mysqli_query($connectdb, $usersquery)){
            //mysqli_free_result($result);
            echo "<script> 
            alert('Account is successfully added!'); 
            window.location = '../admin/adminAccounts.php'; 
            </script>";  
          } else{
              mysqli_close($connectdb);
            echo "<script>
            alert('Failed to add.');  
            window.location = '../admin/adminAccounts.php';
            </script>"; 
            
          }
        }
     }
}
}
//has the password for extra security

mysqli_close($connectdb);
 ?>
