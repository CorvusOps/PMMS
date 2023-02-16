<?php
include '../includes/connectdb.php';

if(isset($_GET["clCmID"]) && !empty($_GET["clCmID"])){
    $clCmID = $_GET['clCmID'];

    $query = "SELECT clCmID, clCmMalType, clCmPercent, clCmYear FROM tbchildmalnutrition WHERE clCmID ='$clCmID';";
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
    <title>Child Malnutrition</title>
</head>
<body class="bg-[#FFF0B9] font-Poppins">
    <?php include '../includes/header.php' ?> 
    <div class="flex">
        <?php include '../includes/barangaySidebar.php'; ?>
        
        <div class="h-full ml-72 px-12 py-6 w-full grid justify-center">
            <h1 class="mt-4 text-2xl font-semibold tracking-wider text-orange-200 text-center">Update Child Malnutrition</h1>
            <form method="POST">
                <!--Not sure if barangay id or barangay -->
                <?php

                echo'<br>';
                echo'<label for="clCmMalType">Malnutrition Type</label> <br>';
                
                // WARN! To be updated to retrieve enum values and put to selection
                echo'<input type="text" name="clCmMalType" 
                class="rounded-md p-2 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                value="'.$row['clCmMalType'].'">';

                echo'<br>';
                echo'<label for="clCmPercent">Child Malnutrition Percentage</label> <br>';
                echo'<input type="text" name="clCmPercent" 
                        class="rounded-md p-2 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                        value="'.$row['clCmPercent'].'">';
                
                echo' <br>';
                echo'<label for="clCmYear">Year</label> <br>';
                echo'<input type="text" name="clCmYear" 
                        class="rounded-md p-2 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                        value="'.$row['clCmYear'].'">';

                echo'<br>
                    <button type="submit" name="AddRecord" 
                        class="mt-4 uppercase border-gray-600 px-6 py-2 p-1 w-52 rounded-xl bg-white text-gray-800 hover:text-white shadow-sm hover:bg-slate-700 hover:shadow-lg mb-5 cursor-pointer"
                        formaction="../crud/tbchildmalnutritionUpdateRecord.php?clCmID='.$clCmID.'"> Update Record </button>';
                echo'<button type="reset"
                        class="uppercase border-gray-600 px-6 py-2 p-1 w-48 rounded-xl bg-red-500 text-white shadow-sm hover:bg-red-900 hover:shadow-lg mb-5 cursor-pointer"> Clear </button>';
                ?>
            </form>
            <a href="barangayCmRecords.php">
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