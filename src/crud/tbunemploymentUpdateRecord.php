<?php
include '../includes/connectdb.php';

if(isset($_GET["clUnID"]) && !empty($_GET["clUnID"])){
    $clUnID = $_GET['clUnID'];
    $clUnYear = $_POST['clUnYear'];
    $clUnPercent = $_POST['clUnPercent'];
    $updatequery = "UPDATE tbunemployment SET clUnPercent = '$clUnPercent', clUnYear = '$clUnYear' WHERE clUnID ='$clUnID';";

    if(mysqli_query($connectdb, $updatequery)){
        echo "<script> 
        alert('Record successfully updated!'); 
        window.location = '../city/cityUNRecords.php'; 
        </script>";  
    
    } else{
        echo "<script>
        alert('Failed to update.');  
        window.location = '../city/cityUNRecords.php';
        </script>";  
    }

}

?>