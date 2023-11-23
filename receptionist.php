<!DOCTYPE html>
<html lang="en">
<head>
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="receptionist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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
            <div class="card-container">
                <!-- Announcements Card -->
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Announcements</h5>
                        <p class="card-text">
                            <!-- Announcement Content -->
                            1. <strong>Office Closure:</strong> The office will be closed on [date] due to [reason]. We apologize for any inconvenience and appreciate your understanding.
                            <br><br>
                            2. <strong>New Policies or Procedures:</strong> We have implemented new procedures to enhance our services. Please review the updated policies on our website.
                            <br><br>
                            3. <strong>Welcome Message:</strong> Welcome to our receptionist dashboard! We are excited to serve you. If you have any questions, feel free to contact us.
                            <br><br>
                        </p>
                    </div>
                </div>

                <!-- Events Card -->
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <h5 class="card-title">Events</h5>
                        <p class="card-text">
                            <!-- Event Content -->
                            1. <strong>Upcoming Meetings:</strong> Monthly Staff Meeting - [date] at [time]. Location: [meeting room].
                            <br><br>
                            2. <strong>Training Sessions:</strong> Customer Service Training - [date] from [start time] to [end time]. All staff members are required to attend.
                            <br><br>
                            3. <strong>Celebrations and Recognitions:</strong> Employee of the Month Celebration - Join us in congratulating [employee name] on their outstanding performance.
                            <br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
