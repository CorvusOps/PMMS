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
    <title>City Income Threshold</title>
</head>
<body class="bg-[#FFF0B9] font-Poppins">
    <?php include '../includes/header.php' ?>
    <div class="flex">
        <!--full page div-->
        
        <?php include '../includes/citySidebar.php' ?>
        
        <div class="h-full ml-72 px-12 py-6 w-full">
            <!--content/right side div-->
            <h1 class="mt-4 text-2xl font-semibold tracking-wider text-orange-200">Income Threshold Records</h1>
            
            <?php include '../includes/searchbar.php' ?>

            <div class="w-full flex justify-end text-sm mt-4">
                <a href="cityITRecords.php">
                        Clear Search
                </a>
            </div>
            
            <div class="w-full mt-2">
                <!--table for records-->
                <table class="table-auto bg-white w-full text-[#623C04] text-left text-sm">
                   <?php 
                          $ITdata = mysqli_query($connectdb,"SELECT it.tbItID, it.clBrID, it.clITYear, it.tbItPercent, br.clBrID, br.clBrName
                          FROM tbincomethreshold as it LEFT JOIN tbbarangay as br ON it.clBrID = br.clBrID");
                    ?>
                    <thead>
                        <!--for the sake of showing, this is a temporary format-->
                        <!--the padding should be adjusted in actual code-->
                        <tr class="shadow-sm shadow-gray-500">
                            <th class="py-2 px-5 text-center font-extralight">id</th>
                            <th class="py-2 px-5 text-center font-extralight">Barangay</th>
                            <th class="py-2 pl-5 text-center font-extralight">Year</th>
                            <th class="py-2 px-5 text-center font-extralight">Percent</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--when backend is integrated there should be multiple table data thru php-->
                        <?php    
                        if(isset($_GET['search'])){ //checks if the input text is not null
                            $filtervalues = $_GET['search'];
                            $ITdata = mysqli_query($connectdb,"SELECT it.tbItID, it.clBrID, it.clITYear, it.tbItPercent, br.clBrID, br.clBrName
                            FROM tbincomethreshold as it LEFT JOIN tbbarangay as br ON it.clBrID = br.clBrID WHERE br.clBrName LIKE '%$filtervalues%' OR (it.clITYear = '$filtervalues')");
                          }

                        if($ITdata->num_rows > 0){
                            while($row = $ITdata->fetch_assoc()) {
                            echo' <tr class="border-b-2 border-orange-300">';
                            echo'      <td class="text-center py-5 px-5">'.$row["tbItID"].'</td>';
                            echo'      <td class="text-center py-5 px-5">'.$row["clBrName"].'</td>';
                            echo'      <td class="text-center py-5 px-5">'.$row["clITYear"].'</td>';
                            echo'      <td class="text-center py-5 px-5">'.$row["tbItPercent"].'%</td>';
                            echo'  </tr>';
                                }
                        } else {
                            //If no matching data found, return message that there's no record
                            echo' <tr class="border-b-2 border-orange-300 ">';
                            echo'      <td colspan="5" class="text-center py-5 px-5">No Record Found.</td>';
                            echo '</tr>';
                        }
                    ?>    
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