<?php
include '../includes/connectdb.php';

if(isset($_GET["clUnID"]) && !empty($_GET["clUnID"])){
    $clUnID = $_GET['clUnID'];
    
    #query to delete record
    $deletequery = "DELETE FROM tbunemployment WHERE clUnID ='$clUnID';";

    if(mysqli_query($connectdb, $deletequery)){
        echo "<script> 
        alert('Record successfully deleted!'); 
        window.location = '../city/cityUNRecords.php'; 
        </script>";  
    
    } else{
        echo "<script>
        alert('Failed to delete.');  
        window.location = '../city/cityUNRecords.php';
        </script>";  
    }

}

?>