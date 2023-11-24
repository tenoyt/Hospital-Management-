<!DOCTYPE html>
    <html lang="en">
    <head>
        <title> Appointments </title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="appointment.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
    <form action="PPatient_report.php" method="post">
    <div class="dashboard-header">
            <h2> Reports</h2>
        </div>
    
    <div class="sidebar">
        <!-- New non-clickable and static button in the navbar -->
        <div class="top-button">
            <i class="fas fa-user"></i>  
            <p> Physician</p>
        </div>
    
        
        <!-- Sidebar links -->
        <div id="main">
       
             <a href="physician.php"><i class="fas fa-arrow-left"></i> Back</a>
            

        </div>
        
    </div>

    <div class = "container">
        <h3 style = "justify-content: center;"> Generate Patient Report</h3>
        <form>
          <div class="form-group">
            <label for="formGroupExampleInput">REPORT_ID</label>
            <input type="text" name="RID" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">PATIENT_ID</label>
            <input type="text" name="PID" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">PHYSICIAN_ID</label>
            <input type="text" name="PHYID" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">REPORT_DATE</label>
            <input type="date" name="DATE" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">DIAGNOSIS</label>
            <input type="text" name="DIA" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">TREATMENT</label>
            <input type="text" name="TREAT" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">NOTE</label>
            <input type="text" name="NT" class="form-control">
          </div>
        </form>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    </body>
    </html>
