<?php
include '../includes/connectdb.php';

// if the session id that is registered is not session id, then 
// temporarily, return to index or maybe have an error 404
if(!isset($_SESSION["bc_sid"]) || $_SESSION["bc_sid"] != session_id()){
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
    <title>Child Malnutrition</title>
</head>
<body class="bg-[#FFF0B9] font-Poppins">
    <?php include '../includes/header.php' ?>
    <div class="flex">
        <?php include '../includes/barangaySidebar.php'; ?>
        
        <div class="h-full ml-72 px-12 py-6 w-full grid justify-center">
            <h1 class="mt-4 text-2xl font-semibold tracking-wider text-orange-200 text-center">Add Child Malnutrition</h1>
            <form action="#" method="post">
                
                <br>
                <label for="clCmYear" class="ml-4 text-gray-600">Year</label>
                <div class="relative flex items-center">
                    <input class="rounded-md p-2 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                        type="text" name="clCmYear" placeholder="Year" required>
                </div>

                <!--Fetch child malnutrition details in db and set as options-->
                <label for="clCmMalType" class="ml-4 text-gray-600">Malnutrition Type</label>
                <br>
                <select value="" name="clCmMalType" 
                class="rounded-md p-2 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800">
                    <option value="0" selected>Stunted</option>
                    <option value="1">Wasted</option>
                    <option value="2">Underweight</option>
                    <option value="3">Micronutrient</option>
                </select>

                <br>
                <label for="clCmPercent" class="ml-4 text-gray-600">Percent</label>
                <div class="relative flex items-center">
                    <input class="rounded-md p-2 pl-6 mb-8 border border-solid border-gray-300 w-full focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                        type="text" name="clCmPercent" placeholder="Child Malnutrition Percentage" required>
                </div>

                <button type="submit" name="AddRecord" formaction="../crud/tbchildmalnutritionAddRecord.php" 
                    class="mt-4 uppercase border-gray-600 px-6 py-2 p-1 w-48 rounded-xl bg-white text-gray-800 hover:text-white shadow-sm hover:bg-slate-700 hover:shadow-lg mb-5 cursor-pointer"> 
                    Add Record 
                </button>

                <button type="reset"
                    class="uppercase border-gray-600 px-6 py-2 p-1 w-48 rounded-xl bg-red-500 text-white shadow-sm hover:bg-red-900 hover:shadow-lg mb-5 cursor-pointer"> 
                    Clear 
                </button>
            </form>

            <br>
            <a href="barangayCMRecords.php">
                    <p>Cancel</p>
            </a>
        </div>
    </div>
    
    <script src="../javascript/submenu.js"></script>
    <script src="../javascript/headerDropDown.js"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>
</html>