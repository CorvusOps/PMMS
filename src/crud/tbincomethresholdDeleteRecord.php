<?php
include '../includes/connectdb.php';

if(isset($_GET["tbItID"]) && !empty($_GET["tbItID"])){
    $tbItID = $_GET['tbItID'];
    
    #query to delete
    $deletequery = "DELETE FROM tbincomethreshold WHERE tbItID ='$tbItID';";

    if(mysqli_query($connectdb, $deletequery)){
        echo "<script> 
        alert('Record successfully deleted!'); 
        window.location = '../barangay/barangayITRecords.php'; 
        </script>";  
    
    } else{
        echo "<script>
        alert('Failed to delete.');  
        window.location = '../barangay/barangayITRecords.php';
        </script>";  
    }

}else{
    echo "<script>
    alert('Failed to delete.');  
    window.location = '../barangay/barangayITRecords.php';
    </script>";  
}

?>