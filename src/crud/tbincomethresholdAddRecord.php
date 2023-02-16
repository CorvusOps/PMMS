<?php 
include '../includes/connectdb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tbItPercent = $_POST["tbItPercent"];
    $clITYear = $_POST["clITYear"];
    $clBrID =   $_SESSION['ID'];
    $ITQuery = "SELECT * FROM tbincomethreshold WHERE tbItPercent = $tbItPercent AND clITYear = $clITYear;";
    $ITresults = mysqli_query($connectdb, $ITQuery);

    if(mysqli_num_rows($ITresults)>0){
        echo "<script>
        alert('Error: Record already exists');  
        window.location = '../city/addCityITRecordsTemplate.php';
        </script>"; 
    } else{
        $ITquery = "INSERT INTO tbincomethreshold(tbItPercent,clITYear,clBrID)
        VALUES ('$tbItPercent','$clITYear','$clBrID');";
        $result = mysqli_query($connectdb, $ITquery);
        //catch mysqli exception
        if($result){
            //mysqli_free_result($result);
            echo "<script> 
            alert('Record is successfully added!'); 
            window.location = '../city/cityITRecords.php'; 
            </script>";  
        }else{
            mysqli_close($connectdb);
            echo "<script>
            alert('Failed to add.');  
            window.location = '../city/addCityITRecordsTemplate.php';
            </script>"; 
        }
    }
}
else{
    echo "<script>
    alert('Failed to add.'); 
    window.location = '../city/addCityITRecordsTemplate.php';
    </script>"; 
}



?>