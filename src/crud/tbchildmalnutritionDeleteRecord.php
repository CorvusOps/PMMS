<?php
include '../includes/connectdb.php';

if(isset($_GET["clCmID"]) && !empty($_GET["clCmID"])){
    $clCmID = $_GET['clCmID'];

    $deletequery = "DELETE FROM tbchildmalnutrition WHERE clCmID ='$clCmID';";
    
    if(mysqli_query($connectdb, $deletequery)){
        echo "<script> 
        alert('Record successfully deleted!'); 
        window.location = '../barangay/barangayCMRecords.php'; 
        </script>";  
    
    } else{
        echo "<script>
        alert('Failed to delete.');  
        window.location = '../barangay/barangayCMRecords.php';
        </script>";  
    }
}

?>