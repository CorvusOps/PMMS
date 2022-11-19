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
if(isset($_POST['addBarangayBtn'])){
  // declare retrieved variables
  $clBrName = $_POST['clBrName'];
  $clUrID = $_POST['clUrID'];

  //Check if the barangay name and barangay captain is already set.
  if(isset($clBrName) && isset($clUrID)){
    $clUserQuery = "SELECT b.clBrName, b.clUrID, u.clUrID FROM tbbarangay AS b 
                    INNER JOIN tbusers AS u 
                    WHERE b.clUrID = '$clUrID' && b.clUrID = u.clUrID ";
    $results = mysqli_query($connectdb, $clUserQuery);
    //checks if there records with the same username
    if(mysqli_num_rows($results)>0){
        echo "<script>
            alert('User has already assigned into a barangay');  
            window.location = '../admin/adminBarangays.php';
            </script>"; 
    }else{
      $barangayquery = "INSERT INTO tbbarangay ( clBrName, clUrID)
                      VALUES ('$clBrName','$clUrID');";
          
          //catch mysqli exception
          if($result = mysqli_query($connectdb, $barangayquery)){
            //mysqli_free_result($result);
            echo "<script> 
            alert('Barangay Captain is successfully added!'); 
            window.location = '../admin/adminBarangays.php'; 
            </script>";  
          }else{
            mysqli_close($connectdb);
            echo "<script>
            alert('Failed to add.');  
            window.location = '../admin/adminBarangays.php';
            </script>"; 
            
          }
    }
  }
}
mysqli_close($connectdb);
 ?>