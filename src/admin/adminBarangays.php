<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/output.css">
    <script defer src="../javascript/activePage.js"></script>
    <title>Admin Barangays</title>
</head>
<body class="bg-[#FFF0B9] font-Poppins">
    <div class="flex">
        <!--full page div-->
        
        <?php include '../includes/adminSidebar.php' ?>
        
        <div class="h-full ml-72 px-12 py-6 w-full">
            <!--content/right side div-->
            <h1 class="mt-4 text-2xl font-semibold tracking-wider text-orange-200">Barangays</h1>
            <div class="w-full flex justify-end">
                <button onclick="openModal('.add-modal')" class="flex items-center gap-3 bg-orange-300 rounded-xl py-2 px-4 text-white"> 
                    <span class="iconify" data-icon="akar-icons:plus" data-width="25"></span>
                    Add Barangay
                </button>
            </div>
            
            <div class="w-full mt-4">
                <!--table for users-->
                <table class="table-auto bg-white w-full text-[#623C04] text-left text-sm">
                    <thead>
                        <!--for the sake of showing, this is a temporary format-->
                        <!--the padding should be adjusted in actual code-->
                        <tr class="shadow-sm shadow-gray-500">
                            <th class="py-2 pl-20 pr-5 text-left font-extralight">id</th>
                            <th class="py-2 pl-20 pr-5 text-left font-extralight">Barangay Name</th>
                            <th class="py-2 px-5 text-left font-extralight">Barangay Captain</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!--when backend is integrated there should be multiple table data thru php-->
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                        </tr>
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                        </tr>
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                        </tr>
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                        </tr>
                        <tr class="border-b-2 border-orange-300">
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                            <td class="py-5 px-5"></td>
                        </tr>                        
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
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>
</html>