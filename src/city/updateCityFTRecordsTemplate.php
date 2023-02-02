<?php
include '../includes/connectdb.php';

if(isset($_GET["clFtID"]) && !empty($_GET["clFtID"])){
    $clFtID = $_GET['clFtID'];

    $query = "SELECT clFTPercent,clFTYear FROM tbfoodthreshold WHERE clFtID ='$clFtID';";
    $data = mysqli_query($connectdb,$query);
    $row = $data->fetch_assoc();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
        <form method="POST" action="../crud/tbfoodthresholdAddRecord.php">
            <!--Not sure if barangay id or barangay -->
            <?php
            echo'<br>';
            echo'<label for="clFTPercent">Food Threshold Percentage</label>';
            echo'<input type="text" name="clFTPercent" placeholder="'.$row['clFTPercent'].'">';
            
            
            echo' <br>';
            echo'<label for="clFtYear">Year</label>';
            echo'<input type="text" name="clFtYear" placeholder="'.$row['clFTYear'].'">';

            
            echo'<button type="submit" name="AddRecord" formaction="../crud/tbfoodthresholdUpdateRecord.php?clFtID='.$clFtID.'"> Update Record </button>';
            echo'<button type="reset"> Clear </button>';
            ?>
        </form>
        <a href="cityFTRecords.php">
            <p>Cancel</p>
        </a>
    </body>
</body>
</html>