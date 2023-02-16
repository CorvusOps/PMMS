<?php 
include '../includes/connectdb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$clUnPercent = $_POST["clUnPercent"];
$clUnYear = $_POST["clUnYear"];
$clBrID =   $_SESSION['ID'];
$UNQuery = "SELECT * FROM tbunemployment WHERE clUnPercent = $clUnPercent AND clUnYear = $clUnYear;";
$UNresults = mysqli_query($connectdb, $UNQuery);

if(mysqli_num_rows($UNresults)>0){
    echo "<script>
    alert('Error: Record already exists');  
    window.location = '../city/addCityUNRecordsTemplate.php';
    </script>"; 
}else{
    $UNquery = "INSERT INTO tbunemployment(clUnPercent,clUnYear,clBrID)
    VALUES ('$clUnPercent','$clUnYear','$clBrID');";
    $result = mysqli_query($connectdb, $UNquery);
    
        //catch mysqli exception
        if($result){
            //mysqli_free_result($result);
            echo "<script> 
            alert('Record is successfully added!'); 
            window.location = '../city/cityUNRecords.php'; 
            </script>";  
            
        }else {
            mysqli_close($connectdb);
            echo "<script>
            alert('Failed to add.');  
            window.location = '../city/addCityUNRecordsTemplate.php';
            </script>"; 
        }
    }
}
else{
    echo "<script>
    alert('Failed to add.'); 
    window.location = '../city/addCityUNRecordsTemplate.php';
    </script>"; 
}

?>