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
    <title>Barangay Dashboard</title>
</head>
<body class="bg-[#FFF0B9] font-Poppins">
    <div class="flex">
        <!--full page div-->
        
        <?php include '../includes/barangaySidebar.php' ?>
        
        <div class="h-full ml-72 px-12 py-6 w-full">
            <!--content/right side div-->
            <h1 id="barangayName" class="mt-4 text-2xl font-semibold tracking-wider text-orange-200">
                 <!--must change depending on the name of the city in the database-->
                Barangay <?php echo $_SESSION['Barangay'] ?>
            </h1>
            <div class="w-full flex gap-10 mt-5">
                <!--information-->
                <div class="w-full flex items-center gap-4 bg-white py-8 px-4 rounded-xl shadow-md">
                    <!--total deprivation container-->
                    <div class="ml-4">
                        <div class="bg-blue-400 py-2 px-2 rounded-md">
                            <span class="iconify-inline" data-icon="ci:bar-chart" style="color: #ffff;" data-width="40"></span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 text-[#FFBE5B] pr-32 font-semibold tracking-wider">
                        Total Deprivation
                        <span class="text-orange-300 text-2xl">
                            Year 
                            <!--must change depending on the system year-->
                            <span id="yearNow">2022</span>
                        </span>
                    </div>

                    <div class="flex justify-end items-center w-1/2">
                        <span class="text-4xl font-bold text-black">
                            <span id="barangayTotalDep">
                                <!--must change depending on the totalDep of City-->
                                22.56
                            </span>
                             %
                        </span>
                    </div>
                </div>
                <!--end of information container-->
            </div>
            <!--end of right side content-->
        </div>
        <!--end of full page div-->
    </div>
    <script src="../javascript/submenu.js"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>
</html>