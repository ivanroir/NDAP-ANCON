<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>REGISTRATION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/bs-stepper.min.css" />
    <link rel="stylesheet" type="text/css" href="css/all.css" />

    <style>
        /*div > a > img {
            display: none;
        }*/
        
        body {
            background-color: rgb(184, 228, 250);
        }
        .bs-stepper-content {
            padding: 0;
        }

        .banner {
            background-color: rgb(255, 106, 0);
            height: 50px;
            width: 100%;
            margin-bottom: 20px;
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 32px;
            font-weight: bold;
        }
        .center-alignment{
            flex: 1;
            display: flex;
            justify-content: center;
        }

        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 60px;
            line-height: 60px;
        }
        .error {
            color: #FF0000;
        }
        .page1 {
            display: inline;
        }
        .page2 {
            display: none;
        }
        .page3 {
            display: none;
        }
    </style>
</head>

<body>

    <div style="display: flex; flex: 1; justify-content: center; width: 100%; height: 145px;">
        <img class="img-responsive" src="img/logo.png" style="height: auto; width: 100%;" />
    </div>
    <form method="POST" action="success.php" id="registrationForm" name="registrationForm">
        <div class="page1" id="page1">
            <div class="text-center text-white banner">
                <label>Personal Information</label>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="lastname" class="form-label ">Last Name</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" name="lastname" id="lastname" />
                            </div>
                            <div class="col-1">
                                <label id="lastname_required" style="color: red;  display: none;">*</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="firstname" class="form-label">First Name</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" name="firstname" id="firstname" />
                            </div>
                            <div class="col-1">
                                <label id="firstname_required" style="color: red;  display: none;">*</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="middlename" class="form-label">Middle Name</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" name="middlename" id="middlename" />
                            </div>
                            <div class="col-1">
                                <label id="middlename_required" style="color: red;  display: none;">*</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 ">
                        <div class="mb-3 row">
                            <div class="col-lg-8 col-4 text-end">
                                <label for="gender" class="form-label">Gender</label>
                            </div>
                            <div class="col-lg-4 col-7">
                                <select class="form-select" name="gender" id="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label class="form-label">Birthday</label>
                            </div>
                            <div class="col-3">
                                <select class="form-select" name="month" id="month">
                                    <?php for( $m=1; $m<=12; ++$m ) { 
                                        $month_label = date('F', mktime(0, 0, 0, $m, 1));
                                    ?>
                                    <option value="<?php echo $month_label; ?>"><?php echo $month_label; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-2">
                                <select class="form-select" name="day" id="day">
                                    <?php 
                                        $start_date = 1;
                                        $end_date   = 31;
                                        for( $j=$start_date; $j<=$end_date; $j++ ) {
                                            echo '<option value='.$j.'>'.$j.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                            <div class="col-3">
                                <select class="form-select" name="year" id="year">
                                    <?php 
                                        $year = date('Y');
                                        $min = $year - 100;
                                        $max = $year;
                                    for( $i=$max; $i>=$min; $i-- ) {
                                        echo '<option value='.$i.'>'.$i.'</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-1"></div>

                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="address" class="form-label">Complete Address</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" name="address" id="address" />
                            </div>
                            <div class="col-1">
                                <label id="address_required" style="color: red;  display: none;">*</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="country" class="form-label">Country</label>
                            </div>
                            <div class="col-7">
                                <select class="form-select" name="country" id="country">
                                    <?php 

                                    $country_list = array("Philippines", "United States of America", "Europe");
                                    $country = "";
                                    echo $country_list[1];
                                    
                                    for( $c=0; $c < count($country_list); $c++ ) { 
                                        $country = $country_list[$c];
                                    ?>
                                    <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="province" class="form-label">Province</label>
                            </div>
                            <div class="col-7">
                                <select class="form-select" name="province" id="province">
                                    <?php 

                                    $province_list = array("Manila", "Las Piñas", "Makati");
                                    $province = "";
                                    echo $province_list[1];
                                    
                                    for( $c=0; $c < count($province_list); $c++ ) { 
                                        $province = $province_list[$c];
                                    ?>
                                    <option value="<?php echo $province; ?>"><?php echo $province; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-1"></div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="zip" class="form-label">ZIP Code</label>
                            </div>
                            <div class="col-7">
                                <input type="number" class="form-control" name="zip" id="zip" />
                            </div>
                            <div class="col-1">                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="contact" class="form-label">Contact Number</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" name="contact" id="contact" />
                            </div>
                            <div class="col-1">
                                <label id="contact_required" style="color: red;  display: none;">*</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-3 row">
                            <div class="col-4 text-end">
                                <label for="email_address" class="form-label">Email Address</label>
                            </div>
                            <div class="col-7">
                                <input type="text" class="form-control" name="email_address" id="email_address" />
                            </div>
                            <div class="col-1">
                                <label id="email_required" style="color: red;  display: none;">*</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-primary" onclick="next('page1')">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page2" id="page2">
            <div class="text-center text-white banner">
                <label>Work Information</label>
            </div>
            <div class="form-check">
                <div class="container">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-5 mb-4" style="font-size: 24px; font-weight: bold">
                            <label>Are you a Nutritionist-Dietitian ?</label>
                        </div>
                        <div class="col-5"></div>
                        <div class="col-6 center-alignment">
                            <input class="form-check-input" type="radio" name="nutritionist" id="nutritionist-yes" value="yes" onclick="nutritionistValue()" checked>
                            <label class="form-check-label" for="Yes">Yes</label>
                        </div>
                        <div class="col-5 center-alignment">
                            <div class="mb-3 row">
                                <div class="col-12">
                                    <label>Area of Expertise:</label>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="academe" name="academe" id="academe">
                                        <label class="form-check-label" for="academe">
                                            Academe
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="clinical" name="clinical" id="clinical">
                                        <label class="form-check-label" for="clinical">
                                            Clinical
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="food-service" name="food-service" id="food-service">
                                        <label class="form-check-label" for="food-service">
                                            Food Service
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="industry" name="industry" id="industry">
                                        <label class="form-check-label" for="industry">
                                            Industry
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="health" name="health" id="health">
                                        <label class="form-check-label" for="health">
                                            Public Health
                                        </label>
                                    </div>
                                </div>                                            
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
            </div>
            <div class="form-check">
                <div class="container">
                    <div class="row">
                        <div class="col-6 center-alignment">
                            <input class="form-check-input" type="radio" name="nutritionist" id="nutritionist-no" value="no" onclick="nutritionistValue()">
                            <label class="form-check-label" for="No">No</label>
                        </div>
                        <div class="col-5">
                            <div class="mb-3 row">
                                <div class="col-12">
                                    <label for="field">Please state field of practice:</label>
                                </div>
                                <div class="col-12">
                                    <input type="text" class="form-control" name="field" id="field" disabled/>
                                </div>
                            </div>
                        </div>
                        <div class="col-1"></div>
                    </div>
                </div>
            </div>

            <div class="text-center text-white banner">
                <label>School Information</label>
            </div>

            <div class="form-check">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-5 text-center">
                            <label style="color: red; font-size: 22px; font-weight: bold">(FOR BACCALAUREATE DEGREE STUDENTS ONLY)</label>
                        </div>
                        <div class="col-12">
                            <div class="mb-3 row">
                                <div class="col-4 text-end">
                                    <label for="school" class="form-label">Name of Schools</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" class="form-control" name="school" id="school" />
                                </div>
                                <div class="col-1">
                                    <label id="school_required" style="color: red;  display: none;">*</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3 row">
                                <div class="col-4 text-end">
                                    <label for="program" class="form-label">Program</label>
                                </div>
                                <div class="col-7">
                                    <input type="text" class="form-control" name="program" id="program" />
                                </div>
                                <div class="col-1">
                                    <label id="program_required" style="color: red;  display: none;">*</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-6 text-start">
                            <button type="button" class="btn btn-primary" onclick="prev('page2')">Previous</button>
                        </div>

                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-primary" onclick="next('page2')">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="page3" id="page3">
        
            <div class="text-center text-white banner">
                <label>Payment Information</label>
            </div>

            <div class="form-check">
                <div class="container">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <label>LOCAL DELEGATES</label>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Dragon Pay" name="payment" id="dragon-pay">
                                <label class="form-check-label" for="dragon-pay">
                                    DRAGON PAY (NDAP Website)
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Bank Deposit" name="payment" id="bank-deposit">
                                <label class="form-check-label" for="bank-deposit">
                                    BANK DEPOSIT
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="PayMaya" name="payment" id="paymaya">
                                <label class="form-check-label" for="paymaya">
                                    PAYMAYA
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-check">
                <div class="container">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-10">
                            <label>INTERNATIONAL DELEGATES</label>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-9">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="Swift Code" name="payment" id="swiftcode">
                                <label class="form-check-label" for="swiftcode">
                                    SWIFTCODE
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="PayPal" name="payment" id="paypal">
                                <label class="form-check-label" for="paypal">
                                    PAYPAL
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-2"></div>
                    <div class="col-5">
                            <label for="reference" class="form-label">Please provide reference number</label>
                        </div>
                    <div class="col-5"></div>
                    <div class="col-3"></div>
                    <div class="col-9">
                        <div class="mb-3 row">
                            <div class="col-7">
                                <input type="text" class="form-control" name="reference" id="reference"/>
                            </div>
                            <div class="col-1">
                                <label id="reference_required" style="color: red;  display: none;">*</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col-6 text-start">
                            <button type="button" class="btn btn-primary" onclick="prev('page3')">Previous</button>
                        </div>
                        <div class="col-6 text-end">
                            <button type="button" class="btn btn-primary" onclick="next('submit')">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
    
    
    <!--***************-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script>
        
        function next(page){
            var lastname = firstname = middlename = address = contact = email_address = true;
            var school = program = true;
            if (page == 'page1'){
                if (!document.getElementById('lastname').value.length){
                    document.getElementById('lastname_required').style.display = "inline";
                    lastname = false;
                }
                else {
                    document.getElementById('lastname_required').style.display = "none";
                    lastname = true;
                }


                if (!document.getElementById('firstname').value.length){
                    document.getElementById('firstname_required').style.display = "inline";
                    firstname = false;
                }
                else {
                    document.getElementById('firstname_required').style.display = "none";
                    firstname = true;
                }

                
                if (!document.getElementById('middlename').value.length){
                    document.getElementById('middlename_required').style.display = "inline";
                    middlename = false;
                }
                else {
                    document.getElementById('middlename_required').style.display = "none";
                    middlename = true;
                }

                
                if (!document.getElementById('address').value.length){
                    document.getElementById('address_required').style.display = "inline";
                    address = false;
                }
                else {
                    document.getElementById('address_required').style.display = "none";
                    address = true;
                }


                if (!document.getElementById('contact').value.length){
                    document.getElementById('contact_required').style.display = "inline";
                    contact = false;
                }
                else {
                    document.getElementById('contact_required').style.display = "none";
                    contact = true;
                }


                if (!document.getElementById('email_address').value.length){
                    document.getElementById('email_required').style.display = "inline";
                    email_address = false;
                }     
                else {
                    document.getElementById('email_required').style.display = "none";
                    email_address = true;
                }


                if (lastname && firstname && middlename && address && contact && email_address) {
                    document.getElementById('page1').style.display = 'none';
                    document.getElementById('page2').style.display = 'block';
                    document.getElementById('page3').style.display = 'none';
                }
            }
            else if (page == 'page2'){
                if (!document.getElementById('school').value.length){
                    document.getElementById('school_required').style.display = "inline";
                    school = false;
                }
                else {
                    document.getElementById('school_required').style.display = "none";
                    school = true;
                }


                if (!document.getElementById('program').value.length){
                    document.getElementById('program_required').style.display = "inline";
                    program = false;
                }
                else {
                    document.getElementById('program_required').style.display = "none";
                    program = true;
                }


                if (school && program) {
                    document.getElementById('page1').style.display = 'none';
                    document.getElementById('page2').style.display = 'none';
                    document.getElementById('page3').style.display = 'block';
                }
            }
            else if (page == 'submit'){
                if (!document.getElementById('reference').value.length){
                    document.getElementById('reference_required').style.display = "inline";
                }
                else {
                    document.getElementById("registrationForm").submit();
                }
            }

        }

        function prev(page){   
            if (page == 'page2'){
                document.getElementById('page1').style.display = 'block';
                document.getElementById('page2').style.display = 'none';
                document.getElementById('page3').style.display = 'none';
            }
            if (page == 'page3'){
                document.getElementById('page1').style.display = 'none';
                document.getElementById('page2').style.display = 'block';
                document.getElementById('page3').style.display = 'none';
            }
        }
                    
        function nutritionistValue() { 
            var nutritionist = document.getElementsByName('nutritionist'); 
              
            for(i = 0; i < nutritionist.length; i++) { 
                if(nutritionist[i].checked){
                    if (nutritionist[i].value === "yes"){
                        document.getElementById('academe').disabled = false;
                        document.getElementById('clinical').disabled = false;
                        document.getElementById('food-service').disabled = false;
                        document.getElementById('industry').disabled = false;
                        document.getElementById('health').disabled = false;
                        document.getElementById('field').disabled = true;

                        document.getElementById('field').value = "";
                    }
                    else if (nutritionist[i].value === "no"){
                        document.getElementById('academe').disabled = true;
                        document.getElementById('clinical').disabled = true;
                        document.getElementById('food-service').disabled = true;
                        document.getElementById('industry').disabled = true;
                        document.getElementById('health').disabled = true;
                        document.getElementById('field').disabled = false;

                        document.getElementById('academe').checked = false;
                        document.getElementById('clinical').checked = false;
                        document.getElementById('food-service').checked = false;
                        document.getElementById('industry').checked = false;
                        document.getElementById('health').checked = false;
                    }
                }
            }
        }

        
    </script>
</body>

</html>