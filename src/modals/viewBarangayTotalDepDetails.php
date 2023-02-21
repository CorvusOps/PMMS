<div class="add-modal fixed w-[500px] top-[10%] right-[25%] text-md ">
        <?php 
            if(isset($_POST['TdIDbtn'])){ 
                $tdId = $_POST['TdIDbtn'];

                $totalDepDetails = mysqli_query($connectdb,"SELECT td.clTdID, td.clTdPercent, td.clTdYear, td.clBrID, td.clCmAverage, td.clFtID, td.clItID, td.clUnID,
                                                        ft.clFtID, ft.clFtPercent, ft.clBrID, it.tbItID, it.tbItPercent, it.clBrID , un.clUnID, un.clUnPercent, un.clBrID, br.clBrID, br.clBrName
                                                FROM pmms.tbtotaldeprivation AS td LEFT JOIN pmms.tbbarangay AS br 
                                                ON td.clBrID = br.clBrID
                                                LEFT JOIN pmms.tbfoodthreshold AS ft 
                                                ON td.clBrID = ft.clBrID
                                                LEFT JOIN pmms.tbincomethreshold AS it 
                                                ON td.clBrID = it.clBrID
                                                LEFT JOIN pmms.tbunemployment AS un
                                                ON td.clBrID = un.clBrID 
                                                WHERE td.clTdID = $tdId");
           
        ?>

        <div class="bg-[#fdfbfb] px-16 py-2 shadow-md shadow-gray-500">

            <button type="reset" onclick="closeModal('.add-modal')">
                <iconify-icon icon="carbon:close" width="25" id="close" class="absolute right-[20px] top-[10px] cursor-pointer"></iconify-icon>
            </button>

            <?php 
                $row = $totalDepDetails->fetch_assoc();
                    echo' 
                    <h1 class="text-2xl  text-center font-semibold text-orange-200 mb-3">Barangay '. $row["clBrName"].'</h1>

                    <div class="pb-8 pt-4 grid grid-cols-2">
                        <label class="ml-4 text-gray-700 mb-8">Year</label>
                        <p class="text-center text-lg font-semibold">'.$row["clTdYear"].'</p>
                    
                        <label class="ml-4 text-gray-700">Total Deprivation</label>
                        <p class="text-center text-lg font-semibold">'. round($row["clTdPercent"], 2).'</p>
                        <div class="col-span-2 text-[12px] mb-8">
                            <p class="text-gray-400 italic font-light"> Computed total deprivation across all core poverty indicators</p>
                        </div>
                    
                        <label class="ml-4 text-gray-700">Child Malnutrition</label>
                        <p class="text-center text-lg font-semibold">'. round($row["clCmAverage"], 2).'</p>
                        <div class="col-span-2 text-[12px] mb-8">
                            <p class="text-gray-400 italic font-light">Percentage of malnourished children</p>
                        </div>
                    
                        <label class="ml-4 text-gray-700">Food Threshold</label>
                        <p class="text-center text-lg font-semibold">'.$row["clFtPercent"].'</p>
                        <div class="col-span-2 text-[12px] mb-8">
                            <p class="text-gray-400 italic font-light">Percentage of households below food threshold</p>
                        </div>
                    
                        <label class="ml-4 text-gray-700">Income Threshold</label>
                        <p class="text-center text-lg font-semibold">'.$row["tbItPercent"].'</p>
                        <div class="col-span-2 text-[12px] mb-8">
                            <p class="text-gray-400 italic font-light">Percentage of households below income threshold</p>
                        </div>
                    
                        <label class="ml-4 text-gray-700">Unemployment</label>
                        <p class="text-center text-lg font-semibold">'.$row["clUnPercent"].'</p>
                        <div class="col-span-2 text-[12px] mb-4">
                            <p class="text-gray-400 italic font-light">Percentage of working-aged persons who are unemployed</p>
                        </div>
                    </div>
                    ';
            }
           
            ?>
        </div>
    </div>