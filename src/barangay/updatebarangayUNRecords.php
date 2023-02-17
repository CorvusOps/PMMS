<?php
include '../includes/connectdb.php';

// if the session id that is registered is not session id, then 
// temporarily, return to index or maybe have an error 404
if(!isset($_SESSION["bc_sid"]) || $_SESSION["bc_sid"] != session_id()){
    header("location: ../../index.php");
    exit;
}

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
    <link rel="stylesheet" href="../../public/output.css">
    <script defer src="../javascript/activePage.js"></script>
    <title>Income Threshold</title>
</head>
<body class="bg-[#FFF0B9] font-Poppins">
    <?php include '../includes/header.php' ?> 
    <div class="flex">
        <?php include '../includes/barangaySidebar.php'; ?>
        
        <div class="h-full ml-72 px-12 py-6 w-full grid justify-center">
            <h1 class="mt-4 text-2xl font-semibold tracking-wider text-orange-200 text-center">Update Income Threshold</h1>
            
            <form method="POST">
                <!--Not sure if barangay id or barangay -->
                <?php
                echo'<br>';
                echo'<label for="clUnPercent">Unemployment Percentage</label><br>';
                echo'<input type="text" name="clUnPercent" 
                        class="rounded-md p-2 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                        value="'.$row['clUnPercent'].'">';
                
                echo' <br>';
                echo'<label for="clUnYear">Year</label><br>';
                echo'<input type="text" name="clUnYear" 
                        class="rounded-md p-2 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                        value="'.$row['clUnYear'].'">';

                echo'<br><button type="submit" name="UpdateRecord" 
                        class="mt-4 uppercase border-gray-600 px-6 py-2 p-1 w-52 rounded-xl bg-white text-gray-800 hover:text-white shadow-sm hover:bg-slate-700 hover:shadow-lg mb-5 cursor-pointer"
                        formaction="../crud/tbunemploymentUpdateRecord.php?clUnID='.$clUnID.'"> 
                        Update Record 
                     </button>';

                echo'<button type="reset"
                        class="uppercase border-gray-600 px-6 py-2 p-1 w-48 rounded-xl bg-red-500 text-white shadow-sm hover:bg-red-900 hover:shadow-lg mb-5 cursor-pointer">
                        Clear 
                     </button>';
                ?>
            </form>
            <a href="barangayUNRecords.php">
                <p>Cancel</p>
            </a>
        </div>
    </div>

    <script src="../javascript/submenu.js"></script>
    <script src="../javascript/headerDropDown.js"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>