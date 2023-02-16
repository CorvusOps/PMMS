<?php
include '../includes/connectdb.php';

if(isset($_GET["tbItID"]) && !empty($_GET["tbItID"])){
    $tbItID = $_GET['tbItID'];
    $clITYear = $_POST['clITYear'];
    $tbItPercent = $_POST['tbItPercent'];
    $updatequery = "UPDATE tbincomethreshold SET tbItPercent = '$tbItPercent', clITYear = '$clITYear' WHERE tbItID ='$tbItID';";
    
    if(mysqli_query($connectdb, $updatequery)){
        echo "<script> 
        alert('Record successfully updated!'); 
        window.location = '../city/cityITRecords.php'; 
        </script>";  
    
    } else{
        echo "<script>
        alert('Failed to update.');  
        window.location = '../city/cityITRecords.php';
        </script>";  
    }

}

?>