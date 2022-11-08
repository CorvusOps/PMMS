<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/output.css">
    <script defer src="../javascript/activePage.js"></script>
    <title>PMMS Admin</title>
</head>
<body class="bg-[#FFF0B9] font-Poppins">
    <div class="flex">
        <!--full page div-->
        
        <?php include '../includes/adminSidebar.php' ?>
        
        <div class="h-full ml-72 px-12 py-6 w-full">
            <!--content/right side div-->
            <h1 class="mt-4 text-2xl font-semibold tracking-wider text-orange-200">System Dashboard</h1>
            <div class="w-full flex gap-10 mt-5">
                <!--information-->

                <div class="w-1/2 flex items-center gap-4 bg-white py-5 rounded-xl  shadow-md">
                    <!--count of account container-->
                    <div class="ml-4">
                        <div class="bg-blue-400 py-2 px-3 rounded-md">
                            <span class="iconify-inline" data-icon="fa-solid:user" style="color: #ffff;" data-width="25"></span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 text-orange-200 pr-32">
                        Accounts
                        <span id="userCount" class="text-2xl font-bold text-black">
                            <!--must change depending on the number of users in the database-->
                            50
                        </span>
                    </div>
                </div>

                <div class="w-1/2 flex items-center gap-4 bg-white py-5 rounded-xl shadow-md">
                    <!--count of barangay number container-->
                    <div class="ml-4">
                        <div class="bg-blue-600 py-2 px-3 rounded-md">
                            <span class="iconify-inline" data-icon="mdi:home-city-outline" style="color: rgb(255, 255, 255);" data-width="30"></span>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 text-orange-200 pr-32">
                        Barangays
                        <span id="brgyCount" class="text-2xl font-bold text-black">
                            <!--must change depending on the number of barangay in the database-->
                            8
                        </span>
                    </div>
                </div>
                <!--end of information container-->
            </div>
            <!--end of right side content-->
        </div>
        <!--end of full page div-->
    </div>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>
</html>