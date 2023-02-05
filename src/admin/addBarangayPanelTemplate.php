<?php
include '../includes/connectdb.php';

// if the session id that is registered is not session id, then 
// temporarily, return to index or maybe have an error 404
if(!isset($_SESSION["admin_sid"]) || $_SESSION["admin_sid"] !== session_id()){
    header("location: ../../index.php");
    exit;
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
        <form action="../crud/tbbarangayUpdateBarangay.php" method="post">
            <br>
            <label for="clBrName">Barangay</label>
            <input type="text" name="clBrName" placeholder=" Barangay ">
            
            <br>
            <label for="clUrID">Barangay Captain</label>
            <select value="" name="clUrID">
                <?php 
                    // optional but we can put if the barangay captians account is still active or resigned alredy
                    $CaptainAccountQuery = "SELECT clUrID, clUrName FROM tbusers 
                                            WHERE clUrStatus = 1 AND clUrRole = 'BC';";
                    $result = mysqli_query($connectdb,$CaptainAccountQuery);
                
                    while($row = $result->fetch_assoc()){
                        echo "<option value=$row[clUrID]>$row[clUrName]</option>";
                    }
                ?>  
            </select>

            <br>
            <button type="submit" name="addBrgyBtn" formaction="../crud/tbbarangayUpdateBarangay.php"> Add Barangay </button>
            <button type="reset"> Clear </button>
        </form>
        <!--
            <p>Already have an account?</p>
        -->
            <a href="adminBarangays.php">
            <p>Cancel</p>

        </a>
    </body>
</body>
</html>