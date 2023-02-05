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
            <br>
            <label for="tbItPercent">Income Threshold Percentage</label>
            <input type="text" name="tbItPercent" placeholder="Income Threshold Percentage">
            
            <br>
            <label for="clITYear">Year</label>
            <input type="text" name="clITYear" placeholder="Year">

            
            <button type="submit" name="AddRecord" formaction="../crud/tbincomethresholdAddRecord.php"> Add Record </button>
            <button type="reset"> Clear </button>
        </form>
        <a href="../cityITRecords">
            <p>Cancel</p>
        </a>
    </body>
</body>
</html>