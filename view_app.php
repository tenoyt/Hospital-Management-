<!DOCTYPE html>
<html lang="en">

<head>
    <title> Physician </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="view_invoice.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-3 sidebar">
            <a href="app_physician.php"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="col-lg-10 col-md-9 content">
                <div class="header">
                    <h1>View Appointments</h1>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>APPOINTMENT ID</th>
                                <th>PATIENT ID</th>
                                <th>PHYSICIAN ID</th>
                                <th>APPOINTMENT_DATE</th>
                                <th>APPOINTMENT_TYPE</th>
                                <th>APPOINTMENT_NOTE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "1234", "project");
                            if ($conn->connect_error) {
                                die("Connection Failed:" . $conn->connect_error);
                            }
                            $phyID = $_POST['PHYID'];
                            $sql = "SELECT APPOINTMENT_ID, PATIENT_ID, PHYSICIAN_ID, APPOINTMENT_DATE, APPOINTMENT_TYPE, APPOINTMENT_NOTE FROM APPOINTMENTS where PHYSICIAN_ID = '$phyID'";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["APPOINTMENT_ID"] . "</td><td>" . $row["PATIENT_ID"] . "</td><td>" . $row["PHYSICIAN_ID"] . "</td><td>" . $row["APPOINTMENT_DATE"] . "</td><td>" . $row["APPOINTMENT_TYPE"] .  "</td><td>" . $row["APPOINTMENT_NOTE"] . "</td></tr>";
                                }
                            } else {
                                echo "<tr><td colspan='6'>0 result</td></tr>";
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
