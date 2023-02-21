<?php
include '../includes/connectdb.php';

if(isset($_GET["clCmID"]) && !empty($_GET["clCmID"])){
    $clCmID = $_GET['clCmID'];
    $clCmMalType = $_POST['clCmMalType'];
    $clRID = $_POST['clRID'];
    $clCmPercent = $_POST['clCmPercent'];
    $updatequery = "UPDATE tbchildmalnutrition SET clCmPercent = '$clCmPercent', clRID = '$clRID' WHERE clCmID ='$clCmID';";

    if(mysqli_query($connectdb, $updatequery)){
        echo "<script> 
        alert('Record successfully updated!'); 
        window.location = '../city/cityFTRecords.php'; 
        </script>";  
    
    } else {
        echo "<script>
        alert('Failed to update.');  
        window.location = '../city/cityFTRecords.php';
        </script>";  
    }
}

?>