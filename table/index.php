<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>REGISTRATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    
    <style type="text/css">
    
        div > a > img {
            display: none;
        }
        
        table {
            counter-reset: row-num;
            
        }
        table tr th:first-child::before {
            counter-increment: row-num;
            content: counter(row-num);
        }

        table thead tr td {
            color: #fff;
            font-weight: bold;
        }

        [data-tag=N] {
            color: #dc3545!important;
        }

        .divDate {
            background-color: #00793f !important;
        }

        .date {
            color: #fff;
            margin: 1rem;
        }
    </style>

    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        });

    </script>

</head>
<body>
    <div class="row p-5">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                <h2> REGISTRATION </h2>
            </div>

            <div class="d-flex justify-content-end mb-3">
                <div class="divDate">
                    <p id="date" class="date"></p> 
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" id="table_id">
                    <thead>
                        <tr style="background-color: #00793f;">
                            <td scope="col">#</td>
                            <td scope="col">FIRST NAME</td>
                            <td scope="col">MIDDLE INITIAL</td>
                            <td scope="col">LAST NAME</td>
                            <td scope="col">GENDER</td>
                            <td scope="col">BIRTHDAY</td>
                            <td scope="col">ADDRESS</td>
                            <td scope="col">COUNTRY</td>
                            <td scope="col">PROVINCE</td>
                            <td scope="col">ZIP</td>
                            <td scope="col">CONTACT</td>
                            <td scope="col">EMAIL</td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
    
                        $servername = "localhost";
                        $username = "id15663107_ivanroir";
                        $password = "Ivan.Roir090493";
                        $database = "id15663107_ndap";
    
                        //$conn = mysqli_connect('localhost', 'root', '', 'westmont'); //dev
                        $conn = mysqli_connect($servername, $username, $password, $database);
    
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }


                        $sql = "SELECT * FROM registration";
                        $result = $conn->query($sql);
    
                        if($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                echo"
                                    <tr>
                                        <th scope='row'></th>
                                        <td>" . $row['first_name'] . "</td>
                                        <td>" . $row['middle_name'] . "</td>
                                        <td>" . $row['last_name'] . "</td>
                                        <td>" . $row['gender'] . "</td>
                                        <td>" . $row['birthday'] . "</td>
                                        <td>" . $row['address'] . "</td>
                                        <td>" . $row['country'] . "</td>
                                        <td>" . $row['province'] . "</td>
                                        <td>" . $row['zip'] . "</td>
                                        <td>" . $row['contact'] . "</td>
                                        <td>" . $row['email_address'] . "</td>
                                    </tr>";
                            }
                        }
                        else {
                            echo "
                                <tr>
                                    <td>Empty</td>
                                </tr>
                            ";
                        }
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

</body>
</html>