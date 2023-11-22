<!DOCTYPE html>
    <html lang="en">
    <head>
        <title> Appointments </title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="appointment.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
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
            <label for="formGroupExampleInput">Report ID</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Patient ID</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Input">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Report Date</label>
            <input type="date" class="form-control" id="formGroupExampleInput" placeholder="Input">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Diagnosis</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Input">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Treatment</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Extra Notes</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </form>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    </body>
    </html>
