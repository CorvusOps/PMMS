<?php 
include 'src/includes/connectdb.php';
include 'src/includes/authentication.php';

// if the session is already stablished
// any attemp of going here will be redirected in their respective dashboard
if(isset($_SESSION['admin_sid']) || isset($_SESSION['cm_sid']) ||
   isset($_SESSION['ms_sid'])    || isset($_SESSION['bc_sid'])){
    switch(session_id()){
        case $_SESSION['admin_sid']:
            header("location:src/admin/adminDashboard.php");
            break;
        case $_SESSION['cm_sid']:
            header("location:src/city/cityDashboard.php");
            break;
        case $_SESSION['ms_sid']:
            header("location:src/city/cityDashboard.php");
            break;
        case $_SESSION['bc_sid']:
            header("location:src/barangay/barangayDashboard.php");
            break;
        default:
            header("location:src/includes/error404.php");
            break;
        }
    
    
    // if the session is already stablished
    // any attemp of going here will be redirected in their respective dashboard
    /**TRY THIS LATER
     * switch(session_id()){
     *  case $_SESSION['admin_sid']:
     *       header("location:webadmin/adminpanel.php");
     *  case "cm_sid":
     *  case 'ms_sid':
     * }
     
    if(isset($_SESSION['admin_sid'])){
        header("location:src/admin/adminDashboard.php");
    }elseif(isset($_SESSION['cm_sid'])){
        header("location:src/city/cityDashboard.php");
    }elseif(isset($_SESSION['ms_sid'])){
        header("location:src/city/cityDashboard.php");
    }elseif(isset($_SESSION['bc_sid'])){
        header("location:src/barangay/barangayDashboard.php");
    }else{
        header("location:index.php");
    }*/
}else{  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/output.css">
    <title>Poverty and Malnutrition Monitoring System</title>
</head>
<body class="bg-[url('../images/city-background.jpeg')] bg-fixed bg-cover backdrop-blur-sm">
    <!--Full page div-->
    <div class="h-screen backdrop-blur-sm bg-gray-100/5 flex">
        <div class="md:flex md:mt-8 mt-2 md:mr-8 md:ml-8 md:mb-0 p-7 gap-8 pb-24">
            <div class="md:w-1/2 flex items-center md:ml-12">
                <!--system title image hides on bigger screen and system text title shows on mobile view-->
                <img src="images/Text.png" alt="System Name" class="hidden md:block">
                <h1 class="font-Poppins font-semibold text-center text-2xl text-orange-200 drop-shadow-[0_1px_2px_rgba(0,0,0,1)]
                            w-full md:hidden block mb-5 px-5">
                            City Poverty and Malnutrition Monitoring System
                </h1>
            </div>        
            <div class="md:ml-32 mx-5">
                <!--login form-->
                <form action="index.php" method="post"
                class="bg-white w-96 px-8 py-6 font-Poppins rounded-lg shadow-md shadow-gray-600">

                    <?php include('src/includes/errors.php'); ?>

                    <h1 class="text-center text-3xl font-bold text-orange-200 mb-8">Login</h1>

                    <label for="username">Username</label>
                    <div class="relative flex items-center">
                        <iconify-icon inline icon="ant-design:user-outlined" class="absolute ml-2 h-12 p-2" style="color: #acacac;"></iconify-icon>
                        <input class="rounded-xl shadow-md p-2 pl-12 mb-3 border border-solid border-gray-300 w-full focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                                    type="text" name="username" placeholder="Enter your Username" required>
                    </div>

                    <label for="password">Password</label>
                    <div class="relative flex items-center">
                        <iconify-icon inline icon="bx:lock-alt" class="absolute ml-2 h-12 p-2" style="color: #acacac;"></iconify-icon>
                        <input class="rounded-xl shadow-md p-2 pl-12 mb-3 border border-solid border-gray-300 w-full focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                                    type="password" name="password" placeholder="Enter your Password" required>
                    </div>

                    <div class="my-5 grid place-items-center"> 
                        <!--div for login button-->
                        <input type="submit" value="Login" name="login"
                            class="uppercase border-gray-600 px-6 p-1 w-2/3 rounded-2xl bg-orange-300 text-white shadow-sm hover:bg-yellow-800 hover:shadow-lg">
                    </div>

                    <hr class="mt-8 border border-gray-300">
                    <div class="py-4">
                        <!--Forgot password or technical assistance text-->
                        <p class="text-yellow-600">
                            Forgot password?
                        </p>
                        <p class="text-[#757575] text-sm">
                            Request technical assistance from the system administrator or contact your city office.
                        </p>
                        <p class="text-[#757575] text-sm">
                            Send an email to: <strong>support@pmmsys.com</strong>
                        </p> 
                    </div>
                   <!--End of login form-->
                </form>
            </div>
        </div>
    </div>
    <!--End of full page-->

    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
</body>
</html>
<?php }?>