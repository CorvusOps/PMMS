<?php
include '../includes/connectdb.php';

/**FUNCTIONS
 * IF USERNAME IS VALID - close the statement ;;; 
 *                      must be more than 6 char, less than 18 char;;;same as edit
 * IF PASSWORD IS VALID - close the statement ;;; 
 *                      must be more than 6 characters ;;;same as edit
 * IF USERNAME IS UNAVAILABLE - close the statement ;;; 
 *                      same as edit, if an account has the same name arealdy
 * ELSE THE CONDITIONS ARE MET 
 */
if(isset($_POST['updateUserBtn'])){
  // declare retrieved variables
  $clUrID = mysqli_real_escape_string($connectdb,$_POST['clUrID']);
  $clUrUsername = mysqli_real_escape_string($connectdb,trim($_POST['clUrUsername']));
  $clUrPassword = mysqli_real_escape_string($connectdb,trim($_POST['clUrPassword']));
  $clUrName = mysqli_real_escape_string($connectdb,$_POST['clUrName']);
  $clUrContactNum = mysqli_real_escape_string($connectdb,$_POST['clUrContactNum']);
  $clUremail = mysqli_real_escape_string($connectdb,$_POST['clUrEmail']);
  $clUrLevel = mysqli_real_escape_string($connectdb,$_POST['clUrLevel']);

  //Check if the username and password is set
  if(isset($clUrUsername)&& isset($clUrPassword)){
    $clUserquery = "SELECT * FROM tbusers WHERE clUrUsername = '$clUrUsername'";
    $results = mysqli_query($connectdb, $clUserquery);
    //checks if there records with the same username
    if(strlen($clUrPassword)<6){
        echo "<script>
          alert('Password must be 6 characters or more');  
          window.location = '../admin/adminAccounts.php';
          </script>"; 
    }elseif(strlen($clUrUsername) < 6 || strlen($clUrUsername) > 16){
        echo "<script>
          alert('Username must be 6 characters or more');  
          window.location = '../admin/adminAccounts.php';
          </script>"; 
    }else{
      $hashedPassword = password_hash($clUrPassword, PASSWORD_DEFAULT);
      $usersquery = " UPDATE tbusers SET 
                    clUrUsername = '$clUrUsername',
                    clUrPassword = '$hashedPassword',
                    clUrName = '$clUrName',
                    clUrContactNum = '$clUrContactNum',
                    clUremail = '$clUremail', 
                    clUrLevel = '$clUrLevel', 
                    clUrRole = '$clUrLevel'
                    WHERE clUrID ='$clUrID' ; ";
          
          //catch mysqli exception
          if(mysqli_query($connectdb, $usersquery)){
            //mysqli_free_result($result);
            echo "<script> 
            alert('Account is successfully updated!'); 
            window.location = '../admin/adminAccounts.php'; 
            </script>";  
          }else{
            mysqli_close($connectdb);
            echo "<script>
            alert('Failed to add.');  
            window.location = '../admin/adminAccounts.php';
            </script>"; 
            
          }
    }
  }
}
//mysqli_close($connectdb);
 ?>