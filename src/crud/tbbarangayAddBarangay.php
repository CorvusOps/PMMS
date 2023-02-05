<?php
include '../includes/connectdb.php';

var_dump($_POST);
var_dump($_REQUEST);

/**ERROR HANDLING
* PUT THE ERROR HANDLING STUFF HERE
* IF BARANGAY NAME AND CAPTAIN IS ALREADY SET
*/

if(isset($_POST['addBrgyBtn'])){
  // declare retrieved variables
  $clBrName = $_POST['clBrName'];
  $clUrID = $_POST['clUrID'];

  //Check if the barangay name and barangay captain is already set.
  if(isset($clBrName) && isset($clUrID)){
    $clUserQuery = "SELECT clBrName, clUrID FROM tbbarangay 
                    WHERE clUrID = $clUrID OR clBrName = '$clBrName'";
    $results = mysqli_query($connectdb, $clUserQuery);
    //checks if there records with the same username
    if(mysqli_num_rows($results)>0){
        echo "<script> 
            alert('Barangay / Barangay Captain has already exist.');  
            window.location = '../admin/adminBarangays.php';
            </script>"; 
    }else{
      $barangayquery = "INSERT INTO tbbarangay ( clBrName, clUrID)
                      VALUES ('$clBrName','$clUrID');";
          
          //catch mysqli exception
          if($result = mysqli_query($connectdb, $barangayquery)){
            //mysqli_free_result($result);
            echo "<script> 
            alert('Barangay Captain is successfully assigned!'); 
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