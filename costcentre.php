<!DOCTYPE html>
<html lang="en">

<head>
    <title> Cost Centre </title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="costcentre.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-3 sidebar">
            <a href="homepage.php"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
            <div class="col-lg-10 col-md-9 content">
                <div class="header">
                    <h1>Cost Centre</h1>
                </div>

                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NAME</th>
                                <th>DESCRIPTION</th>
                                <th>COST</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $conn = mysqli_connect("localhost", "root", "1234", "project");
                            if ($conn->connect_error) {
                                die("Connection Failed:" . $conn->connect_error);
                            }
                            $sql = "SELECT COST_CENTRE_ID, ITEM_NAME, ITEM_DESCRIPTION, ITEM_COST FROM COST_CENTRE";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["COST_CENTRE_ID"] . "</td><td>" . $row["ITEM_NAME"] . "</td><td>" . $row["ITEM_DESCRIPTION"] . "</td><td>" . $row["ITEM_COST"] . "</td></tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4'>0 result</td></tr>";
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
