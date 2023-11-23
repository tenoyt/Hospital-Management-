<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="display_patient_information.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<div class="dashboard-header">
    <h2>Dashboard</h2>
</div>

<div class="container">
    <div class="flex-container">
        <div class="sidebar">
            <div class="top-button">
                <i class="fas fa-user"></i> <p> Physician </p>
            </div>
            
            <div id="main">
                <a href="physician.php"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>

        <div class="content">
            <div class="card-container">
               

                <!-- View Appointment History Card with Search -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">View Patient Information </h5>
                       
                        <p>View and manage your existing appointments.</p>
                        <br>
                        <form action="patient_information_ID.php" method="post">
                        <!-- Physician ID Input and Search Button -->
                        <div class="input-group mb-3">
                            <input type="text" name="PID" class="form-control" placeholder="Enter Patient ID" id="patientId">
                            <div class="input-group-append">
                                <a href="patient_information_ID.php" class="btn btn-success">Search</a>
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
