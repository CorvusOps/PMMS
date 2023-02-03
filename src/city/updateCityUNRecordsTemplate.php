<?php
include '../includes/connectdb.php';

if(isset($_GET["clUnID"]) && !empty($_GET["clUnID"])){
    $clUnID = $_GET['clUnID'];

    $query = "SELECT clUnPercent,clUnYear FROM tbunemployment WHERE clUnID ='$clUnID';";
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
            <!--Not sure if barangay id or barangay -->
            <?php
            echo'<br>';
            echo'<label for="clUnPercent">Unemployment Percentage</label>';
            echo'<input type="text" name="clUnPercent" placeholder="'.$row['clUnPercent'].'">';
            
            
            echo' <br>';
            echo'<label for="clUnYear">Year</label>';
            echo'<input type="text" name="clUnYear" placeholder="'.$row['clUnYear'].'">';

            
            echo'<button type="submit" name="AddRecord" formaction="../crud/tbunemploymentUpdateRecord.php?clUnID='.$clUnID.'"> Update Record </button>';
            echo'<button type="reset"> Clear </button>';
            ?>
        </form>
        <a href="cityUNRecords.php">
            <p>Cancel</p>
        </a>
    </body>
</body>
</html>