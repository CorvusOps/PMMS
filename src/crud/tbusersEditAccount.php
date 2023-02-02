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
  // declare retrieved variables
  $clUrID = (int) $_POST['clUrID'];
  $clUrUsername = trim($_POST['clUrUsername']);
  $clUrPassword = trim($_POST['clUrPassword']);
  $clUrName = $_POST['clUrName'];
  $clUrContactNum = $_POST['clUrContactNum'];
  $clUrEmail = $_POST['clUrEmail'];
  $clUrLevel = $_POST['clUrLevel'];

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
      //$intID = intval($clUrID);
      $usersquery = " UPDATE tbusers SET 
      clUrUsername = '$clUrUsername', 
      clUrPassword = '$hashedPassword', 
      clUrName = '$clUrName', 
      clUrContactNum = '$clUrContactNum', 
      clUrEmail = '$clUrEmail', 
      clUrLevel = '$clUrLevel', 
      clUrRole = '$clUrLevel' WHERE clUrID = $clUrID";
          
              
          //catch mysqli exception
          if(mysqli_query($connectdb,$usersquery)){
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

//mysqli_close($connectdb);
?>