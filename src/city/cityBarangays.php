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
    <title>City Barangays</title>
</head>
<body class="bg-[#FFF0B9] font-Poppins">
    <?php include '../includes/header.php' ?>
    
    <div class="flex">
        <!--full page div-->
        
        <?php include '../includes/citySidebar.php' ?>
        
        <div class="h-full ml-72 px-12 py-6 w-full">
            <!--content/right side div-->
            <h1 class="mt-4 text-2xl font-semibold tracking-wider text-orange-200">Barangays</h1>
            <div class="w-full flex justify-end">
                <a href="addBarangayPanelTemplate.php" class="flex items-center gap-3 bg-orange-300 rounded-xl py-2 px-4 text-white"> 
                    <span class="iconify" data-icon="akar-icons:plus" data-width="25"></span>
                    Add Barangay
                </a>
            </div>
            
            <div class="w-full mt-4">
                <!--table for users-->
                <table class="table-auto bg-white w-full text-[#623C04] text-left text-sm">
                    <thead>
                        <!--for the sake of showing, this is a temporary format-->
                        <!--the padding should be adjusted in actual code-->
                        <tr class="border-b-2 border-gray-500">
                            <th class="py-2 pl-12 pr-5 text-center font-extralight">id</th>
                            <th class="py-2 pl-12 pr-5 text-center font-extralight">Barangay Name</th>
                            <th class="py-2 px-5 text-center font-extralight">Barangay Captain</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $barangayListData = "SELECT br.clBrName, br.clBrID, br.clUrID, ur.clUrName
                                            FROM pmms.tbbarangay AS br LEFT JOIN pmms.tbusers AS ur 
                                            ON br.clUrID = ur.clUrID";
                        if(!$connectdb -> query($barangayListData)){
                            array_push($errors, "Errorcode:". $connectdb->errno);    
                        }
                        $result = $connectdb -> query($barangayListData);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()) {
                                echo'<tr class="border-b-2 border-orange-300">';
                                    echo'<td class="bg-white text-center top-0 py-5 p-2">'.$row["clBrID"].'</td>';
                                    echo'<td class="bg-white text-center top-0 py-5 p-2">'.$row["clBrName"].'</td>';
                                    echo'<td class="bg-white text-center top-0 py-5 p-2">'.$row["clUrID"].' - '.$row["clUrName"].'</td>';

                            }
                        }   
                            echo '</tr>';  
                            $result->free_result();
                        ?>       
                    </tbody>
                </table>
                <!--end of table-->
            </div>
            <!--end of right side content-->
        </div>
        <!--end of full page div-->
    </div>

    <!--add barangay modal-->
    <?php include '../modals/addBarangayModal.php' ?>

    <script src="../javascript/modal.js"></script>
    <script src="../javascript/headerDropDown.js"></script>
    <script src="../javascript/submenu.js"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>
</html>