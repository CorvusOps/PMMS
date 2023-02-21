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
            
            <?php include '../includes/searchbar.php' ?>        
                
                <div class="w-full flex justify-end text-sm mt-4">
                    <a href="cityRecords.php">
                        Clear Search
                    </a>
                </div>  
            
            <div class="w-full mt-4">
                <!--table for users-->
                <table class="table-auto bg-white w-full text-[#623C04] text-left text-sm">
                    <thead>
                        <tr class="shadow-sm shadow-gray-500">
                            <th class="py-2 px-8 text-center font-extralight">id</th>
                            <th class="py-2 px-5 text-center font-extralight">Year</th>
                            <th class="py-2 pl-5 text-center font-extralight">Barangay</th>
                            <th class="py-2 px-5 text-center font-extralight">Total Deprivation</th>
                            <th class="py-2 px-5 text-center font-extralight">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php 
                        $totalDepListData = mysqli_query($connectdb,"SELECT td.clTdID, td.clTdPercent, td.clTdYear, td.clBrID, br.clBrID, br.clBrName
                                            FROM pmms.tbtotaldeprivation AS td LEFT JOIN pmms.tbbarangay AS br
                                            ON td.clBrID = br.clBrID");
                        
                        if(isset($_GET['search'])){ //checks if the input text is not null
                                $filtervalues = $_GET['search'];
                                $totalDepListData = mysqli_query($connectdb,"SELECT td.clTdID, td.clTdPercent, td.clTdYear, td.clBrID, br.clBrID, br.clBrName
                                FROM pmms.tbtotaldeprivation AS td LEFT JOIN pmms.tbbarangay AS br
                                ON td.clBrID = br.clBrID WHERE br.clBrName LIKE '%$filtervalues%' OR (td.clTdYear = '$filtervalues')");
                              }
                        // $result = $connectdb -> query($totalDepListData);
                        if($totalDepListData->num_rows > 0){
                            while($row = $totalDepListData->fetch_assoc()) {
                                echo' <tr class="border-b-2 border-orange-300">';
                                echo'      <td class="text-center py-5 px-5">'.$row["clTdID"].'</td>';
                                echo'      <td class="text-center py-5 px-5">'.$row["clTdYear"].'</td>';
                                echo'      <td class="text-center py-5 px-5">'.$row["clBrName"].'</td>';
                                echo'      <td class="text-center py-5 px-5">'.$row["clTdPercent"].'</td>';
                                echo'      <td class="py-2 px-5 text-center">
                                                <button>
                                                    View Details
                                                </button>
                                            </td>';
                                echo'  </tr>';
                            }
                        } else {
                            //If no  data found, return message that there's no record
                            echo' <tr class="border-b-2 border-orange-300 ">';
                            echo'      <td colspan="5" class="text-center py-5 px-5">No Record Found.</td>';
                            echo '</tr>';
                        }
                            $totalDepListData->free_result();
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