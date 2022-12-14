<div class="add-modal hidden w-[450px] h-full top-0 text-md my-20 right-[23%]">

<form action="#" method="post" class="bg-[#f4f4f4] px-16 py-12 shadow-md shadow-gray-500">

    <button type="reset" onclick="closeModal('.add-modal')">
        <iconify-icon icon="carbon:close" width="25" id="close" class="absolute right-[20px] top-[10px] cursor-pointer"></iconify-icon>
    </button>

    <h1 class="text-2xl text-center font-semibold text-orange-200 mb-5">Add Barangay</h1>

    <label for="brgyName" class="ml-4 text-gray-600">Name</label>
    <div class="relative flex items-center">
        <input class="rounded-md p-2 pl-6 mb-8 border border-solid border-gray-300 w-full focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
            type="text" name="brgyName" placeholder="Barangay Name" required>
    </div>

    <!--Fetch user details in db and set as options-->
    <label for="brgyCaptain" class="ml-4 text-gray-600">Barangay Captain</label>
    <select value="" name="brgyCaptain" class="rounded-md p-2 pl-6 pr-4 mb-12 border border-solid border-gray-300 w-full focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800">
        <option value="0" selected>Select User</option>
        <option value="#">Juan Dela Cruz</option>
        <option value="#">Dos Siento</option>
        <option value="#">Eli Allah</option>
    </select>

    <input type="submit" value="add" name="addUserBtn"
            class="uppercase mx-28 border-gray-600 px-6 p-1 w-32 rounded-xl bg-orange-300 text-white shadow-sm hover:bg-yellow-800 hover:shadow-lg mb-5 cursor-pointer">
</form>
</div>