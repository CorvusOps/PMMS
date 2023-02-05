<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body>
        <form method="post">
            
            <br>
            <label for="clUrUsername">Username</label>
            <input type="text" name="clUrUsername" placeholder=" Username ">
            
            <br>
            <label for="clUrPassword">Password</label>
            <input type="password" name="clUrPassword" placeholder=" Password ">
            
            <br>
            <label for="clUrName">Name</label>
            <input type="text" name="clUrName" placeholder=" Name ">
            
            <br>
            <label for="clUrContactNum">Contact Number</label>
            <input type="text" name="clUrContactNum" placeholder=" Contact Number ">
            
            <label for="clUremail">Email</label>
            <input type="text" name="clUremail" placeholder=" Email ">
            
            <!-- WHY I DIDNT START AT 0
               - 1. ENUM in mysql starts at 1, so when indexing in enum
               -   we can use these values to select, insert, update functions in mysql
            --->
            <br>
            <label for="clUrLevel">User Level</label>
            <select value="" name="clUrLevel">
                <option value="1" selected>CM - City Mayor</option>
                <option value="2">MS - Municipal Staff</option>
                <option value="3">BC - Barangay Captian</option>
            </select>

            <br>
            <button type="submit" formaction="../crud/tbusersAddAccount.php"> Sign Up </button>
            <button type="reset"> Clear </button>
        </form>
        <p>Already have an account?</p>

        <a href="../adminAccounts.php">
            <p>Cancel</p>
        </a>
    </body>
</body>
</html>