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
    <link rel="stylesheet" href="../../public/output.css">
    <script defer src="../javascript/activePage.js"></script>
    <title>Update Barangay</title>
</head>
<body class="bg-[#FFF0B9] font-Poppins">
    <div class="relative">
    <?php include '../includes/header.php' ?>
    </div>
 

    <div class="flex">
        <?php include '../includes/adminSidebar.php'; ?>
        
        <div class="h-full ml-72 px-12 py-6 w-full grid justify-center">
            <h1 class="mt-4 text-2xl font-semibold tracking-wider text-orange-200 text-center">Add Barangay</h1>
    
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
                <label for="clBrName">Barangay Name</label><br>
                <input type="text" value="<?php echo $row['clBrName']; ?>" name="clBrName"
                    class="rounded-md p-2 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800">
                
                <!-- WHY I DIDNT START AT 0
                - 1. ENUM in mysql starts at 1, so when indexing in enum
                -   we can use these values to select, insert, update functions in mysql
                --->
                <br>
                <label for="clUrID">Barangay Captain</label><br>
                <select value="" name="clUrID"
                    class="rounded-md p-2 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800">
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
                <button type="submit" name="updateBrgyBtn" formaction="../crud/tbbarangayUpdateBarangay.php"
                    class="mt-4 uppercase border-gray-600 px-6 py-2 p-1 w-52 rounded-xl bg-white text-gray-800 hover:text-white shadow-sm hover:bg-slate-700 hover:shadow-lg mb-5 cursor-pointer"> 
                    Update Barangay 
                </button>
                
                <button type="reset"
                class="uppercase border-gray-600 px-6 py-2 p-1 w-48 rounded-xl bg-red-500 text-white shadow-sm hover:bg-red-900 hover:shadow-lg mb-5 cursor-pointer"> Clear </button>
            </form>

            <!--
                <p>Already have an account?</p>
            -->
                <a href="adminBarangays.php">
                <p>Cancel</p>

            </a>
        </div>
    </div>

    <script src="../javascript/modal.js"></script>
    <script src="../javascript/headerDropDown.js"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>