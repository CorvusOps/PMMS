<?php 
include '../includes/connectdb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $clFtPercent = $_POST["clFtPercent"];
    $clFtYear = $_POST["clFtYear"];
    $clBrID =   $_SESSION['BarangayID'];
    $FTQuery = "SELECT * FROM tbfoodthreshold WHERE clFtPercent = $clFtPercent AND clFtYear = $clFtYear;";
    $FTresults = mysqli_query($connectdb, $FTQuery);

    if(mysqli_num_rows($FTresults)>0) {
        echo "<script>
        alert('Error: Record already exists');  
        window.location = '../city/addCityFTRecordsTemplate.php';
        </script>"; 
    }else {
        $FTquery = "INSERT INTO tbfoodthreshold(clFtPercent,clFtYear,clBrID)
        VALUES ('$clFtPercent','$clFtYear','$clBrID');";
        $result = mysqli_query($connectdb, $FTquery);
        //catch mysqli exception
        if($result) {
        //mysqli_free_result($result);
            echo "<script> 
            alert('Record is successfully added!'); 
            window.location = '../barangay/barangayFTRecords.php'; 
            </script>";  
        } else {
            mysqli_close($connectdb);
            echo "<script>
            alert('Failed to add.');  
            window.location = '../barangay/addbarangayFTRecordsTemplate.php';
            </script>"; 

        }
    }
}
else {
    echo "<script>
    alert('Failed to add.'); 
    window.location = '../barangay/addbarangayFTRecordsTemplate.php';
    </script>"; 
}
?>