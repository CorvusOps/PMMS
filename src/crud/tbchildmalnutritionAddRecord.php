<?php 
include '../includes/connectdb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $clCmMalType = $_POST["clCmMalType"];
    $clCmPercent = $_POST["clCmPercent"];
    $clCmYear = $_POST["clCmYear"];
    $clBrID =   $_SESSION['BarangayID'];
    $CMQuery = "SELECT * FROM tbchildmalnutrition WHERE clCmPercent = $clCmPercent AND clCmYear = $clCmYear;";
    $CMresults = mysqli_query($connectdb, $CMQuery);

    if(mysqli_num_rows($CMresults)>0) {
        echo "<script>
        alert('Error: Record already exists');  
        window.location = '../barangay/addbarangayCMRecords.php';
        </script>"; 
    }else {
        $FTquery = "INSERT INTO tbchildmalnutrition(clCmMalType,clCmPercent,clCmYear,clBrID)
        VALUES ('$clCmMalType','$clCmPercent','$clCmYear','$clBrID');";
        $result = mysqli_query($connectdb, $FTquery);
        //catch mysqli exception
        if($result) {
        //mysqli_free_result($result);
            echo "<script> 
            alert('Record is successfully added!'); 
            window.location = '../barangay/barangayCMRecords.php'; 
            </script>";  
        } else {
            mysqli_close($connectdb);
            echo "<script>
            alert('Failed to add.');  
            window.location = '../barangay/addbarangayCMRecordsTemplate.php';
            </script>"; 

        }
    }
}
else {
    echo "<script>
    alert('Failed to add.'); 
    window.location = '../barangay/addbarangayCMRecordsTemplate.php';
    </script>"; 
}
?>