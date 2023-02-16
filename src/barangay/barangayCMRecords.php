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
    <div class="flex">
        <!--full page div-->

        <?php include '../includes/barangaySidebar.php' ?>
            
        <div class="h-full ml-72 px-12 py-6 w-full">
            <!--content/right side div-->
            <h1 class="mt-4 text-2xl font-semibold tracking-wider text-orange-200">Child Malnutrition Records</h1>
            <div class="w-full flex justify-end">
                <a href="addbarangayCMRecords.php" class="flex items-center gap-3 bg-orange-300 rounded-xl py-2 px-4 text-white"> 
                    <span class="iconify" data-icon="akar-icons:plus" data-width="25"></span>
                    Add Record
                </a>
            </div>
            
            <div class="w-full mt-4">
                <!--table for users-->
                <table class="table-auto bg-white w-full text-[#623C04] text-left text-sm">
                    <thead>
                        <tr class="shadow-sm shadow-gray-500">
                            <th class="py-2 px-8 text-left font-extralight">id</th>
                            <th class="py-2 px-5 text-left font-extralight">Year</th>
                            <th class="py-2 px-5 text-left font-extralight">Mal Type</th>
                            <th class="py-2 px-5 text-left font-extralight">Percent</th>
                            <th class="py-2 px-5 text-center font-extralight">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--when backend is integrated there should be multiple table data thru php-->
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5 flex gap-2 items-center justify-center">
                                <!--edit icon-->
                                <a href="updatebarangayCMRecords.php">
                                    <span id="editIcon" class="iconify" data-icon="bxs:edit" style="color: #77c9e3;" data-width="25"></span>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5 flex gap-2 items-center justify-center">
                                <!--edit icons-->
                                <a href="updatebarangayCMRecords.php">
                                    <span id="editIcon" class="iconify" data-icon="bxs:edit" style="color: #77c9e3;" data-width="25"></span>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5 flex gap-2 items-center justify-center">
                                <!--edit icons-->
                                <a href="updatebarangayCMRecords.php">
                                    <span id="editIcon" class="iconify" data-icon="bxs:edit" style="color: #77c9e3;" data-width="25"></span>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5 flex gap-2 items-center justify-center">
                                <!--edit icons-->
                                <a href="updatebarangayCMRecords.php">
                                    <span id="editIcon" class="iconify" data-icon="bxs:edit" style="color: #77c9e3;" data-width="25"></span>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5 flex gap-2 items-center justify-center">
                                <!--edit icons-->
                                <a href="updatebarangayCMRecords.php">
                                    <span id="editIcon" class="iconify" data-icon="bxs:edit" style="color: #77c9e3;" data-width="25"></span>
                                </a>
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

    <script src="../javascript/submenu.js"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>
</html>