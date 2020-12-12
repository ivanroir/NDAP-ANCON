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
    </style>
</head>

<body>
    <div class="col-md-12 mt-5">
        <div id="stepper1" class="bs-stepper">
            <div class="bs-stepper-header" style="display: none;">
                <div class="step" data-target="#test-l-1">
                <button type="button" class="btn step-trigger">
                    <span class="bs-stepper-circle">1</span>
                    <span class="bs-stepper-label">First step</span>
                </button>
                </div>
                <div class="line"></div>
                <div class="step" data-target="#test-l-2">
                <button type="button" class="btn step-trigger">
                    <span class="bs-stepper-circle">2</span>
                    <span class="bs-stepper-label">Second step</span>
                </button>
                </div>
                <div class="line"></div>
                <div class="step" data-target="#test-l-3">
                <button type="button" class="btn step-trigger">
                    <span class="bs-stepper-circle">3</span>
                    <span class="bs-stepper-label">Third step</span>
                </button>
                </div>
            </div>
            <div class="bs-stepper-content">
                <form onsubmit="return false" novalidate="">
                    <div id="test-l-1" class="content">
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
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="lastname" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 row">
                                        <div class="col-4 text-end">
                                            <label for="firstname" class="form-label">First Name</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="firstname" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 row">
                                        <div class="col-4 text-end">
                                            <label for="middlename" class="form-label">Middle Name</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="middlename" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 ">
                                    <div class="mb-3 row">
                                        <div class="col-lg-8 col-4 text-end">
                                            <label for="gender" class="form-label">Gender</label>
                                        </div>
                                        <div class="col-lg-4 col-8">
                                            <select class="form-select" name="gender" id="gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-12">
                                    <div class="mb-3 row">
                                        <div class="col-4 text-end">
                                            <label for="birthday" class="form-label">Birthday</label>
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

                                <div class="col-12">
                                    <div class="mb-3 row">
                                        <div class="col-4 text-end">
                                            <label for="address" class="form-label">Complete Address</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="address" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 row">
                                        <div class="col-4 text-end">
                                            <label for="country" class="form-label">Country</label>
                                        </div>
                                        <div class="col-8">
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
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 row">
                                        <div class="col-4 text-end">
                                            <label for="province" class="form-label">Province</label>
                                        </div>
                                        <div class="col-8">
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
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 row">
                                        <div class="col-4 text-end">
                                            <label for="zip" class="form-label">ZIP Code</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="number" class="form-control" id="zip" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 row">
                                        <div class="col-4 text-end">
                                            <label for="contact" class="form-label">Contact Number</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="contact" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-3 row">
                                        <div class="col-4 text-end">
                                            <label for="email" class="form-label">Email Address</label>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="email" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <footer class="footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 text-end">
                                        <div>
                                            <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>

                    </div>
                    <div id="test-l-2" class="content">
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
                                        <input class="form-check-input" type="radio" name="nutritionist" id="Yes" value="option1" checked>
                                        <label class="form-check-label" for="Yes">Yes</label>
                                    </div>
                                    <div class="col-6 center-alignment">
                                        <div class="mb-3 row">
                                            <div class="col-12">
                                                <label>Area of Expertise:</label>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="academe">
                                                    <label class="form-check-label" for="academe">
                                                        Academe
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="clinical">
                                                    <label class="form-check-label" for="clinical">
                                                        Clinical
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="food-service">
                                                    <label class="form-check-label" for="food-service">
                                                        Food Service
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="industry">
                                                    <label class="form-check-label" for="industry">
                                                        Industry
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="health">
                                                    <label class="form-check-label" for="health">
                                                        Public Health
                                                    </label>
                                                </div>
                                            </div>                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6 center-alignment">
                                        <input class="form-check-input" type="radio" name="nutritionist" id="No" value="option2">
                                        <label class="form-check-label" for="No">No</label>
                                    </div>
                                    <div class="col-6">
                                        <div class="mb-3 row">
                                            <div class="col-12">
                                                <label for="field">Please state field of practice:</label>
                                            </div>
                                            <div class="col-12">
                                                <input type="text" class="form-control" id="field" required />
                                            </div>
                                        </div>
                                    </div>
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
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="school" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="mb-3 row">
                                            <div class="col-4 text-end">
                                                <label for="program" class="form-label">Program</label>
                                            </div>
                                            <div class="col-8">
                                                <input type="text" class="form-control" id="program" required />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <footer class="footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div>
                                            <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div>
                                            <button class="btn btn-primary" onclick="stepper1.next()">Next</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                        
                    </div>
                    <div id="test-l-3" class="content">
                        <div class="text-center text-white banner">
                            <label>Payment Information</label>
                        </div>

                        <div class="form-check">
                            <div class="container">
                                <div class="row">
                                    <div class="col-2"></div>
                                    <div class="col-5">
                                        <label>LOCAL DELEGATES</label>
                                    </div>
                                    <div class="col-5"></div>
                                    <div class="col-3"></div>
                                    <div class="col-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="local" id="dragon-pay">
                                            <label class="form-check-label" for="dragon-pay">
                                                DRAGON PAY (NDAP Website)
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="local" id="bank-deposit">
                                            <label class="form-check-label" for="bank-deposit">
                                                BANK DEPOSIT
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="local" id="paymaya">
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
                                    <div class="col-5">
                                        <label>INTERNATIONAL DELEGATES</label>
                                    </div>
                                    <div class="col-5"></div>
                                    <div class="col-3"></div>
                                    <div class="col-9">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="international" id="swiftcode">
                                            <label class="form-check-label" for="swiftcode">
                                                SWIFTCODE
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="international" id="paypal">
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
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="reference" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                        <footer class="footer">
                            <div class="container">
                                <div class="row">
                                    <div class="col-6">
                                        <div>
                                            <button class="btn btn-primary" onclick="stepper1.previous()">Previous</button>
                                        </div>
                                    </div>
                                    <div class="col-6 text-end">
                                        <div>
                                            <button class="btn btn-primary" onclick="stepper1.previous()">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </footer>

                    </div>
                </form>
            </div>
        </div>
    </div>      

    <!--***************-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/bs-stepper.min.js"></script>
    <script>
        var stepper1Node = document.querySelector('#stepper1')
        var stepper1 = new Stepper(document.querySelector('#stepper1'))

        stepper1Node.addEventListener('show.bs-stepper', function (event) {
            console.warn('show.bs-stepper', event);
        })
        stepper1Node.addEventListener('shown.bs-stepper', function (event) {
            console.warn('shown.bs-stepper', event)
        })
    </script>
</body>

</html>