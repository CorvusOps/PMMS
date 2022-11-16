<div class="add-modal hidden w-[500px] h-full top-0 text-md my-4 right-[20%]">

        <form action="#" method="post" class="bg-[#f4f4f4] px-16 py-2 shadow-md shadow-gray-500">

            <button type="reset" onclick="closeModal('.add-modal')">
                <iconify-icon icon="carbon:close" width="25" id="close" class="absolute right-[20px] top-[10px] cursor-pointer"></iconify-icon>
            </button>

            <h1 class="text-2xl text-center font-semibold text-orange-200 mb-3">Add User</h1>

            <label for="username" class="ml-4 text-gray-600">Username</label>
            <div class="relative flex items-center">
                <input class="rounded-md p-2 pl-8 mb-3 border border-solid border-gray-300 w-full focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                    type="text" name="username" placeholder="Username" required>
            </div>
            <label for="password" class="ml-4 text-gray-600">Password</label>
            <div class="relative flex items-center">
                <input class="rounded-md p-2 pl-8 mb-3 border border-solid border-gray-300 w-full focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                    type="password" name="password" placeholder="Password" required>
            </div>

            <hr class="border-1 border-gray-300 my-2">

            <label for="name" class="ml-4 text-gray-600">Name</label>
            <div class="relative flex items-center">
                <input class="rounded-md p-2 pl-8 mb-3 border border-solid border-gray-300 w-full focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                    type="text" name="name" placeholder="Name" required>
            </div>

            <label for="contactNum" class="ml-4 text-gray-600">Contact Number</label>
            <div class="relative flex items-center">
                <input class="rounded-md p-2 pl-8 mb-3 border border-solid border-gray-300 w-full focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                    type="text" name="contactNum" placeholder="Contact number" required>
            </div>

            <label for="email" class="ml-4 text-gray-600">Email address</label>
            <div class="relative flex items-center">
                <input class="rounded-md p-2 pl-8 mb-3 border border-solid border-gray-300 w-full focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                    type="text" name="email" placeholder="Email" required>
            </div>

            <label for="userRole" class="ml-4 text-gray-600">Occupation</label>
            <select value="" name="userRole" class="rounded-md p-2 pl-8 mb-4 border border-solid border-gray-300 w-full focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800">
                <option value="0" selected>Select Occupation</option>
                <option value="1">City Mayor</option>
                <option value="2">Municipal Staff</option>
                <option value="3">Barangay Captian</option>
            </select>

            <input type="submit" value="add" name="addUserBtn"
                    class="uppercase mx-28 border-gray-600 px-6 p-1 w-32 rounded-xl bg-orange-300 text-white shadow-sm hover:bg-yellow-800 hover:shadow-lg mb-5 cursor-pointer">
        </form>
    </div>