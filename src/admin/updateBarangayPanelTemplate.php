<?php
include '../includes/connectdb.php';

$clBrID = $_GET['clBrID'];

if( ! is_numeric($clBrID) ){
    echo "<script>
          alert('Invalid ID');  
          window.location = '../admin/adminAccounts.php';
          </script>"; 
}

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
    <?php
      $barangayQuery = mysqli_query($connectdb, "SELECT br.clBrName, br.clBrID, br.clUrID, ur.clUrName
                                                FROM pmms.tbbarangay AS br LEFT JOIN pmms.tbusers AS ur 
                                                ON br.clUrID = ur.clUrID WHERE clBrID ='$clBrID'");
      $row = $barangayQuery->fetch_assoc();

    //   while($row = mysqli_fetch_array($userQuery)){
    //     $clUrID =  $row['clUrID'];   
    //     $clUrUsername = $row['clUrUsername'];
    //     $clUrPassword = $row['clUrPassword'];
    //     $clUrName = $row['clUrName'];
    //     $clUrContactNum = $row['clUrContactNum'];
    //     $clUrEmail = $row['clUrEmail'];
    //     $clUrLevel = $row['clUrLevel'];
    //     }
    ?>

        <form action="../crud/tbbarangayUpdateBarangay.php"  method="post">

            <br>
            <label for="clBrName">Barangay Name</label>
            <input type="text" value="<?php echo $row['clBrName']; ?>" name="clBrName">
            
            <!-- WHY I DIDNT START AT 0
               - 1. ENUM in mysql starts at 1, so when indexing in enum
               -   we can use these values to select, insert, update functions in mysql
            --->
            <br>
            <label for="clUrID">Barangay Captain</label>
            <select value="" name="clUrID">
                <?php 
                    // optional but we can put if the barangay captians account is still active or resigned alredy
                    // or already assigned in a barangay
                    $CaptainAccountQuery = "SELECT clUrID, clUrName FROM tbusers 
                                            WHERE clUrStatus = 1 AND clUrRole = 'BC';";
                    $result = mysqli_query($connectdb,$CaptainAccountQuery);
                    echo "<option value=$row[clUrID] selected>$row[clUrName]</option>";
                    while($rowresult = $result->fetch_assoc()){
                        echo "<option value=$rowresult[clUrID]>$rowresult[clUrName]</option>";
                    }
                ?>  
            </select>

            <input type="hidden" name="clBrID" value=" <?php echo $row['clBrID'] ;?> "  id="clBrID"/>

            <br>
            <button type="submit" name="updateBrgyBtn" formaction="../crud/tbbarangayUpdateBarangay.php"> Update Barangay </button>
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