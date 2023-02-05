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
    <title>Income Threshold</title>
</head>
<body class="bg-[#FFF0B9] font-Poppins">
<?php include '../includes/barangaySidebar.php' ?>

    <div class="h-full ml-72 px-12 py-6 w-[450px]">

        <form action="#" method="post" class="bg-[#f4f4f4] px-16 py-2">
            <h1 class="text-2xl text-center font-semibold text-orange-200 mb-5">Update</h1>

            <label for="clItYear" class="ml-4 text-gray-600">Year</label>
            <div class="relative flex items-center">
                <input class="rounded-md p-2 pl-6 mb-8 border border-solid border-gray-300 w-full focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800" type="text" name="clItYear" placeholder="Update Year" required>
            </div>

            <label for="clItPercent" class="ml-4 text-gray-600">Percent</label>
            <div class="relative flex items-center">
                <input class="rounded-md p-2 pl-6 mb-8 border border-solid border-gray-300 w-full focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800" type="text" name="clItPercent" placeholder="Update Percent" required>
            </div>

        <input type="submit" value="save" name="updateITRecordBtn" class="uppercase mx-28 border-gray-600 px-6 p-1 w-32 rounded-xl bg-orange-300 text-white shadow-sm hover:bg-yellow-800 hover:shadow-lg mb-5 cursor-pointer">
        </form>
    </div>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>
</html>