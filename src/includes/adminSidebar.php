<div class="fixed h-screen w-72 bg-white px-2 py-8">
    <!--sidebar div-->
    <div id="userDisp" class="flex gap-4 items-center ml-6 mb-8 px-4">
        <iconify-icon inline icon="fa-solid:user" style="color: #ffc46b;" width="40"></iconify-icon>
        <!--in other user interfaces, this should be modifiable-->
        <h2 id="user-info" class="text-2xl text-orange-200 font-semibold">Admin</h2>
    </div>

    <hr class="border border-gray-200 m-4">
    
    <ul class="mx-6">
        <li class="hover:bg-orange-200 px-6 py-2 rounded-xl mt-8 mb-4 text-orange-200 hover:text-white">
            <a href="adminDashboard.php" class="flex items-center gap-4">
                <span class="iconify-inline" data-icon="bxs:dashboard" style="color: #ffc46b;" data-width="30"></span>
                <span class="">
                    Dashboard
                </span>
            </a>
        </li>
        <li class="hover:bg-orange-200 px-6 py-2 rounded-xl mb-4 text-orange-200 hover:text-white">
            <a href="adminAccounts.php" class="flex items-center gap-6">
                <span class="iconify-inline" data-icon="fa-solid:user" style="color: #ffc46b;" data-width="25"></span>
                <span class="">
                    Accounts
                </span>
            </a>
        </li>

        <li class="hover:bg-orange-200 px-4 py-2 rounded-xl mb-4 text-orange-200 hover:text-white">
            <a href="adminBarangays.php" class="flex items-center gap-4">
                <span class="iconify-inline" data-icon="ci:location" style="color: #ffc46b;" data-width="35"></span>
                <span class="">
                    Barangays
                </span>
            </a>
        </li>
    </ul>
    <hr class="border border-gray-200 my-8 mx-4">
    <ul class="mx-6">
        <a href="#">
            <li class="flex items-center gap-4 hover:bg-orange-200 px-6 py-2 rounded-xl mb-4 text-orange-200 hover:text-white">
                <span class="iconify-inline" data-icon="cil:account-logout" style="color: #ffc46b;" data-width="25"></span>
                <span class="">
                    Logout
                </span>
            </li>
        </a>
    </ul>
    <!--end of sidebar-->
</div>