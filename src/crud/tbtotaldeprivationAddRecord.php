<?php 
include '../includes/connectdb.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    //inputs 
    $clTdYear = $_POST["clTdYear"];
    $clBrID = $_POST["clBrID"];

    $tdQuery = "SELECT * FROM tbtotaldeprivation WHERE clTdYear = $clTdYear AND clBrID = $clBrID;";
    $cmQuery = "SELECT * FROM tbchildmalnutrition WHERE clCmYear = $clTdYear AND clBrID = $clBrID;";
    $ftQuery = "SELECT * FROM tbfoodthreshold WHERE clFtYear = $clTdYear AND clBrID = $clBrID;";
    $itQuery = "SELECT * FROM tbincomethreshold WHERE clItYear = $clTdYear AND clBrID = $clBrID;";
    $unQuery = "SELECT * FROM tbunemployment WHERE clUnYear = $clTdYear AND clBrID = $clBrID;";
    $TDresults = mysqli_query($connectdb, $tdQuery);
    $CMresults = mysqli_query($connectdb, $cmQuery);
    $FTresults = mysqli_query($connectdb, $ftQuery);
    $ITresults = mysqli_query($connectdb, $itQuery);
    $UNresults = mysqli_query($connectdb, $unQuery);

    if(mysqli_num_rows($TDresults)>0) {
        echo "<script>
        alert('Error: Record already exists');  
        window.location = '../barangay/addbarangayCMRecords.php';
        </script>"; 
    }elseif(mysqli_num_rows($CMresults)!=1){
        echo "<script>
        alert('Error: Record NOT Found, please fill up the missing record.');  
        window.location = '../barangay/barangayCMRecords.php';
        </script>"; 
    }elseif(mysqli_num_rows($FTresults)!=1){
        echo "<script>
        alert('Error: Record NOT Found, please fill up the missing record.');  
        window.location = '../barangay/barangayFTRecords.php';
        </script>"; 
    }elseif(mysqli_num_rows($ITresults)!=1){
        echo "<script>
        alert('Error: Record NOT Found, please fill up the missing record.');  
        window.location = '../barangay/barangayITRecords.php';
        </script>"; 
    }elseif(mysqli_num_rows($UNresults)!=1){
        echo "<script>
        alert('Error: Record NOT Found, please fill up the missing record.');  
        window.location = '../barangay/barangayUNRecords.php';
        </script>"; 
    }else {

        //computation here
        $CMrow = $CMresults->fetch_assoc();
        $FTrow = $FTresults->fetch_assoc();
        $ITrow = $ITresults->fetch_assoc();
        $UNrow = $UNresults->fetch_assoc();

        var_dump($CMrow);
        echo" <br>";
        var_dump($FTrow);
        echo" <br>";
        var_dump($ITrow);
        echo" <br>";
        var_dump($UNrow);
        echo" <br>";

        $clTdPercent = ($CMrow["clCmPercent"] + $FTrow["clFtPercent"] + $ITrow["tbItPercent"] + $UNrow["clUnPercent"] )/ 4 ;
        //print($DeprivationSum);
        
        $clCmID = $CMrow["clCmID"];
        $clFtID = $FTrow["clFtID"];
        $clItID = $ITrow["tbItID"];
        $clUnID = $UNrow["clUnID"];

        $TDValues = "INSERT INTO tbtotaldeprivation (clTdPercent,clTdYear,clBrID,clCmID,clFtID,clItID,clUnID)
                VALUES ('$clTdPercent','$clTdYear','$clBrID','$clCmID','$clFtID','$clItID','$clUnID');";
        $result = mysqli_query($connectdb, $TDValues);
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