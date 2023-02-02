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
    <?php
      $ID = $_GET['clUrID'];
  
      $userQuery = mysqli_query($connectdb, "SELECT * FROM tbusers WHERE clUrID ='$ID'");
      while($row = mysqli_fetch_array($userQuery)){
        $clUrID = $row['clUrID'];
        $clUrUsername = $row['clUrUsername'];
        $clUrPassword = $row['clUrPassword'];
        $clUrName = $row['clUrName'];
        $clUrContactNum = $row['clUrContactNum'];
        $clUrEmail = $row['clUrEmail'];
        $clUrLevel = $row['clUrLevel'];         
        }
    ?>

        <form method="post">
            <input type="hidden" name="clUrID" value="<?php $clUrID ?>">
            <br>
            <label for="clUrUsername">Username</label>
            <input type="text" value="<?php echo $clUrUsername; ?>" name="clUrUsername" placeholder=" Username ">
            
            <br>
            <label for="clUrPassword">Password</label>
            <input type="password" value="" name="clUrPassword" placeholder=" Re-type your Password ">
            
            <br>
            <label for="clUrName">Name</label>
            <input type="text" value="<?php echo $clUrName; ?>" name="clUrName" placeholder=" Name ">
            
            <br>
            <label for="clUrContactNum">Contact Number</label>
            <input type="text" value="<?php echo $clUrContactNum; ?>" name="clUrContactNum" placeholder=" Contact Number ">
            
            <label for="clUrEmail">Email</label>
            <input type="text" value="<?php echo $clUrEmail; ?>" name="clUrEmail" placeholder=" Email ">
            
            <!-- WHY I DIDNT START AT 0
               - 1. ENUM in mysql starts at 1, so when indexing in enum
               -   we can use these values to select, insert, update functions in mysql
            --->
            <br>
            <label for="clUrLevel">User Level</label>
            <select value="" name="clUrLevel">
                <option value="1">CM - City Mayor</option>
                <option value="2">MS - Municipal Staff</option>
                <option value="3" selected>BC - Barangay Captian</option>
            </select>

            <br>
            <button type="submit" name="updateUserBtn" formaction="../crud/tbusersEditAccount.php"> Update Account </button>
            <button type="reset"> Clear </button>
        </form>

        <p> <?php echo  $clUrUsername ." ". 
              $clUrPassword ." ". 
              $clUrName ." ". 
              $clUrContactNum." ". 
              $clUrEmail." ". 
              $clUrLevel." ". 
              $clUrID; ?></p>
        <!--
            <p>Already have an account?</p>
        -->
            <a href="adminAccounts.php">
            <p>Cancel</p>

        </a>
    </body>
</body>
</html>