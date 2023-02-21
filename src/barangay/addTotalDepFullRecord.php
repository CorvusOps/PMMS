<?php
include '../includes/connectdb.php';

$username = $_SESSION["Username"];

$clTdYear = $_POST["clTdYear"];
$clBrID = $_SESSION["BarangayID"];

// if the session id that is registered is not session id, then 
// temporarily, return to index or maybe have an error 404
if(!isset($_SESSION["bc_sid"]) && !isset($_SESSION["bc_sid"])){	
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
    <title>Total Deprivation</title>
</head>
<body class="bg-[#FFF0B9] font-Poppins">
<?php include '../includes/header.php' ?>
    <div class="flex">
        <?php include '../includes/barangaySidebar.php'; ?>
        
        <div class="h-full ml-72 px-12 py-6 w-full grid justify-center">

            <h1 class="mt-2 mb-2 text-2xl font-semibold tracking-wider text-orange-200 text-center">Add Records</h1>
            
            <form action="../crud/tbtotaldeprivationAddRecord.php" method="post">
                
                <label for="clTdYear" class="ml-4 text-gray-600">Year</label>
                <div class="relative flex items-center">
                    <input class="rounded-md p-1 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                        type="text" value="<?php echo $clTdYear ?>" name="clTdYear" placeholder="Year" readonly>
                </div>

                <label for="clBrID" class="ml-4 text-gray-600">Barangay</label>
                <input type="hidden" name="clBrID" value="<?php echo $_SESSION['BarangayID'] ?>">
                <div class="relative flex items-center">
                    <input class="rounded-md p-1 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                        type="text" value="<?php echo $_SESSION['Barangay'] ?>" placeholder="Year" readonly>
                </div>
                
                <?php 
                    $cmQuery = "SELECT cm.clBrID, AVG(cm.clCmPercent) AS clAVGPercent FROM pmms.tbchildmalnutrition as cm
                    INNER JOIN pmms.tbbarangay AS br ON cm.clBrID = br.clBrID WHERE cm.clBrID = $clBrID GROUP BY cm.clBrID";
                    $ftQuery = "SELECT * FROM tbfoodthreshold WHERE clFtYear = $clTdYear AND clBrID = $clBrID;";
                    $itQuery = "SELECT * FROM tbincomethreshold WHERE clItYear = $clTdYear AND clBrID = $clBrID;";
                    $unQuery = "SELECT * FROM tbunemployment WHERE clUnYear = $clTdYear AND clBrID = $clBrID;";
                    $CMresults = mysqli_query($connectdb, $cmQuery);
                    $FTresults = mysqli_query($connectdb, $ftQuery);
                    $ITresults = mysqli_query($connectdb, $itQuery);
                    $UNresults = mysqli_query($connectdb, $unQuery);
                    
                    if($CMresults->num_rows>0){
                        $CMrow = $CMresults->fetch_assoc();
                    } else {
                        $CMrow["clAVGPercent"] = 0;
                    }

                    if($FTresults->num_rows>0){
                        $FTrow = $FTresults->fetch_assoc();
                    } else {
                        $FTrow["clFtPercent"] = 0;
                    }

                    if($ITresults->num_rows>0){
                        $ITrow = $ITresults->fetch_assoc();
                    } else {
                        $ITrow["tbItPercent"] = 0;
                    }

                    if($UNresults->num_rows>0){
                        $UNrow = $UNresults->fetch_assoc();
                    } else {
                        $UNrow["clUnPercent"] = 0;
                    }
                   
                
                echo'<label for="" class="ml-4 text-gray-600">Child Malnutrition Percentage</label><br>
                    <input class="rounded-md p-1 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                            type="text" value="'.$CMrow["clAVGPercent"].'" placeholder="Year" readonly><br>
                    
                    <label for="" class="ml-4 text-gray-600">Food Threshold Percentage</label><br>
                    <input class="rounded-md p-1 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                    type="text" value="'.$FTrow["clFtPercent"].'" placeholder="Year" readonly><br>
                    
                    <label for="" class="ml-4 text-gray-600">Income Threshold Percentage</label><br>
                    <input class="rounded-md p-1 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                    type="text" value="'.$ITrow["tbItPercent"].'" placeholder="Year" readonly><br>
                    
                    <label for="" class="ml-4 text-gray-600">Unemployment Percentage</label><br>
                    <input class="rounded-md p-1 pl-6 mb-3 border border-solid border-gray-300 w-96 focus:outline-none text-gray-500 focus:border-blue-600 focus:text-gray-800"
                    type="text" value="'.$UNrow["clUnPercent"].'" placeholder="Year" readonly>';
                ?>

                <br>
                <button type="submit" name="addRecordBtn" formaction="../crud/tbtotaldeprivationAddRecord.php"
                    class="mt-2 uppercase border-gray-600 px-6 py-2 p-1 w-48 rounded-xl bg-white text-gray-800 hover:text-white shadow-sm hover:bg-slate-700 hover:shadow-lg mb-5 cursor-pointer"> 
                    Add Record
                </button>
                
                <button type="reset"
                class="uppercase border-gray-600 px-6 py-2 p-1 w-48 rounded-xl bg-red-500 text-white shadow-sm hover:bg-red-900 hover:shadow-lg mb-5 cursor-pointer"> 
                    Clear 
                </button>
            </form>
            <!--
                <p>Already have an account?</p>
            -->
                <a href="barangayRecords.php">
                <p>Cancel</p>

            </a>
        </div>
    </div>

    <script src="../javascript/modal.js"></script>
    <script src="../javascript/submenu.js"></script>
    <script src="../javascript/headerDropDown.js"></script>
    <script src="https://code.iconify.design/3/3.0.0/iconify.min.js"></script>
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</body>
</html>