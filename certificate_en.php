<!DOCTYPE html>
<!-- saved from url=(0027)http://localhost:3000/print -->
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <link rel="icon" href="http://localhost:3000/favicon.ico" />

        <title>EN-<?php echo $_POST['brNo']?></title>
        <?php include('assets/css/certificate/style.php');?>
        <style>
            .h-5{
                height: 1.75rem !important;
            }
        </style>
    </head>
    <body>
        <div id="root">
            <div class="full mx-auto">
                <div class="flex flex-row">
                   
                    <div class="!w-full">
                       
                        <div class=" mx-auto">
                            <div class="flex justify-center items-center flex-col gap-6 my-10">
                                <div class="w-[660px] h-[890px] mx-auto border">
                                    <div
                                        class="relative after:absolute after:rounded-sm after:content-[&#39;&#39;] after:top-0 after:right-0 after:w-full after:h-full after:border-[1.9px] after:border-black before:absolute before:content-[&#39;&#39;] before:-top-[15px] before:-right-[15px] before:w-[687px] before:h-[920px] before:border-[2px] before:border-black before:rounded-sm"
                                    >
                                        <div class="relative w-full h-[890px] !overflow-hidden bg-cover bg-no-repeat">
                                            <img class="w-full h-full opacity-20" src="assets\img\bg.jpeg" alt="image" />
                                            <div class="absolute top-0 right-0 w-full h-full z-50 p-2">
                                                <div class="relative">
                                                    <h1 class="absolute top-2 right-2 !text-[11.50px] font-semibold !font-lcallig !font-extrabold">BDR Form - 3</h1>
                                                    <div class="text-center">
                                                        <h1 class="font-semibold !text-[11.50px] !font-lcallig !font-extrabold">Government Of The People's Republic Of Bangladesh</h1>
                                                        <h2 class="!font-lcallig !font-extrabold !text-[11.50px] font-semibold">Office of the Birth and Death Registrar</h2>
                                                        <p class="!font-lcallig !font-extrabold !text-[11.50px]"><?php echo $_POST['address1'];?></p>
                                                        <p class="!font-lcallig !font-extrabold mt-2 !text-[11.50px]"><?php echo $_POST['address2'];?></p>
                                                        <p class="!font-lcallig !font-extrabold mb-1 !text-[11.50px]"><?php echo $_POST['address3'];?></p>
                                                        <p class="!font-lcallig !font-extrabold !text-[15.50px] !font-bold">Birth Registration Certificate</p>
                                                        <div class="text-[11.50px] text-center font-semibold flex justify-center">
                                                            [
                                                            <p class="!font-lcallig !font-extrabold text-[11.50px] text-center font-semibold mx-[2px]">Note to rules 9 and 10</p>
                                                            ]
                                                        </div>
                                                        <div class="text-[11.50px] text-center font-semibold flex justify-center">
                                                            (
                                                            <p class="!font-lcallig !font-extrabold text-[11.50px] text-center font-semibold mx-[2px]">extracted from BR Book</p>
                                                            )
                                                        </div>
                                                    </div>
                                                    <div class="flex justify-between">
                                                        <div class="flex flex-col justify-start gap-3">
                                                            <div class="flex flex-row">
                                                                <p class="!font-lcallig !font-extrabold w-[140px] !text-[11.50px]">Register No:</p>
                                                                <p class="!font-lcallig !font-extrabold !text-[11.50px]"><?php echo $_POST['registerNo'];?></p>
                                                            </div>
                                                            <div class="flex flex-row">
                                                                <p class="!font-lcallig !font-extrabold w-[140px] capitalize !text-[11.50px]">date Of Registration:</p>
                                                                <p class="!font-lcallig !font-extrabold !text-[11.50px]"><?php echo engToBnDateDigit($_POST['dor']);?></p>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-row justify-end gap-1">
                                                            <p class="!font-lcallig !font-extrabold capitalize !text-[11.50px]">date Of Issue:</p>
                                                            <p class="!font-lcallig !font-extrabold !text-[11.50px] capitalize"><?php echo engToBnDateDigit($_POST['doi']);?></p>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-row items-center my-2">
                                                        <p class="!font-lcallig !font-extrabold w-[140px] !text-[11.50px]">BR Number:</p>
                                                        <div class="relative">
                                                            <div class="border border-black flex">
                                                            <?php
                                                                    $brNo = $_POST['brNo'];

                                                                    $str_splite = str_split($brNo);

                                                                    foreach ($str_splite as $key => $value) {
                                                                        ?>
                                                                            <div class="w-[28.30px] h-[35px] border-r last:border-none border-black flex justify-center items-center"><p style="font-family:LCALLIG !important;" class="!font-extrabold !text-[11.50px]"><?php echo $value; ?></p></div>
                                                                        <?php
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-row">
                                                        <p class="!font-lcallig !font-extrabold w-[140px] !text-[11.50px] capitalize">name:</p>
                                                        <p class="!font-lcallig !font-extrabold !text-[13px]"><?php echo $_POST['name'];?></p>
                                                    </div>
                                                    <div class="flex justify-between items-center">
                                                        <div class="flex flex-row items-center my-4">
                                                            <p class="!font-lcallig !font-extrabold w-[140px] !text-[11.50px] capitalize">date Of Birth:</p>
                                                            <div class="relative">
                                                                <div class="border border-black flex">
                                                                    <?php 
                                                                        $date = $_POST['dob'];
                                                                        $dateParts = explode('/', $date);
                                                                        $day = (int)$dateParts[0];
                                                                        $month = (int)$dateParts[1];
                                                                        $year = (int)$dateParts[2];
                                                                        
                                                                        $dayArray = str_split(sprintf("%02d", $day));
                                                                        foreach ($dayArray as $key => $value) {
                                                                            ?>
                                                                                <div class="w-4 h-5 border-r last:border-none border-black flex justify-center items-center"><p class="!font-lcallig !font-extrabold !text-[11.50px]"><?php echo $value?></p></div>
                                                                            <?php
                                                                        }
                                                                    ?>
                                                                    <div class="bg-black w-4 h-5 border-r last:border-none border-black flex justify-center items-center"><p class="text-[11.50px]">/</p></div>
                                                                    <?php 
                                                                        $monthArray = str_split(sprintf("%02d", $month));
                                                                        foreach ($monthArray as $key => $value) {
                                                                            ?>
                                                                                <div class="w-4 h-5 border-r last:border-none border-black flex justify-center items-center"><p class="!font-lcallig !font-extrabold !text-[11.50px]"><?php echo $value?></p></div>
                                                                            <?php
                                                                        }
                                                                    ?>
                                                                    <div class="bg-black w-4 h-5 border-r last:border-none border-black flex justify-center items-center"><p class="text-[11.50px]">/</p></div>
                                                                    <?php 
                                                                        $yearArray = str_split(sprintf("%02d", $year));
                                                                        foreach ($yearArray as $key => $value) {
                                                                            ?>
                                                                                <div class="w-4 h-5 border-r last:border-none border-black flex justify-center items-center"><p class="!font-lcallig !font-extrabold !text-[11.50px]"><?php echo $value?></p></div>
                                                                            <?php
                                                                        }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-[150px] flex flex-row gap-1">
                                                            <p class="!font-lcallig !font-extrabold capitalize !text-[11.50px]">sex:</p>
                                                            <p class="!font-lcallig !font-extrabold capitalize !text-[11.50px]"><?php echo $_POST['gendar'];?></p>
                                                        </div>
                                                    </div>
                                                    <div class="flex justify-between">
                                                        <div class="flex flex-row">
                                                            <p class="!font-lcallig !font-extrabold !text-[11.50px] w-[140px] capitalize">in Words:</p>
                                                            <p class="!font-lcallig !font-extrabold !text-[11.5px]"><?php echo convertDateToBangla($_POST['dob']);?></p>
                                                        </div>
                                                        <div class="w-[150px] flex flex-row gap-1">
                                                            <p class="!font-lcallig !font-extrabold !text-[11.50px] capitalize">order Of Child:</p>
                                                            <p class="!font-lcallig !font-extrabold !text-[11.50px]"><?php echo $_POST['ooc'];?></p>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-col my-4 gap-3">
                                                        <div class="flex flex-row">
                                                            <p class="!font-lcallig !font-extrabold w-[140px] !text-[11.50px] capitalize">place Of Birth:</p>
                                                            <p class="!font-lcallig !font-extrabold !text-[11.50px] capitalize"><?php echo $_POST['pob'];?></p>
                                                        </div>
                                                        <div class="flex flex-row mt-1">
                                                            <p class="!font-lcallig !font-extrabold !text-[11.50px] !w-[140px] !max-w-[140px] capitalize">permanent Address:</p>
                                                            <div class="w-[512px] !overflow-hidden flex flex-col">
                                                                <?php
                                                                    $explode_address = preg_split("/\r\n|\n|\r/", $_POST['fullAddress']);
                                                                    $explode_address = explode("\n", trim($_POST['fullAddress']));
                                                                ?>
                                                                <div class="w-[1000px]"><p class="!font-lcallig !font-extrabold px-[2px] !text-[11.50px]"><?php echo !empty($explode_address[0]) ? $explode_address[0] : "";?></div>
                                                                <div class="flex items-center"><p class="!font-lcallig !font-extrabold px-[2px] !text-[11.50px]"><?php echo !empty($explode_address[0]) ? $explode_address[0] : "";?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-full mx-auto mt-5 rounded-sm border border-black p-2">
                                                        <div class="flex flex-row">
                                                            <p class="w-[134px] !font-lcallig !font-extrabold capitalize !text-[11.50px]">father's Name:</p>
                                                            <p class="!font-lcallig !font-extrabold !text-[11.50px] capitalize"><?php echo $_POST['fatherName'];?></p>
                                                        </div>
                                                        <div class="flex justify-between items-center">
                                                            <div class="flex flex-row">
                                                                <p class="w-[134px] !font-lcallig !font-extrabold !text-[11.50px]">Father's BRN:</p>
                                                                <p class="!font-lcallig !font-extrabold !text-[11.50px]"><?php echo $_POST['fatherBrn'];?></p>
                                                            </div>
                                                            <div class="flex flex-row gap-1">
                                                                <p class="!font-lcallig !font-extrabold !text-[11.50px] capitalize">father Nationality:</p>
                                                                <p class="!font-lcallig !font-extrabold !text-[11.50px] capitalize"><?php echo $_POST['fatherNationality'];?></p>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-row">
                                                            <p class="w-[134px] !font-lcallig !font-extrabold !text-[11.50px]">Father's NID:</p>
                                                            <p class="!font-lcallig !font-extrabold !text-[11.50px]"><?php echo $_POST['fatherNid'];?></p>
                                                        </div>
                                                        <div class="flex flex-row mt-4">
                                                            <p class="w-[134px] !font-lcallig !font-extrabold capitalize !text-[11.50px]">mother's Name:</p>
                                                            <p class="!font-lcallig !font-extrabold !text-[11.50px]"><?php echo $_POST['motherName'];?></p>
                                                        </div>
                                                        <div class="flex justify-between items-center">
                                                            <div class="flex flex-row">
                                                                <p class="w-[134px] !font-lcallig !font-extrabold !text-[11.50px]">Mother's BRN:</p>
                                                                <p class="!font-lcallig !font-extrabold !text-[11.50px]"><?php echo $_POST['motherBrn'];?></p>
                                                            </div>
                                                            <div class="flex flex-row gap-1">
                                                                <p class="!font-lcallig !font-extrabold !text-[11.50px] capitalize">mother Nationality:</p>
                                                                <p class="!font-lcallig !font-extrabold !text-[11.50px] capitalize"><?php echo $_POST['motherNationality'];?></p>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-row">
                                                            <p class="w-[134px] !font-lcallig !font-extrabold !text-[11.50px]">Mother's NID:</p>
                                                            <p class="!font-lcallig !font-extrabold !text-[11.50px]"><?php echo $_POST['motherNid'];?></p>
                                                        </div>
                                                    </div>
                                                    <div class="gap-[70px] mt-[180px] flex flex-col">
                                                        <div class="w-full flex flex-row">
                                                            <div class="w-2/4 text-right !text-[11.50px] flex justify-end pr-[60px] translate-y-[45px] translate-x-[10px]">
                                                                <p class="font-bold">(</p>
                                                                <p class="!font-lcallig !font-extrabold">Prepared by</p>
                                                                <p class="font-bold">)</p>
                                                            </div>
                                                            <div class="flex items-center justify-end flex-row w-2/4 !text-[11.50px] gap-[2px] mr-[22px]">
                                                                <p class="font-bold">(</p>
                                                                <p class="!font-lcallig !font-extrabold text-right !text-[11.50px]">Signature and seal of the Registrar</p>
                                                                <p class="font-bold">)</p>
                                                            </div>
                                                        </div>
                                                        <div class="w-full flex flex-row">
                                                            <p class="!font-lcallig !font-extrabold w-[46%] text-left !text-[11.50px] ml-3">Seal of Registrar Office</p>
                                                            <div class="-translate-y-[42px] -translate-x-[15px] w-2/4 text-left !text-[11.50px] flex justify-start">
                                                                <p class="font-bold">(</p>
                                                                <p class="!font-lcallig !font-extrabold">Verified by</p>
                                                                <p class="font-bold">)</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script>
   window.addEventListener('click', function(){
      window.print()
   });
</script>

<?php 
function convertDateToBangla($dateString) {
    $date_parts = explode('/', $dateString);
    $date = $date_parts[1].'/'.$date_parts[0].'/'.$date_parts[2];
    $formatted_date = date('jS M, Y', strtotime($date));
    return $formatted_date;
}
  function engToBnDateDigit($date) {

    $date_parts = explode('/', $date);
    $bn_date = $date_parts[0].'/'.$date_parts[1].'/'.$date_parts[2];
    return $bn_date;
}