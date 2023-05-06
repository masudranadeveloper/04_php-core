<?php
session_start();
if (strlen($_SESSION['uid']) == "") {
  header('location:logout.php');
} else {
?>

  <?php
  $user_id = $_SESSION['uid'];
  include_once('function.php');
  include_once('includes/charge.php');
  //for qr code library 
  $obj = new DB_con();
  $fetchdata = new DB_con();
  $diff = $obj->get_balance($user_id);


  ?>
  <?php include('includes/head.php');
  ?>

  <main id="main" class="main">
    <section class="section">

      <form action="certificate_bn.php" method="post">
        <div id="app">
            <div class="main-wrapper main-wrapper-1">
                <div class="main-content" style="min-height: 530px;">
                    <section class="bg-diffrent">
                        <div class="container">
                            <form id="submitalldatafornid">
                                <input type="hidden" name="_token" value="rpsJN6gQvq5maoTkEKfBBvwf0XOwjTrfysAQVDXh" /> <input type="hidden" name="created_by" value="Rahul Mia" />
                                <input type="text" name="lang" value="bn" style="display: none;" />

                                <div id="formdata">
                                    <h3 style="text-align: center; border: 1px solid darkblue; padding: 18px 5px; font-size: 22px; min-width: 285px; margin: 5px; margin-bottom: 32px; border-radius: 10px; background: darkblue; color: #fff;">
                                        সঠিক তথ্য সাবমিট করুন পিডিএপ ডাউনলোড করার জন্য
                                    </h3>
                                    <div style="display: flex; width: 300px; justify-content: space-between; align-items: center; border: 1px solid gray; padding: 5px; margin-bottom: 20px; border-radius: 5px;">
                                        <p style="margin: 0;">ভাষা সিলেক্ট করুন:</p>
                                        <a href="" style="background: darkblue; color: #fff; padding: 2px 10px; border-radius: 7px;">বাংলা</a>
                                        <a href="card_en.php" style="color: #333;">ইংরেজি</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="first">নাম</label>
                                                <input type="text" name="name" class="form-control" placeholder="নাম" id="name" value="" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="first">পিতার নাম</label>
                                                <input type="text" name="fatherName" class="form-control" placeholder="পিতার নাম" id="fatherName" value="" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="first">মাতার নাম</label>
                                                <input type="text" name="motherName" class="form-control" placeholder="মাতার নাম" id="motherName" value="" required />
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="last">ইউনিয়ন / সিটি কর্পোরেশন</label>
                                                <select class="form-control" id="addresstypebn">
                                                    <option value="cityCorporation">সিটি কর্পোরেশন</option>
                                                    <option value="union">ইউনিয়ন</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="company">ঠিকানা ১</label>
                                                <input type="text" class="form-control" placeholder="ঠিকানা ১" id="address1" name="address1" value=" অঞ্চল - ৪, ঢাকা উত্তর সিটি কর্পোরেশন " />
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="company">ঠিকানা ২</label>
                                                <input type="text" class="form-control" placeholder="ঠিকানা ২ (City Corporation)" id="address2" name="address2" value=" সিটি কর্পোরেশন; ঢাকা উত্তর সিটি কর্পোরেশন " />
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="company">ঠিকানা ৩</label>
                                                <input type="text" class="form-control" placeholder="ঠিকানা ৩ (District)" id="address3" name="address3" value=" জেলা: ঢাকা, বাংলাদেশ । " />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="last">নিবন্ধন বহি নম্বর</label>
                                                <input type="text" name="registerNo" class="form-control" placeholder="নিবন্ধন বহি নম্বর" id="registerNo" value="205" />
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="url">সনদ প্রদানের তারিখ</label>
                                                <input type="text" class="form-control datepicker hasDatepicker" name="doi" id="doi" placeholder="সনদ প্রদানের তারিখ" value="<?php echo date("d/m/Y")?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="email">নিবন্ধনের তারিখ</label>
                                                <input type="text" class="form-control datepicker hasDatepicker" id="dor" name="dor" placeholder="নিবন্ধনের তারিখ" value="<?php echo date("d/m/Y")?>" />
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="url">জন্ম নিবন্ধন নাম্বার</label>
                                                <input type="text" class="form-control" id="brNo" name="brNo" min="17" max="17" placeholder="জন্ম নিবন্ধন নাম্বার" value="" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="url">জন্ম তারিখ</label>
                                                <input type="text" class="form-control datepicker hasDatepicker" id="dob" name="dob" placeholder="জন্ম তারিখ" value="01/01/2000" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="url">সন্তানের ক্রম</label>
                                                <input type="text" class="form-control" id="ooc" name="ooc" placeholder="সন্তানের ক্রম" value="" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="url">জন্মস্থান</label>
                                                <input type="text" class="form-control" id="pob" name="pob" placeholder="জন্মস্থান" value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="url">লিঙ্গ</label>

                                                <select id="gendar" name="gendar" class="form-control">
                                                    <option value="পুরুষ">পুরুষ</option>
                                                    <option value="নারী">নারী</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div class="form-group">
                                                <label for="email">স্থায়ী ঠিকানা</label>
                                                <textarea class="form-control" id="fullAddress" name="fullAddress" placeholder="স্থায়ী ঠিকানা" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="first">পিতার জাতীয় পরিচয়পত্র নম্বর</label>
                                                <input type="text" name="fatherNid" class="form-control" placeholder="পিতার জাতীয় পরিচয়পত্র নম্বর" id="fatherNid" value="" />
                                            </div>
                                        </div>
                                        <!--  col-md-6 mb-4   -->

                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="first">পিতার জন্ম নিবন্ধন নম্বর</label>
                                                <input type="text" name="fatherBrn" class="form-control" placeholder="পিতার জন্ম নিবন্ধন নম্বর" id="fatherBrn" value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="first">পিতার জাতীয়তা</label>
                                                <input type="text" name="fatherNationality" class="form-control" placeholder="পিতার জাতীয়তা" id="fatherNationality" value=" বাংলাদেশী " />
                                            </div>
                                        </div>
                                        <!--  col-md-6 mb-4   -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="first">মাতার জাতীয় পরিচয়পত্র নম্বর</label>
                                                <input type="text" name="motherNid" class="form-control" placeholder="মাতার জাতীয় পরিচয়পত্র নম্বর" id="motherNid" value="" />
                                            </div>
                                        </div>
                                        <!--  col-md-6 mb-4   -->

                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="first">মাতার জন্ম নিবন্ধন নম্বর</label>
                                                <input type="text" name="motherBrn" class="form-control" placeholder="মাতার জন্ম নিবন্ধন নম্বর" id="motherBrn" value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="first">মাতার জাতীয়তা</label>
                                                <input type="text" name="motherNationality" class="form-control" placeholder="মাতার জাতীয়তা" id="motherNationality" value=" বাংলাদেশী " />
                                            </div>
                                        </div>
                                        <!--  col-md-6 mb-4   -->
                                    </div>

                                    <div style="display: flex; justify-content: center; margin-bottom: 50px;">
                                      <?php
                                        if($diff > $charge){
                                          ?>
                                            <div class="btn btn-success" id="submit">ডাউনলোড করুন পিডিএপ</div>
                                            <button class="btn btn-primary" style="display: none;" id="next_page" type="submit"></button>
                                          <?php
                                        }else{
                                          ?>
                                            <a href="recharge.php" class="btn btn-danger" type="submit">Recharge For Create</a>
                                          <?php
                                        }
                                      ?>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
      </form>

    </section>
</main>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $('select#addresstypebn').change(function(){
    if($('select#addresstypebn').val() == "cityCorporation"){
      $('#address1').val("অঞ্চল - ৪, ঢাকা উত্তর সিটি কর্পোরেশন");
      $('#address2').val("সিটি কর্পোরেশন; ঢাকা উত্তর সিটি কর্পোরেশন");
      $('#address3').val("জেলা: ঢাকা, বাংলাদেশ");
    }else{
      $('#address1').val("শৌলমারী ইউনিয়ন পরিষদ");
      $('#address2').val("উপজেলা: রৌমারী");
      $('#address3').val("জেলা: কুড়িগ্রাম, বাংলাদেশ");
    }
  });
</script>




<script>
    $('#submit').click(function(){
        $('#submit').html('Loadding...');
        if($('#name').val() == ""|| $('#fatherName').val() == ""|| $('#motherName').val() == ""|| $('#brNo').val() == ""){
            $('#next_page').click();
            $('#submit').html('Try Again');
            return false;
        }
        
        $.ajax({
            "url" : "certificate_charge.php",
            "method" : "POST",
            success:function(){
            $('#next_page').click();
            $('#submit').html('PROCCESSING...');
            }
        })
    });
</script>

<?php include('includes/footer.php');} ?>