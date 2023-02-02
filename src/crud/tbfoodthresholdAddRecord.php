<?php 
include '../includes/connectdb.php';
$clFtPercent = $_POST["clFtPercent"]
$clFtYear = $_POST["clFtYear"]
$clBrID = $_SESSION["ID"]

$FTQuery = "SELECT * FROM tbunemplyment WHERE clFtPercent = $clFtPercent AND clFtYear = $clFtYear";
$results = mysqli_query($connectdb, $FTQuery);

if(mysqli_num_rows($FTQuery)>0){
    echo "<script>
    alert('Error: Record already exists');  
    window.location = '../city/addCityFTRecordsTemplate.php';
    </script>"; 
}else{
    $barangayquery = "INSERT INTO tbfoodthreshold(clFtPercent,clFtYear,clBrID)
    VALUES ('$clFtPercent','$clFtYear','$clBrID');";

    //catch mysqli exception
    if($result = mysqli_query($connectdb, $barangayquery)){
    //mysqli_free_result($result);
    echo "<script> 
    alert('Barangay Captain is successfully added!'); 
    window.location = '../city/cityFTRecords.php'; 
    </script>";  
    }else{
    mysqli_close($connectdb);
    echo "<script>
    alert('Failed to add.');  
    window.location = '../city/addCityFTRecordsTemplate.php';
    </script>"; 

}

}





?>