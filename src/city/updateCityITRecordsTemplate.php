<?php
include '../includes/connectdb.php';

if(isset($_GET["tbItID"]) && !empty($_GET["tbItID"])){
    $tbItID = $_GET['tbItID'];

    $query = "SELECT tbItPercent,clITYear FROM tbincomethreshold WHERE tbItID ='$tbItID';";
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
        <form method="POST">

            <?php
            echo'<br>';
            echo'<label for="tbItPercent">Income Threshold Percentage</label>';
            echo'<input type="text" name="tbItPercent" placeholder="'.$row['tbItPercent'].'">';
            
            
            echo' <br>';
            echo'<label for="clITYear">Year</label>';
            echo'<input type="text" name="clITYear" placeholder="'.$row['clITYear'].'">';

            
            echo'<button type="submit" name="AddRecord" formaction="../crud/tbincomethresholdUpdateRecord.php?tbItID='.$tbItID.'"> Update Record </button>';
            echo'<button type="reset"> Clear </button>';
            ?>
        </form>
        <a href="cityITRecords.php">
            <p>Cancel</p>
        </a>
    </body>
</body>
</html>