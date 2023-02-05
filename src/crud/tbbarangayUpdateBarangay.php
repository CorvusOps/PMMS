<?php
include '../includes/connectdb.php';

var_dump($_POST);
print("\n");
var_dump($_REQUEST);

/**ERROR HANDLING
* PUT THE ERROR HANDLING STUFF HERE
* IF BARANGAY NAME AND CAPTAIN IS ALREADY SET
*/

if(isset($_POST['updateBrgyBtn'])){
    // declare retrieved variables
    $clBrName = $_POST['clBrName'];
    $clUrID = $_POST['clUrID'];
    $clBrID = $_POST['clBrID'];

  //Check if the Barangay Name and Barangay Captain is set
  if(isset($clBrName) && isset($clUrID)){
    $clUserQuery = "SELECT clBrName, clUrID FROM tbbarangay 
                    WHERE clUrID = $clUrID OR clBrName = '$clBrName'";
    $results = mysqli_query($connectdb, $clUserQuery);
    //checks if there records with the same username
    if(mysqli_num_rows($results)>1){
        echo "<script> 
            alert('Barangay / Barangay Captain has already exist.');  
            window.location = '../admin/adminBarangays.php';
            </script>"; 
    }else{
        $barangayquery = " UPDATE tbbarangay SET 
        clBrName = '$clBrName', 
        clUrID = '$clUrID'
        WHERE clBrID = $clBrID; ";

        //catch mysqli exception
        if(mysqli_query($connectdb,$barangayquery)){
        //mysqli_free_result($result);
        echo "<script> 
        alert('Account is successfully updated!'); 
        window.location = '../admin/adminAccounts.php'; 
        </script>";  
        }else{
        mysqli_close($connectdb);
        echo "<script>
        alert('Failed to update.');  
        window.location = '../admin/adminAccounts.php';
        </script>"; 
    }
   } 
  }
}
//mysqli_close($connectdb);
?>