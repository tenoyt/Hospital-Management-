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
    <h2>Nurse Dashboard</h2>
</div>

<div class="container">
    <div class="flex-container">
        <div class="sidebar">
            <div class="top-button">
                <i class="fas fa-user"></i> <p>Nurse</p>
            </div>
            
            <div id="main">
                <a href="view_patient_info.php">View Patient Info </a>
                <a href="view_patient_report.php">View Patient Report</a>
                <a href="view_lab_report.php">View Lab Report</a>
                
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
                            1. <strong>Office Closure:</strong> The office will be closed on 28th November, 2023 due to Bad Weather. We apologize for any inconvenience and appreciate your understanding.
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
                            1. <strong>Upcoming Meetings:</strong> Monthly Staff Meeting - 25th November, 2023 at 11:00 AM. Location: Meeting Room 1.
                            <br><br>
                            2. <strong>Training Sessions:</strong> Customer Service Training - 24th November, 2023 from 9:00 AM to 11:00 AM. All staff members are required to attend.
                            <br><br>
                            3. <strong>Celebrations and Recognitions:</strong> Employee of the Month Celebration - Join us in congratulating Stacy on their outstanding performance.
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
