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

      <form action="certificate_en.php" method="post">
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
                                        <a href="card_bn.php" style="color: #333;">বাংলা</a>
                                        <a href="" style="background: darkblue; color: #fff; padding: 2px 10px; border-radius: 7px;">ইংরেজি</a>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="first">Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Enter Name" id="name" value="" required/>
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="first">Father Name</label>
                                                <input type="text" name="fatherName" class="form-control" placeholder="Enter Father Name" id="fatherName" value="" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="first">Mother Name</label>
                                                <input type="text" name="motherName" class="form-control" placeholder="Enter Mother Name" id="motherName" value="" required />
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="last">Union / City Corporation</label>
                                                <select class="form-control" id="addresstypebn">
                                                    <option value="cityCorporation">City Corporation</option>
                                                    <option value="union">Union</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="company">Enter Address 1</label>
                                                <input type="text" class="form-control" placeholder="" id="address1" name="address1" value="zone- 4, Dhaka North City Corporation" />
                                            </div>
                                        </div>

                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="company">Enter Address 2</label>
                                                <input type="text" class="form-control" placeholder="" id="address2" name="address2" value="City Corporation: Dhaka North City Corporation" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="company">Enter Address 3</label>
                                                <input type="text" class="form-control" placeholder="" id="address3" name="address3" value="District: Dhaka, Bangladesh" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="last">Register No</label>
                                                <input type="text" name="registerNo" class="form-control" placeholder="Register No" id="registerNo" value="205" />
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="url">Date Of Issue</label>
                                                <input type="text" class="form-control datepicker hasDatepicker" name="doi" id="doi" placeholder="Enter Date Of Issue" value="<?php echo date("d/m/Y")?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="email">Date Of Registration</label>
                                                <input type="text" class="form-control datepicker hasDatepicker" id="dor" name="dor" placeholder="Enter Date Of Registration" value="<?php echo date("d/m/Y")?>" />
                                            </div>
                                        </div>

                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="url">BR Number</label>
                                                <input type="text" class="form-control" id="brNo" name="brNo" min="17" max="17" placeholder="Enter BR Number" value="" required/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="url">Date Of Birth</label>
                                                <input type="text" class="form-control datepicker hasDatepicker" id="dob" name="dob" placeholder="Enter Date Of Birth" value="01/01/2000" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="url">Order Of Child</label>
                                                <select name="ooc" id="ooc" class="form-control">
                                                    <option value="1" select>1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="url">Place of Birth</label>
                                                <input type="text" class="form-control" id="pob" name="pob" placeholder="Enter Place of Birth" value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="form-group">
                                                <label for="url">Gendar</label>

                                                <select id="gendar" name="gendar" class="form-control">
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-4">
                                            <div class="form-group">
                                                <label for="email">Permanent Address</label>
                                                <textarea class="form-control" id="fullAddress" name="fullAddress" placeholder="Enter Permanent Address" rows="2"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="first">Father NID</label>
                                                <input type="text" name="fatherNid" class="form-control" placeholder="Enter Father NID" id="fatherNid" value="" />
                                            </div>
                                        </div>
                                        <!--  col-md-6 mb-4   -->

                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="first">Father BRN</label>
                                                <input type="text" name="fatherBrn" class="form-control" placeholder="Enter Father BRN" id="fatherBrn" value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="first">Father Nationality</label>
                                                <input type="text" name="fatherNationality" class="form-control" placeholder="Enter Father Nationality" id="fatherNationality" value="  Bangladeshi " />
                                            </div>
                                        </div>
                                        <!--  col-md-6 mb-4   -->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="first">Mother NID</label>
                                                <input type="text" name="motherNid" class="form-control" placeholder="Enter Mother NID" id="motherNid" value="" />
                                            </div>
                                        </div>
                                        <!--  col-md-6 mb-4   -->

                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="first">Mother BRN</label>
                                                <input type="text" name="motherBrn" class="form-control" placeholder="Enter Mother BRN" id="motherBrn" value="" />
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label for="first">Mother Nationality</label>
                                                <input type="text" name="motherNationality" class="form-control" placeholder="Enter Mother Nationality" id="motherNationality" value=" Bangladeshi " />
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
      $('#address1').val(" zone- 4, Dhaka North City Corporation ");
      $('#address2').val(" City Corporation: Dhaka North City Corporation ");
      $('#address3').val(" District: Dhaka, Bangladesh ");
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