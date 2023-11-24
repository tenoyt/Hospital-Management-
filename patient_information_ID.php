<!DOCTYPE html>
<html lang="en">

<head>
    <title> Patient Information </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="patient_information_ID.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-3 sidebar">
            <a href="display_patient_information.php"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="col-lg-10 col-md-9 content">
                <div class="header">
                    <h1>Patient Information</h1>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Patient ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>City</th>
                                <th>Phone</th>
                                <th>Sex</th>
                                <th>HCN</th>
                                <th>Date Admitted</th>
                                <th>Patient Bed ID</th>
                                <th>Discharge Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "1234", "project");
                            if ($conn->connect_error) {
                                die("Connection Failed:" . $conn->connect_error);
                            }
                            $pID = $_POST['PID'];
                            $sql = "SELECT PATIENT_ID, PATIENT_NAME, PATIENT_ADDRESS, CITY_PROV_PC, TELEPHONE, SEX, HCN, DATE_ADMITTED, PATIENT_BED_ID, DISCHARGE_DATE FROM PATIENT where PATIENT_ID = '$pID'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["PATIENT_ID"] . "</td><td>" . $row["PATIENT_NAME"] . "</td><td>" . $row["PATIENT_ADDRESS"] . "</td><td>" . $row["CITY_PROV_PC"] . "</td><td>" . $row["TELEPHONE"] . "</td><td>" . $row["SEX"] . "</td><td>" . $row["HCN"] . "</td><td>" . $row["DATE_ADMITTED"] . "</td><td>" . $row["PATIENT_BED_ID"] . "</td><td>" . $row["DISCHARGE_DATE"] . "</td></tr>";
                                }
                            } else {
                                echo "<tr><td colspan='10'>0 result</td></tr>";
                            }
                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
