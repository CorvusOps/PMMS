<?php
include '../includes/connectdb.php';

if(isset($_GET["clFtID"]) && !empty($_GET["clFtID"])){
    $clFtID = $_GET['clFtID'];
    $clFtYear = $_POST['clFtYear'];
    $clFTPercent = $_POST['clFTPercent'];
    $updatequery = "UPDATE tbfoodthreshold SET clFtPercent = '$clFTPercent', clFtYear = '$clFtYear' WHERE clFtID ='$clFtID';";

    
    if(mysqli_query($connectdb, $updatequery)){
        echo "<script> 
        alert('Record successfully updated!'); 
        window.location = '../city/cityFTRecords.php'; 
        </script>";  
    
    } else{
        echo "<script>
        alert('Failed to update.');  
        window.location = '../city/cityFTRecords.php';
        </script>";  
    }

}

?>