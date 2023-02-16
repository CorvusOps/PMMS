<?php
include '../includes/connectdb.php';

if(isset($_GET["clFtID"]) && !empty($_GET["clFtID"])){
    $clFtID = $_GET['clFtID'];

    $deletequery = "DELETE FROM tbfoodthreshold WHERE clFtID ='$clFtID';";
    
    if(mysqli_query($connectdb, $deletequery)){
        echo "<script> 
        alert('Record successfully deleted!'); 
        window.location = '../barangay/barangayFTRecords.php'; 
        </script>";  
    
    } else{
        echo "<script>
        alert('Failed to delete.');  
        window.location = '../barangay/barangayFTRecords.php';
        </script>";  
    }
}

?>