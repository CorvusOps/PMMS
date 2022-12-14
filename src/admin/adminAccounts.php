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
    <div class="flex">
        <!--full page div-->

    <?php include '../includes/adminSidebar.php'; ?>

       <div class="h-full ml-72 px-12 py-6 w-full">
            <!--content/right side div-->
            <h1 class="mt-4 text-2xl font-semibold tracking-wider text-orange-200">Accounts</h1>
            <div class="w-full flex justify-end">
                <!--Temporarily Changed into anchor so I can test the adding of user-->
                <button id="addBtn" onclick="openModal('.add-modal')" class="flex items-center gap-3 bg-orange-300 rounded-xl py-2 px-4 text-white"> 
                    <span class="iconify" data-icon="akar-icons:plus" data-width="25"></span>
                    Add User
                </button>
            </div>
            
            <div class="w-full mt-4">
                <!--table for users-->
                <table class="table-auto bg-white w-full text-[#623C04] text-left text-sm">
                    <thead>
                        <tr class="shadow-sm shadow-gray-500">
                            <th class="py-2 px-5 text-left font-extralight">id</th>
                            <th class="py-2 px-5 text-left font-extralight">username</th>
                            <th class="py-2 px-5 text-left font-extralight">Name</th>
                            <th class="py-2 px-5 text-left font-extralight">Contact Number</th>
                            <th class="py-2 px-5 text-left font-extralight">Email Address</th>
                            <th class="py-2 px-5 text-left font-extralight">Role</th>
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
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5 flex gap-2 items-center justify-center">
                                <!--edit and delete icons-->
                                <a href="#" onclick="openModal('.update-modal')">
                                    <span id="editIcon" class="iconify" data-icon="bxs:edit" style="color: #77c9e3;" data-width="25"></span>
                                </a>
                                <a href="#"> 
                                    <span id="deleteIcon" class="iconify" data-icon="ant-design:delete-filled" style="color: #d76c6c;" data-width="25"></span>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5 flex gap-2 items-center justify-center">
                                <!--edit and delete icons-->
                                <a href="#" onclick="openModal('.update-modal')">
                                    <span id="editIcon" class="iconify" data-icon="bxs:edit" style="color: #77c9e3;" data-width="25"></span>
                                </a>
                                <a href="#"> 
                                    <span id="deleteIcon" class="iconify" data-icon="ant-design:delete-filled" style="color: #d76c6c;" data-width="25"></span>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5 flex gap-2 items-center justify-center">
                                <!--edit and delete icons-->
                                <a href="#" onclick="openModal('.update-modal')">
                                    <span id="editIcon" class="iconify" data-icon="bxs:edit" style="color: #77c9e3;" data-width="25"></span>
                                </a>
                                <a href="#"> 
                                    <span id="deleteIcon" class="iconify" data-icon="ant-design:delete-filled" style="color: #d76c6c;" data-width="25"></span>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5 flex gap-2 items-center justify-center">
                                <!--edit and delete icons-->
                                <a href="#" onclick="openModal('.update-modal')">
                                    <span id="editIcon" class="iconify" data-icon="bxs:edit" style="color: #77c9e3;" data-width="25"></span>
                                </a>
                                <a href="#"> 
                                    <span id="deleteIcon" class="iconify" data-icon="ant-design:delete-filled" style="color: #d76c6c;" data-width="25"></span>
                                </a>
                            </td>
                        </tr>
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5"></td>
                            <td class="py-2 px-5 flex gap-2 items-center justify-center">
                                <!--edit and delete icons-->
                                <a href="#" onclick="openModal('.update-modal')">
                                    <span id="editIcon" class="iconify" data-icon="bxs:edit" style="color: #77c9e3;" data-width="25"></span>
                                </a>
                                <a href="#"> 
                                    <span id="deleteIcon" class="iconify" data-icon="ant-design:delete-filled" style="color: #d76c6c;" data-width="25"></span>
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

    <!--add account modal-->
    <?php include '../modals/addAccountModal.php' ?>

    <!--update user modal-->
    <?php include '../modals/updateAccountModal.php' ?>

    <script src="../javascript/modal.js"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>