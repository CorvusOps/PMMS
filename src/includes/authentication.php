<?php
/**
 * Study and Add: 
 * ERROR CATCHING STUFFS 
 *  SQL ERROR
 *  
 */ 
if (isset($_POST['login'])){
    // declare retrieved variables
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Declare variables that will contain the SQL Query and its data in array form
    $adminquery = mysqli_query($connectdb, "SELECT * FROM tbadmins WHERE clAdUsername='$username';");
    $userquery = mysqli_query($connectdb, "SELECT * FROM tbusers WHERE clUrUsername='$username';");
    $user = mysqli_fetch_array($userquery);
    $admin = mysqli_fetch_array($adminquery);

    // Check if the Username is Admin
    if(!empty($admin['clAdUsername'])){
        // verify the password
        if(password_verify($password, $admin['clAdPassword'])){
                if(session_status() == PHP_SESSION_ACTIVE){
                    // Register the data into the session
                    $_SESSION['admin_sid'] = session_id();
                    $_SESSION['ID'] = $admin['clAdID'];
                    $_SESSION['Username'] = $admin['clArUsername'];
                    session_start();

                    header("location: ../admin/AdminDashboard.php");
                }
        }else{
            array_push($errors, "Username or password is incorrect");
            //echo 'out';
        }
    // Check if the Username is Either CM, MS, BC
    }else if(!empty($user['clUrUsername'])){
        // verify the password
        if(password_verify($password, $user['clUrPassword'])){
            switch($user['clUrRole']){
            // Check if the role is approriate to the account 
                case "CM":
                    $_SESSION['cm_sid'] = session_id();
                    $_SESSION['ID'] = $user['clUrID'];
                    $_SESSION['Username'] = $user['clUrUsername'];
                    $_SESSION['Name'] = $user['clUrName'];
                    session_start();

                    header("location: ../city/cityDashboard.php");
                    break;
                case "MS":
                    $_SESSION['ms_sid'] = session_id();
                    $_SESSION['ID'] = $user['clUrID'];
                    $_SESSION['Username'] = $user['clUrUsername'];
                    $_SESSION['Name'] = $user['clUrName'];
                    session_start();

                    header("location: ../city/cityDashboard.php");
                    break;
                case "BC":
                    $brID = $user['clUrID'];
                    $barangayquery = mysqli_query($connectdb, " SELECT clBrID, clBrName FROM tbbarangay WHERE clUrID = '$brID'");
                    $barangay = mysqli_fetch_array($barangayquery);
                    $_SESSION['bc_sid'] = session_id();
                    $_SESSION['ID'] = $user['clUrID'];
                    $_SESSION['Username'] = $user['clUrUsername'];
                    $_SESSION['Name'] = $user['clUrName'];
                    $_SESSION['BarangayID'] = $barangay['clBrID'];
                    $_SESSION['Barangay'] = $barangay['clBrName'];
                    session_start();

                    header("location: ../barangay/barangayDashboard.php");
                    break;
                default:
                    // If the Role returns NULL
                    break;
            } //end switch
        }else{
            array_push($errors, "Username or password is incorrect");
            //echo 'out';
            //header("location: ../../index.php");
                // BETTER WRONG PASSWORD OUTPUT
        }
    }else{
        array_push($errors, "Account does not exist.");
        //echo 'failed';
    }
}
?>
