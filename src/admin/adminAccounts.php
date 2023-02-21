<?php
include '../includes/connectdb.php';

// if the session id that is registered is not session id, then 
// temporarily, return to index or maybe have an error 404
if(!isset($_SESSION["admin_sid"]) || $_SESSION["admin_sid"] !== session_id()){
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
    <title>Admin Accounts</title>
</head>
<body class="bg-[#FFF0B9] font-Poppins">

    <?php include '../includes/header.php' ?>

    <div class="flex">
        <!--full page div-->

    <?php include '../includes/adminSidebar.php'; ?>

       <div class="h-full ml-72 px-12 py-6 w-full">
            <!--content/right side div-->
            <h1 class="mt-4 text-2xl font-semibold tracking-wider text-orange-200">Accounts</h1>
            <?php include('../includes/errors.php'); ?>
            
            <!--Add Button-->
            <div class="w-full flex justify-end">
                <a href="addAccountPanelTemplate.php" class="flex items-center gap-3 bg-orange-300 rounded-xl py-2 px-4 text-white"> 
                    <span class="iconify" data-icon="akar-icons:plus" data-width="25"></span>
                    Add User
                </a>
            </div>
            
            <div class="w-full mt-4">
                <!--table for users-->
                <table class="table-auto bg-white w-full text-[#623C04] text-left text-sm">
                    <thead>
                        <tr class="border-b-2 border-gray-400">
                            <th class="py-2 px-5 text-left font-extralight">ID</th>
                            <th class="py-2 px-5 text-left font-extralight">Username</th>
                            <th class="py-2 px-5 text-left font-extralight">Name</th>
                            <th class="py-2 px-5 text-left font-extralight">Contact Number</th>
                            <th class="py-2 px-5 text-left font-extralight">Email Address</th>
                            <th class="py-2 px-5 text-left font-extralight">Role</th>                       
                            <th class="py-2 px-5 text-center font-extralight">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--when backend is integrated there should be multiple table data thru php-->
                        <?php 
                        $userListData = "SELECT * FROM tbusers ";
                        if(!$connectdb -> query($userListData)){
                            array_push($errors, "Errorcode:". $connectdb->errno);    
                        }
                        $result = $connectdb -> query($userListData);
                        if($result->num_rows > 0){
                            while($row = $result->fetch_assoc()) {
                                echo'<tr>';
                                    echo'<td class="bg-white text-center top-0 p-1">'.$row["clUrID"].'</td>';
                                    echo'<td class="bg-white text-center top-0 p-1">'.$row["clUrUsername"].'</td>';
                                    echo'<td class="bg-white text-center top-0 p-1">'.$row["clUrName"].'</td>';
                                    echo'<td class="bg-white text-center top-0 p-1">'.$row["clUrContactNum"].'</td>';
                                    echo'<td class="bg-white text-center top-0 p-1">'.$row["clUrEmail"].'</td>';
                                    echo'<td class="bg-white text-center top-0 p-1">'.$row["clUrRole"].'</td>';
                                    echo'<td class="bg-white grid justify-center top-0 p-2">';
                                    // Change location into the update page
                                    
                                        echo '  <div class="flex"> <a href="updateAccountPanelTemplate.php?clUrID='.$row["clUrID"].'">
                                                    <span id="editIcon" class="iconify" 
                                                        data-icon="bxs:edit" style="color: #77c9e3;" data-width="25"></span>
                                                </a>';
                                    // Change location into the delete page
                                        echo '  <a href="../crud/tbusersDeleteAccount.php?clUrID='.$row["clUrID"].'"> 
                                                    <span id="deleteIcon" class="iconify" 
                                                        data-icon="ant-design:delete-filled" style="color: #d76c6c;" data-width="25"></span>
                                                </a>
                                                </div>';
                                    echo'</td>';
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

    <!--add account modal-->
    <?php include '../modals/addAccountModal.php' ?>

    <!--update user modal-->
    <?php include '../modals/updateAccountModal.php' ?>

    <script src="../javascript/modal.js"></script>
    <script src="../javascript/headerDropDown.js"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>
