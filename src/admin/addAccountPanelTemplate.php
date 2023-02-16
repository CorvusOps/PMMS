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
    <title>Add Accounts</title>
</head>
<body class="bg-[#FFF0B9] font-Poppins">
    
    <?php include '../includes/header.php' ?>
    <div class="flex">
        <?php include '../includes/adminSidebar.php'; ?>
        
        <div class="h-full ml-72 px-12 py-6 w-full grid justify-center">
        <h1 class="mt-4 text-2xl font-semibold tracking-wider text-orange-200 text-center">Add Account</h1>

        <form method="post">
            <br>
            <label for="clUrUsername">Username </label> <br>
            <input type="text" name="clUrUsername" placeholder="Username " 
                class="rounded-md p-2 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800">
            
            <br>
            <label for="clUrPassword">Password </label> <br>
            <input type="password" name="clUrPassword" placeholder="Password "
                class="rounded-md p-2 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800">
            
            <br>
            <label for="clUrName">Name </label> <br>
            <input type="text" name="clUrName" placeholder="Name "
                class="rounded-md p-2 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800">
            
            <br>
            <label for="clUrContactNum">Contact Number </label> <br>
            <input type="text" name="clUrContactNum" placeholder="Contact Number "
            class="rounded-md p-2 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800">
            
            <br>
            <label for="clUremail">Email </label> <br>
            <input type="text" name="clUremail" placeholder="Email "
            class="rounded-md p-2 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800">
            
            <!-- WHY I DIDNT START AT 0
               - 1. ENUM in mysql starts at 1, so when indexing in enum
               -   we can use these values to select, insert, update functions in mysql
            --->
            <br>
            <label for="clUrLevel">User Level </label> <br>
            <select value="" name="clUrLevel" class="rounded-md p-2 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800">
                <option value="1" selected>CM - City Mayor</option>
                <option value="2">MS - Municipal Staff</option>
                <option value="3">BC - Barangay Captain</option>
            </select>

            <br>
            <button type="submit" name="addUserBtn" formaction="../crud/tbusersAddAccount.php"
                    class="mt-4 uppercase border-gray-600 px-6 py-2 p-1 w-48 rounded-xl bg-white text-gray-800 hover:text-white shadow-sm hover:bg-slate-700 hover:shadow-lg mb-5 cursor-pointer"> 
                Add Account 
            </button>
            <button type="reset" class="uppercase border-gray-600 px-6 py-2 p-1 w-48 rounded-xl bg-red-500 text-white shadow-sm hover:bg-red-900 hover:shadow-lg mb-5 cursor-pointer"> 
                Clear 
            </button>
        </form>
        <!--
            <p>Already have an account?</p>
        -->
            <a href="adminAccounts.php">
                <p>Cancel</p>
            </a>
        </div>
    </div>

    <script src="../javascript/modal.js"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>