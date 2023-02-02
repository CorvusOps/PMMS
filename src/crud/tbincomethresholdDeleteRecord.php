<?php
include '../includes/connectdb.php';

if(isset($_GET["tbItID"]) && !empty($_GET["tbItID"])){
    $tbItID = $_GET['tbItID'];
    #idk but trigger modal to 

    $deletequery = "DELETE FROM tbincomethreshold WHERE tbItID ='$tbItID';";

    
    if(mysqli_query($connectdb, $deletequery)){
        echo "<script> 
        alert('Record successfully deleted!'); 
        window.location = '../city/cityITRecords.php'; 
        </script>";  
    
    } else{
        echo "<script>
        alert('Failed to delete.');  
        window.location = '../city/cityITRecords.php';
        </script>";  
    }

}else{
    echo "<script>
    alert('Failed to delete.');  
    window.location = '../city/cityITRecords.php';
    </script>";  
}

?>