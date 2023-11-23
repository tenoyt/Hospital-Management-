<!DOCTYPE html>
    <html lang="en">
    <head>
        <title> Appointments </title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="appointment.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
    <form action="RAppointment.php" method="post">
    <div class="dashboard-header">
            <h2>APPOINTMENTS</h2>
        </div>
    
    <div class="sidebar">
        <!-- New non-clickable and static button in the navbar -->
        <div class="top-button">
            <i class="fas fa-user"></i>  
            <p> Physician </p>
        </div>
    
        
        <!-- Sidebar links -->
        <div id="main">
       
             <a href="app_physician.php"><i class="fas fa-arrow-left"></i> Back</a>
            

        </div>
        
    </div>

    <div class = "container">
        <h3 style = "justify-content: center;">Book an appointment</h3>
        <form>
        <div class="form-group">
            <label for="formGroupExampleInput">Physician ID</label>
            <input type="text" name="PHYID" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Patient ID</label>
            <input type="text" name="PATID" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Date</label>
            <input type="date" name="DATE" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Type</label>
            <input type="text" name="TYPE" class="form-control">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Extra Notes</label>
            <input type="text" name="NOTE" class="form-control">
          </div>
        </form>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    </body>
    </html>
