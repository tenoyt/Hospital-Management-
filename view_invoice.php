<!DOCTYPE html>
<html lang="en">
<head>
    <title>Receptionist Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="receptionist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .dashboard-header {
            background-color: #343a40;
            color: #ffffff;
            padding: 15px;
            text-align: center;
        }

        .flex-container {
            display: flex;
            justify-content: space-between;
        }

        .sidebar {
            background-color: #343a40;
            color: #ffffff;
            padding: 15px;
            min-width: 200px;
            transition: min-width 0.5s;
        }

        .sidebar:hover {
            min-width: 250px;
        }

        .top-button {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        #main a {
            color: #ffffff;
            text-decoration: none;
            display: block;
            padding: 10px 0;
            transition: background-color 0.3s;
        }

        #main a:hover {
            background-color: #495057;
        }

        .content {
            flex: 1;
            padding: 15px;
        }

        .feature-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .feature-item {
            flex: 0 0 calc(33.33% - 20px);
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            margin: 10px;
            overflow: hidden;
            transition: box-shadow 0.3s;
            cursor: pointer;
        }

        .feature-item:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 2em;
            margin: 20px;
            color: #343a40;
        }

        .feature-title {
            text-align: center;
            margin: 10px 0;
            color: #343a40;
        }
    </style>
</head>
<body>

<div class="dashboard-header">
    <h2>Receptionist Dashboard</h2>
</div>

<div class="container">
    <div class="flex-container">
        <div class="sidebar">
            <div class="top-button">
                <i class="fas fa-user"></i> <p>Receptionist</p>
            </div>
            
            <div id="main">
                <a href="appointment.php">Appointment</a>
                <a href="invoice.php">Invoice</a>
                <a href="patient_info.php">Patient Info</a>
                <a href="room.php">Rooms</a>
                <a href="payment.php">Make Payment</a>
                <a href="homepage.php"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>

        <div class="content">
            <div class="feature-container">
                <div class="feature-item">
                    <i class="fas fa-calendar-alt feature-icon"></i>
                    <h4 class="feature-title">Manage Appointments</h4>
                </div>

                <div class="feature-item">
                    <i class="fas fa-file-invoice-dollar feature-icon"></i>
                    <h4 class="feature-title">Generate Invoices</h4>
                </div>

                <div class="feature-item">
                    <i class="fas fa-user-edit feature-icon"></i>
                    <h4 class="feature-title">Patient Information</h4>
                </div>

                <div class="feature-item">
                    <i class="fas fa-hospital feature-icon"></i>
                    <h4 class="feature-title">Manage Rooms</h4>
                </div>

                <div class="feature-item">
                    <i class="fas fa-money-check-alt feature-icon"></i>
                    <h4 class="feature-title">Process Payments</h4>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
