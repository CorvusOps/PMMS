<form action="" method="GET" id="search-bar" class="w-full flex justify-end">
    <input type="text" name="search" placeholder="Search Record" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" 
            class="text-sm focus:outline-none focus:ring-1 focus:ring-orange-300 px-2" required>
    <button class="flex items-center gap-2 bg-orange-300 py-[5px] px-4 text-white"> 
        <span class="iconify" data-icon="akar-icons:search" data-width="20"></span>
        Search
    </button>
</form>
