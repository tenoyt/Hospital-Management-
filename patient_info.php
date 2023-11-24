<!DOCTYPE html>
    <html lang="en">
    <head>
        <title> Patient Info </title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="patient_info.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
    <form action="RPatient_Info.php" method="post">
    <div class="dashboard-header">
            <h2> Add patient details</h2>
        </div>
    
    <div class="sidebar">
        <div class="top-button">
            <i class="fas fa-user"></i>  
            <p>Receptionist</p>
        </div>
    
        
        <div id="main">
       
             <a href="receptionist.php"><i class="fas fa-arrow-left"></i> Back</a>
            

        </div>
        
    </div>

    <div class = "container">
        <h3 style = "justify-content: center;">Invoice form</h3>
        <form>
          <div class="form-group">
            <label for="formGroupExampleInput2">Name</label>
            <input type="text" name="NAME" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Address</label>
            <input type="text" name="ADDRESS" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">City</label>
            <input type="text" name="CITY" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Phone No.</label>
            <input type="text" name="PHONE" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Sex</label>
            <input type="text" name="SEX" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">HCN</label>
            <input type="text" name="HCN" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Admitted Date</label>
            <input type="date" name="ADATE" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Discharge Date</label>
            <input type="date" name="DATE" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Bed ID</label>
            <input type="text" name="BEDID" class="form-control">
          </div>

          
        </form>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    </body>
    </html>
