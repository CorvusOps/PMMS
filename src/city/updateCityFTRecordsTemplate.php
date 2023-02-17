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
    <link rel="stylesheet" href="../../public/output.css">
    <script defer src="../javascript/activePage.js"></script>
    <title>Food Threshold</title>
</head>
<body class="bg-[#FFF0B9] font-Poppins">
    <div class="flex">
        <?php include '../includes/citySidebar.php'; ?>
        
        <div class="h-full ml-72 px-12 py-6 w-full grid justify-center">
            <h1 class="mt-4 text-2xl font-semibold tracking-wider text-orange-200 text-center">Add Barangay</h1>
            <form method="POST">
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
        </div>
    </div>
</body>
</html>