<?php
include '../includes/connectdb.php';

$success = false;

$username = $_POST['username'];
$password = $_POST['password'];

/**
 * Simplify the fetched information by storing the data then passing it.
 * 
 */
 
$adminquery = mysqli_query($connectdb, "SELECT * FROM tbadmins WHERE clAdUsername='$username';");
$userquery = mysqli_query($connectdb, "SELECT * FROM tbusers WHERE clUrUsername='$username';");
$user = mysqli_fetch_array($userquery);
$admin = mysqli_fetch_array($adminquery);
// Check if the Username is Admin
if(!empty($admin['clAdUsername'])){
    // verify the password
    if(password_verify($password,$admin['clAdPassword'])){
            if(session_status() == PHP_SESSION_ACTIVE){
                $_SESSION['admin_sid']=session_id();
                $_SESSION['ID'] = $admin['clAdID'];
                $_SESSION['Username'] = $admin['clArUsername'];
                session_start();

                header("location: ../admin/AdminDashboard.php");
            }
    }else{
        echo 'out';
    }
// Check if the Username is Either CM, MS, BC
}else if(!empty($user['clUrUsername'])){
    // verify the password
    if(password_verify($password,$user['clUrPassword'])){
        switch($user['clUrRole']){
        // Check if the role is approriate to the account 
            case "CM":
                $_SESSION['cm_sid']=session_id();
                $_SESSION['ID'] = $user['clUrID'];
                $_SESSION['Username'] = $user['clAUrUsername'];
                session_start();

                header("location: ../city/cityDashboard.php");
                break;
            case "MS":
                $_SESSION['ms_sid']=session_id();
                $_SESSION['ID'] = $user['clUrID'];
                $_SESSION['Username'] = $user['clAUrUsername'];
                session_start();

                header("location: ../city/cityRecords.php");
                break;
            case "BC":
                $_SESSION['bc_sid']=session_id();
                $_SESSION['ID'] = $user['clUrID'];
                $_SESSION['Username'] = $user['clAUrUsername'];
                session_start();

                header("location: ../city/cityBarangays.php");
                break;
            default:
                // If the Role returns NULL
                break;
        }
    }
}else{
    echo 'failed';
}


// $result = mysqli_query($connectdb, "SELECT * FROM tbadmins WHERE clAdUsername='$username' AND clAdPassword='$password';");
// while($row = mysqli_fetch_array($result)){
//         $success = true;
//         $clAdID = $row['clAdID'];
//         $clAdUsername = $row['clAdUsername'];
//     }
// if($success == true){
// 	$_SESSION['admin_sid']=session_id();
// 	$_SESSION['clUrID'] = $clUrID;
//     $_SESSION['clUrUsername'] = $clUrUsername;
//     session_start();

// 	header("location: ../admin/AdminDashboard.php");
// }else{

//         $result = mysqli_query($connectdb, "SELECT * FROM tbusers WHERE clUrUsername='$username' AND clUrPassword='$password' AND clUrLevel='1';");

//         while($row = mysqli_fetch_array($result))
//         {
//         $success = true;
//         $clUrID = $row['clUrID'];
//         $clUrLevel= $row['clUrLevel'];
//         }
//         if($success == true)
//         {
//             $_SESSION['cm_sid']=session_id();
//             $_SESSION['clUrID'] = $clUrID;
//             $_SESSION['clUrLevel'] = $clUrLevel;	
//             session_start();	
//             header("location: ../webclient/cityDashboard.php");
//         }
//         else
//         {  echo "<script>
// 			alert('Invalid username or password. ');  
//             ".$hashedPassword."
// 			window.location = '../index.php';
// 			</script>"; 
//         }
// }
?>
