<nav class="fixed h-screen w-72 bg-white px-2 py-8">
    <!--sidebar-->
    <div id="userDisp" class="flex gap-4 items-center ml-6 mb-8 px-4">
        <iconify-icon inline icon="fa-solid:user" style="color: #ffc46b;" width="40"></iconify-icon>
        <!--in other user interfaces, this should be modifiable-->
        <h2 id="user-info" class="text-2xl text-orange-200 font-semibold">Dos</h2>
    </div>

    <hr class="border border-gray-200 m-4">

    <ul class="mx-6">
        
        <li class="menu hover:bg-orange-200 px-6 py-2 rounded-xl mt-5 mb-2 text-orange-200 hover:text-white">
            <a href="barangayDashboard.php" class="flex items-center gap-4">
                <span class="iconify-inline" data-icon="bxs:dashboard" style="color: #ffc46b;" data-width="30"></span>
                <span class="">
                    Dashboard
                </span>
            </a>
        </li>
        
        <li class="menu hover:bg-orange-200 px-6 py-2 rounded-xl mb-2 text-orange-200 hover:text-white">
            <a class="flex items-center gap-6">
                <span class="iconify-inline" data-icon="fa-solid:user" style="color: #ffc46b;" data-width="25"></span>
                <span class="">
                    Information
                </span>
            </a>
        </li>
        
        <li class="menu flex items-center hover:bg-orange-200 rounded-xl text-orange-200 hover:text-white">
            <a href="barangayRecords.php" class="flex items-center gap-5 pl-2 py-2 ">
                    <span class="iconify-inline ml-2 flex-none" data-icon="bxs:folder" style="color: #ffc46b;" data-width="28"></span>
                    <span class="text-sm">
                        City Poverty and Malnutrition Records 
                    </span>
            </a>
            <button id="arrowBtn">
                <iconify-icon icon="ep:arrow-down" style="color: #ffc46b;" width="20"></iconify-icon>
            </button>
        </li>
        <ul id="sub-menu" class="text-sm hidden items-center gap-3 ml-14 mt-2 ">
            <div class="h-36 w-[1px] bg-gray-200"></div>
            <div>
                <li class="py-2 pl-2 pr-5 text-orange-200 hover:bg-orange-200 hover:text-white rounded-lg">
                    <a href="barangayCMRecords.php">
                            Child Malnutrition
                    </a>
                </li>
                <li class="py-2 pl-2 pr-5 text-orange-200 hover:bg-orange-200 hover:text-white rounded-lg">
                    <a href="barangayFTRecords.php">
                        Food Threshold
                    </a>
                </li>
                
                <li class="py-2 pl-2 pr-5 text-orange-200 hover:bg-orange-200 hover:text-white rounded-lg">
                    <a href="barangayITRecords.php">    
                        Income Threshold
                    </a>
                </li>
                <li class="py-2 pl-2 pr-5 text-orange-200 hover:bg-orange-200 hover:text-white rounded-lg">
                    <a href="barangayUNRecords.php">
                        Unemployment
                    </a>
                </li>
            </div>
        </ul>
    </ul>
    <hr class="border border-gray-200 my-5 mx-4">
    <ul class="mx-6">
        <a href="../includes/logout.php">
            <li class="menu flex items-center gap-4 hover:bg-orange-200 px-6 py-2 rounded-xl mb-2 text-orange-200 hover:text-white">
                <span class="iconify-inline" data-icon="cil:account-logout" style="color: #ffc46b;" data-width="25"></span>
                <span class="">
                    Logout
                </span>
            </li>
        </a>
    </ul>
    <!--end of sidebar-->
</nav>
