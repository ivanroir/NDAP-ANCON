<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Success</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <style>
        /*div > a > img {
            display: none;
        }*/
        
        body {
            background-color: rgb(184, 228, 250);
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
    </style>


</head>
<body>

    <div style="display: flex; flex: 1; justify-content: center; width: 100%; height: 145px;">
        <img class="img-responsive" src="img/logo.png" style="height: auto; width: 100%;" />
    </div>

    <div style="display: flex; flex: 1; justify-content: center; width: 100%; height: auto;">
        <img class="img-responsive" src="img/congrats.png" />
    </div>

    <?php
        $lastname = isset($_POST["lastname"]) ? $_POST["lastname"] : ""  ;
        $firstname = isset($_POST["firstname"]) ? $_POST["firstname"] : ""  ;
        $middlename = isset($_POST["middlename"]) ? $_POST["middlename"] : ""  ;
        $gender = isset($_POST["gender"]) ? $_POST["gender"] : ""  ;
        $month = isset($_POST["month"]) ? $_POST["month"] : ""  ;
        $day = isset($_POST["day"]) ? $_POST["day"] : ""  ;
        $year = isset($_POST["year"]) ? $_POST["year"] : ""  ;
        $birthday = $month . " " . $day . "," . $year;
        $address = isset($_POST["address"]) ? $_POST["address"] : ""  ;
        $country = isset($_POST["country"]) ? $_POST["country"] : ""  ;
        $province = isset($_POST["province"]) ? $_POST["province"] : ""  ;
        $zip = isset($_POST["zip"]) ? $_POST["zip"] : ""  ;
        $contact = isset($_POST["contact"]) ? $_POST["contact"] : ""  ;
        $email_address = isset($_POST["email_address"]) ? $_POST["email_address"] : ""  ;
        $academe = isset($_POST["academe"]) ? $_POST["academe"] : ""  ;
        $clinical = isset($_POST["clinical"]) ? $_POST["clinical"] : ""  ;
        $food_service = isset($_POST["food-service"]) ? $_POST["food-service"] : ""  ;
        $industry = isset($_POST["industry"]) ? $_POST["industry"] : ""  ;
        $health = isset($_POST["health"]) ? $_POST["health"] : ""  ;
        $field = isset($_POST["field"]) ? $_POST["field"] : ""  ;
        $school = isset($_POST["school"]) ? $_POST["school"] : ""  ;
        $program = isset($_POST["program"]) ? $_POST["program"] : ""  ;
        $payment = isset($_POST["payment"]) ? $_POST["payment"] : ""  ;
        $reference = isset($_POST["reference"]) ? $_POST["reference"] : ""  ;

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "ndap";

        $conn = mysqli_connect($servername, $username, $password, $database);
        
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $SELECT = "SELECT email_address FROM registration WHERE email_address = '" . $email_address . "' Limit 1";
        $result = $conn->query($SELECT);
        

        if($result->num_rows > 0) {
            echo "<script>";
            echo "var result = confirm('Email Already Registered');";
            echo "if (result) { window.history.back(); }";
            echo "else { window.history.back(); }";
            echo "</script>";
        } else {
            $INSERT = "INSERT INTO registration (first_name, middle_name, last_name, gender, birthday, address, country, province, zip, contact, email_address, academe, clinical, food_service, industry, health, field, school, program, payment, reference_number) 
            VALUES ('" . $firstname . "', '" . $middlename . "', '" . $lastname . "','" . $gender . "', '" . $birthday . "', '" . $address ."', '" . $country ."', 
            '" . $province . "','" .  $zip . "', '" . $contact . "', '" . $email_address . "', '" . $academe . "', '" . $clinical . "','" .  $food_service . "',
            '" .  $industry . "', '" . $health . "','" .  $field . "','" .  $school . "','" .  $program . "', '" . $payment . "', '" . $reference . "')";

            if ($conn->query($INSERT) === TRUE) {
                echo "success";
            } else {
                echo "Error: " . $INSERT . "<br>" . $conn->error;
            }

        }
        $conn->close();
    ?>

</body>
</html>
