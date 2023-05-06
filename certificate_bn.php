

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Web site created using create-react-app" />

         <title>BN-<?php echo $_POST['brNo']?></title>

        <?php include('assets/css/certificate/style.php');$bn_digits = array('০','১','২','৩','৪','৫','৬','৭','৮','৯'); ?>
    </head>
    <body>
        <div id="root">
            <div class="full mx-auto">
                <div class="flex flex-row">
                    <div class="!w-full">
                        <div class="mx-auto">
                            <div class="flex justify-center items-center flex-col gap-6 my-10">
                                <div class="w-[660px] h-[890px] mx-auto border">
                                    <div
                                        class="relative after:absolute after:rounded-sm after:content-[&#39;&#39;] after:top-0 after:right-0 after:w-full after:h-full after:border-[1.9px] after:border-black before:absolute before:content-[&#39;&#39;] before:-top-[15px] before:-right-[15px] before:w-[687px] before:h-[920px] before:border-[2px] before:border-black before:rounded-sm"
                                    >
                                        <div class="relative w-full h-[890px] !overflow-hidden bg-cover bg-no-repeat">
                                            <img class="w-full h-full opacity-20" src="assets\img\bg.jpeg" alt="image" />
                                            <div class="absolute top-0 right-0 w-full h-full z-50 p-2">
                                                <div class="relative">
                                                    <h1 class="absolute top-2 right-2 !text-[11.50px] font-semibold !font-nikosh !font-extrabold">জমনি ফরম-৩</h1>
                                                    <div class="text-center">
                                                        <h1 class="font-bold !text-[17.50px] !font-nikosh !font-extrabold">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</h1>
                                                        <h2 class="!font-nikosh !font-extrabold !text-[12.50px] font-semibold">জন্ম ও মৃত্যু নিবন্ধকের কার্যালয়</h2>
                                                        <p class="!font-nikosh !font-extrabold !text-[12.50px]"><?php echo $_POST['address1'];?></p>
                                                        <p class="!font-nikosh !font-extrabold mt-2 !text-[12.50px]"><?php echo $_POST['address2'];?></p>
                                                        <p class="!font-nikosh !font-extrabold mb-1 !text-[12.50px]"><?php echo $_POST['address3'];?></p>
                                                        <p class="!font-nikosh !font-extrabold !text-[16.50px] !font-bold">জন্ম নিবন্ধন সনদ</p>
                                                        <div class="text-[11.50px] text-center font-semibold flex justify-center">
                                                            [
                                                            <p class="!font-nikosh !font-extrabold text-[11.50px] text-center font-semibold mx-[2px]">বিধি ৯ ও ১০ দ্রষ্টব্য</p>
                                                            ]
                                                        </div>
                                                        <div class="text-[11.50px] text-center font-semibold flex justify-center">
                                                            (
                                                            <p class="!font-nikosh !font-extrabold text-[11.50px] text-center font-semibold mx-[2px]">জম্ম নিবন্ধন বহি হাতে উদ্ববত</p>
                                                            )
                                                        </div>
                                                    </div>
                                                    <div class="flex justify-between">
                                                        <div class="flex flex-col justify-start gap-3">
                                                            <div class="flex flex-row">
                                                                <p class="!font-nikosh !font-extrabold w-[130px] !text-[11.50px]">নিবন্ধন বহি নম্বরঃ</p>
                                                                <p class="!font-nikosh !font-extrabold !text-[11.50px]">
                                                                    <?php
                                                                        $registerNo = $_POST['registerNo'];
                                                                        $str_splite_registerNo = str_split($registerNo);
                                                                        foreach ($str_splite_registerNo as $key => $value) {
                                                                            echo $bn_digits[$value];
                                                                        }
                                                                    ?>
                                                                </p>
                                                            </div>
                                                            <div class="flex flex-row">
                                                                <p class="!font-nikosh !font-extrabold w-[130px] capitalize !text-[11.50px]">নিবন্ধনের তারিখঃ</p>
                                                                <p class="!font-nikosh !font-extrabold !text-[11.50px]"><?php echo engToBnDateDigit($_POST['dor']);?></p>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-row justify-end gap-1">
                                                            <p class="!font-nikosh !font-extrabold capitalize !text-[11.50px]">সনদ প্রদানের তারিখঃ</p>
                                                            <p class="!font-nikosh !font-extrabold !text-[11.50px] capitalize"><?php echo engToBnDateDigit($_POST['doi']);?></p>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-row items-center my-2">
                                                        <p class="!font-nikosh !font-extrabold w-[130px] !text-[11.50px]">জন্ম নিবন্ধন নাম্বারঃ</p>
                                                        <div class="relative">
                                                            <div class="border border-black flex">
                                                                <?php
                                                                    $brNo = $_POST['brNo'];

                                                                    $str_splite = str_split($brNo);

                                                                    foreach ($str_splite as $key => $value) {
                                                                        ?>
                                                                            <div class="w-[28.30px] h-[35px] border-r last:border-none border-black flex justify-center items-center"><p class="!font-nikosh !font-extrabold !text-[11.50px]"><?php echo $bn_digits[$value]; ?></p></div>
                                                                        <?php
                                                                    }
                                                                ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-row">
                                                        <p class="!font-nikosh !font-extrabold w-[130px] !text-[11.50px] capitalize">নামঃ</p>
                                                        <p class="!font-nikosh !font-extrabold !text-[13px]"><?php echo $_POST['name'];?></p>
                                                    </div>
                                                    <div class="flex justify-between items-center">
                                                        <div class="flex flex-row items-center my-4">
                                                            <p class="!font-nikosh !font-extrabold w-[130px] !text-[11.50px] capitalize">জন্ম তারিখঃ</p>
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
                                                                                <div class="w-4 h-5 border-r last:border-none border-black flex justify-center items-center"><p class="!font-nikosh !font-extrabold !text-[11.50px]"><?php echo $bn_digits[$value]?></p></div>
                                                                            <?php
                                                                        }
                                                                    ?>
                                                                    <div class="bg-black w-4 h-5 border-r last:border-none border-black flex justify-center items-center"><p class="text-[11.50px]">/</p></div>
                                                                    <?php 
                                                                        $monthArray = str_split(sprintf("%02d", $month));
                                                                        foreach ($monthArray as $key => $value) {
                                                                            ?>
                                                                                <div class="w-4 h-5 border-r last:border-none border-black flex justify-center items-center"><p class="!font-nikosh !font-extrabold !text-[11.50px]"><?php echo $bn_digits[$value]?></p></div>
                                                                            <?php
                                                                        }
                                                                    ?>
                                                                    <div class="bg-black w-4 h-5 border-r last:border-none border-black flex justify-center items-center"><p class="text-[11.50px]">/</p></div>
                                                                    <?php 
                                                                        $yearArray = str_split($year);
                                                                        foreach ($yearArray as $key => $value) {
                                                                            ?>
                                                                                <div class="w-4 h-5 border-r last:border-none border-black flex justify-center items-center"><p class="!font-nikosh !font-extrabold !text-[11.50px]"><?php echo $bn_digits[$value]?></p></div>
                                                                            <?php
                                                                        }
                                                                    ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="w-[221px] flex flex-row gap-1">
                                                            <p class="!font-nikosh !font-extrabold capitalize !text-[11.50px]">লিঙ্গঃ</p>
                                                            <p class="!font-nikosh !font-extrabold capitalize !text-[11.50px]"><?php echo $_POST['gendar'];?></p>
                                                        </div>
                                                    </div>
                                                    <div class="flex justify-between">
                                                        <div class="flex flex-row">
                                                            <p class="!font-nikosh !font-extrabold !text-[11.50px] w-[130px] capitalize">কথায়ঃ</p>
                                                            <p class="!font-nikosh !font-extrabold !text-[11.5px]"><?php echo convertDateToBangla($_POST['dob']);?></p>
                                                        </div>
                                                        <div class="w-[221px] flex flex-row gap-1">
                                                            <p class="!font-nikosh !font-extrabold !text-[11.50px] capitalize">সন্তানের ক্রমঃ</p>
                                                            <p class="!font-nikosh !font-extrabold !text-[11.50px]"><?php echo !empty($_POST['ooc']) ?$bn_digits[$_POST['ooc']] : "";?></p>
                                                        </div>
                                                    </div>
                                                    <div class="flex flex-col my-4 gap-3">
                                                        <div class="flex flex-row">
                                                            <p class="!font-nikosh !font-extrabold w-[130px] !text-[11.50px] capitalize">জন্মস্থানঃ</p>
                                                            <p class="!font-nikosh !font-extrabold !text-[11.50px] capitalize"><?php echo $_POST['pob'];?></p>
                                                        </div>
                                                        <div class="flex flex-row mt-1">
                                                            <p class="!font-nikosh !font-extrabold !text-[11.50px] !w-[130px] !max-w-[130px] capitalize">স্থায়ী ঠিকানাঃ</p>
                                                            <div class="w-[512px] !overflow-hidden flex flex-col">
                                                                <?php
                                                                    $explode_address = preg_split("/\r\n|\n|\r/", $_POST['fullAddress']);
                                                                    $explode_address = explode("\n", trim($_POST['fullAddress']));
                                                                ?>
                                                                <div class="w-[1000px]"><p class="!font-nikosh !font-extrabold px-[2px] !text-[11.50px]"><?php echo !empty($explode_address[0]) ? $explode_address[0] : "";?></div>
                                                                <div class="w-[1000px]"><p class="!font-nikosh !font-extrabold px-[2px] !text-[11.50px]"><?php echo !empty($explode_address[1]) ? $explode_address[1] : "";?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="w-full mx-auto mt-5 rounded-sm border border-black p-2">
                                                        <div class="flex flex-row">
                                                            <p class="w-[178px] !font-nikosh !font-extrabold capitalize !text-[11.50px]">পিতার নামঃ</p>
                                                            <p class="!font-nikosh !font-extrabold !text-[11.50px] capitalize"><?php echo $_POST['fatherName'];?></p>
                                                        </div>
                                                        <div class="flex justify-between items-center">
                                                            <div class="flex flex-row">
                                                                <p class="w-[178px] !font-nikosh !font-extrabold !text-[11.50px]">পিতার জন্ম নিবন্ধন নম্বরঃ</p>
                                                                <p class="!font-nikosh !font-extrabold !text-[11.50px]">
                                                                    <?php
                                                                        if(!empty($_POST['fatherBrn'])){
                                                                            $f_bor_strt_splite = str_split($_POST['fatherBrn']);
                                                                            foreach ($f_bor_strt_splite as $key => $value) {
                                                                                echo $bn_digits[$value];
                                                                            }
                                                                        }
                                                                    ?>
                                                                </p>
                                                            </div>
                                                            <div class="mr-[62px] flex flex-row gap-1">
                                                                <p class="!font-nikosh !font-extrabold !text-[11.50px] capitalize">পিতার জাতীয়তাঃ</p>
                                                                <p class="!font-nikosh !font-extrabold !text-[11.50px] capitalize"><?php echo $_POST['fatherNationality'];?></p>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-row">
                                                            <p class="w-[178px] !font-nikosh !font-extrabold !text-[11.50px]">পিতার জাতীয় পরিচয়পত্র নম্বরঃ</p>
                                                            <p class="!font-nikosh !font-extrabold !text-[11.50px]">
                                                                <?php
                                                                    if(!empty($_POST['fatherNid'])){
                                                                        $f_nid_strt_splite = str_split($_POST['fatherNid']);
                                                                        foreach ($f_nid_strt_splite as $key => $value) {
                                                                            echo $bn_digits[$value];
                                                                        }
                                                                    }
                                                                ?>
                                                            </p>
                                                        </div>
                                                        <div class="flex flex-row mt-4">
                                                            <p class="w-[178px] !font-nikosh !font-extrabold capitalize !text-[11.50px]">মাতার নামঃ</p>
                                                            <p class="!font-nikosh !font-extrabold !text-[11.50px]"><?php echo $_POST['motherName'];?></p>
                                                        </div>
                                                        <div class="flex justify-between items-center">
                                                            <div class="flex flex-row">
                                                                <p class="w-[178px] !font-nikosh !font-extrabold !text-[11.50px]">মাতার জন্ম নিবন্ধন নম্বরঃ</p>
                                                                <p class="!font-nikosh !font-extrabold !text-[11.50px]">
                                                                    <?php
                                                                        if(!empty($_POST['motherBrn'])){
                                                                            $m_bor_strt_splite = str_split($_POST['motherBrn']);
                                                                            foreach ($m_bor_strt_splite as $key => $value) {
                                                                                echo $bn_digits[$value];
                                                                            }
                                                                        }
                                                                    ?>
                                                                </p>
                                                            </div>
                                                            <div class="mr-[62px] flex flex-row gap-1">
                                                                <p class="!font-nikosh !font-extrabold !text-[11.50px] capitalize">মাতার জাতীয়তাঃ</p>
                                                                <p class="!font-nikosh !font-extrabold !text-[11.50px] capitalize"><?php echo $_POST['motherNationality'];?></p>
                                                            </div>
                                                        </div>
                                                        <div class="flex flex-row">
                                                            <p class="w-[178px] !font-nikosh !font-extrabold !text-[11.50px]">মাতার জাতীয় পরিচয়পত্র নম্বরঃ</p>
                                                            <p class="!font-nikosh !font-extrabold !text-[11.50px]">
                                                                <?php
                                                                    if(!empty($_POST['motherNid'])){
                                                                        $m_nid_strt_splite = str_split($_POST['motherNid']);
                                                                        foreach ($m_nid_strt_splite as $key => $value) {
                                                                            echo $bn_digits[$value];
                                                                        }
                                                                    }
                                                                ?>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="gap-[26px] mt-[175px] flex flex-col">
                                                        <div class="w-full flex flex-row">
                                                            <div class="w-2/4 text-right !text-[11.50px] flex justify-end pr-[27px] !font-mono">
                                                                <p class="font-bold"></p>
                                                                <p class="!font-nikosh !font-extrabold">প্রস্ততকারীর স্বাক্ষর</p>
                                                                <p class="font-bold"></p>
                                                            </div>
                                                            <div class="flex items-center justify-end flex-row w-2/4 !text-[11.50px] gap-[2px] pr-[7px]">
                                                                <p class="font-bold">(</p>
                                                                <p class="!font-nikosh !font-extrabold text-right !text-[11.50px]">নিবন্ধকের স্বাক্ষর ও নামসহ সিল</p>
                                                                <p class="font-bold">)</p>
                                                            </div>
                                                        </div>
                                                        <div class="w-full flex flex-row">
                                                            <p class="!font-nikosh !font-extrabold w-[46%] text-left !text-[11.50px] pl-[9px]">নিবন্ধকের কার্যালয়ের সিলমােহর</p>
                                                            <div class="w-2/4 text-left !text-[11.50px] flex justify-start">
                                                                <p class="font-bold"></p>
                                                                <p class="!font-nikosh !font-extrabold">যাচাইকারীর নাম, স্বাক্ষর ও সিল</p>
                                                                <p class="font-bold"></p>
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
    $banglaMonths = array(
      'জানুয়ারি',
      'ফেব্রুয়ারি',
      'মার্চ',
      'এপ্রিল',
      'মে',
      'জুন',
      'জুলাই',
      'আগস্ট',
      'সেপ্টেম্বর',
      'অক্টোবর',
      'নভেম্বর',
      'ডিসেম্বর'
    );
    $banglaNumbers = array(
      "এক",
      "দুই",
      "তিন",
      "চার",
      "পাঁচ",
      "ছয়",
      "সাত",
      "আট",
      "নয়",
      "দশ",
      "এগারো",
      "বারো",
      "তেরো",
      "চৌদ্দ",
      "পনেরো",
      "ষোল",
      "সতেরো",
      "আঠারো",
      "ঊনিশ",
      "বিশ",
      "একুশ",
      "বাইশ",
      "তেইশ",
      "চব্বিশ",
      "পঁচিশ",
      "ছাব্বিশ",
      "সাতাশ",
      "আঠাশ",
      "ঊনত্রিশ",
      "ত্রিশ",
      "একত্রিশ",
      "বত্রিশ",
      "তেত্রিশ",
      "চৌত্রিশ",
      "পঁয়ত্রিশ",
      "ছত্রিশ",
      "সাইত্রিশ",
      "আটত্রিশ",
      "ঊনচল্লিশ",
      "চল্লিশ",
      "একচল্লিশ",
      "বিয়াল্লিশ",
      "তেতাল্লিশ",
      "চুয়াল্লিশ",
      "পঁয়তাল্লিশ",
      "ছেচল্লিশ",
      "সাতচল্লিশ",
      "আটচল্লিশ",
      "ঊনপঞ্চাশ",
      "পঞ্চাশ",
      "একান্ন",
      "বাহান্ন",
      "তিপ্পান্ন",
      "চুয়ান্ন",
      "পঞ্চান্ন",
      "ছাপ্পান্ন",
      "সাতান্ন",
      "আটান্ন",
      "ঊনষাট",
      "ষাট",
      "একষট্টি",
      "বাষট্টি",
      "তেষট্টি",
      "চৌষট্টি",
      "পঁয়ষট্টি",
      "ছেষট্টি",
      "সাতষট্টি",
      "আটষট্টি",
      "ঊনসত্তর",
      "সত্তর",
      "একাত্তর",
      "বাহাত্তর",
      "তিয়াত্তর",
      "চুয়াত্তর",
      "পঁচাত্তর",
      "ছিয়াত্তর",
      "সাতাত্তর",
      "আটাত্তর",
      "ঊনআশি",
      "আশি",
      "একাশি",
      "বিরাশি",
      "তিরাশি",
      "চুরাশি",
      "পঁচাশি",
      "ছিয়াশি",
      "সাতাশি",
      "অষ্টআশি",
      "ঊননব্বই",
      "নব্বই",
      "একানব্বই",
      "বিরানব্বই",
      "তিরানব্বই",
      "চুরানব্বই",
      "পঁচানব্বই",
      "ছিয়ানব্বই",
      "সাতানব্বই",
      "আটানব্বই",
      "নিরানব্বই",
      "একশো"
    );
  
    // Parse the date string into day, month, and year
    $dateParts = explode('/', $dateString);
    $day = (int)$dateParts[0];
    $month = (int)$dateParts[1];
    $year = (int)$dateParts[2];
  
    // Convert day to Bangla number
    $dayString = (string)$day;
    $banglaDay = $banglaNumbers[$dayString-1];
  
    // Convert year to Bangla words
    $yearString = (string)$year;
    $yearsDegit = str_split($yearString);
    $years_date = $yearsDegit[2].$yearsDegit[3];
    $banglaYear = "";
    if($yearString == 2000){
        $banglaYear = 'দুই হাজার';
    }else if($yearString < 2000){
      $banglaYear = 'ঊনিশশত '.$banglaNumbers[$years_date-1];
    }else{
      $banglaYear = 'দুই হাজার '.$banglaNumbers[$years_date-1];
    }
    
  
    // Convert month to Bangla name
    $banglaMonth = $banglaMonths[$month-1];
  
    // Concatenate the Bangla parts into a formatted string
    $banglaDate = $banglaDay . ' ' . $banglaMonth . ' '.$banglaYear;
  
    return $banglaDate;
  }

  function engToBnDateDigit($date) {
    $eng_digits = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    $bn_digits = array('০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯');
    $date_parts = explode('/', $date);
    $year = str_replace($eng_digits, $bn_digits, $date_parts[2]);
    $month = str_replace($eng_digits, $bn_digits, $date_parts[1]);
    $day = str_replace($eng_digits, $bn_digits, $date_parts[0]);
    $bn_date = $day.'/'.$month.'/'.$year;
    return $bn_date;
}