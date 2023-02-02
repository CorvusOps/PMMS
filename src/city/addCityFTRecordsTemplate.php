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
            <br>
            <label for="clFTPercent">Food Threshold Percentage</label>
            <input type="text" name="clFTPercent" placeholder="Food Threshold Percentage">
            
            <br>
            <label for="clFtYear">Year</label>
            <input type="text" name="clFtYear" placeholder="Year ">

            
            <button type="submit" name="AddRecord" formaction="../crud/tbfoodthresholdAddRecord.php"> Add Record </button>
            <button type="reset"> Clear </button>
        </form>
        <a href="../adminAccounts.php">
            <p>Cancel</p>
        </a>
    </body>
</body>
</html>