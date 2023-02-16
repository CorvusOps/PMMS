<?php
include '../includes/connectdb.php';

$username = $_SESSION["Username"];

// if the session id that is registered is not session id, then 
// temporarily, return to index or maybe have an error 404
if(!isset($_SESSION["cm_sid"]) && !isset($_SESSION["ms_sid"])){	
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
    <title>City Records</title>
</head>
<body class="bg-[#FFF0B9] font-Poppins">
    <?php include '../includes/header.php' ?> 
    <div class="flex">
        <!--full page div-->
        
        <?php include '../includes/citySidebar.php' ?>
        
        <div class="h-full ml-72 px-12 py-6 w-full">
            <!--content/right side div-->
            <h1 class="mt-4 text-2xl font-semibold tracking-wider text-orange-200">Poverty and Malnutrition Records</h1>
            <form action="" method="GET" id="search-bar" class="w-full flex justify-end">
                <input type="text" name="query" placeholder="Search Record" value="" class="text-sm focus:outline-none focus:ring-1 focus:ring-orange-300 px-2" required>
                <button class="flex items-center gap-2 bg-orange-300 py-[5px] px-4 text-white"> 
                    <span class="iconify" data-icon="akar-icons:search" data-width="20"></span>
                    Search
                </button>
            </form>
            
            <div class="w-full mt-4">
                <!--table for users-->
                <table class="table-auto bg-white w-full text-[#623C04] text-left text-sm">
                    <thead>
                        <!--for the sake of showing, this is a temporary format-->
                        <!--the padding should be adjusted in actual code-->
                        <tr class="shadow-sm shadow-gray-500">
                            <th class="py-2 px-8 text-left font-extralight">id</th>
                            <th class="py-2 px-5 text-left font-extralight">Year</th>
                            <th class="py-2 pl-5 text-center font-extralight">Barangay</th>
                            <th class="py-2 px-5 text-center font-extralight">Total Deprivation</th>
                            <th class="py-2 px-5 text-center font-extralight">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--when backend is integrated there should be multiple table data thru php-->
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-2 px-5 text-center">
                                <button>
                                    View Details
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-2 px-5 text-center">
                                <button>
                                    View Details
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-2 px-5 text-center">
                                <button>
                                    View Details
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-2 px-5 text-center">
                                <button>
                                    View Details
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-2 px-5 text-center">
                                <button>
                                    View Details
                                </button>
                            </td>
                        </tr>                        
                    </tbody>
                </table>
                <!--end of table-->
            </div>
            <!--end of right side content-->
        </div>
        <!--end of full page div-->
    </div>

    <script src="../javascript/headerDropDown.js"></script>
    <script src="../javascript/submenu.js"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>
</html>