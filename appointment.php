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
            <h2>APPOINTMENTS</h2>
        </div>
    
    <div class="sidebar">
        <!-- New non-clickable and static button in the navbar -->
        <div class="top-button">
            <i class="fas fa-user"></i>  
            <p>Receptionist</p>
        </div>
    
        
        <!-- Sidebar links -->
        <div id="main">
            <a href="C:\Users\risha\Documents\Ontario Tech University\Year 3\Data_Management\Appointment.php">Appointment</a>
            <a href="eventOne.php">Invoice</a>
            <a href="registered.php">Patient Info</a>
            <a href="registered.php">Rooms</a>
            <a href="registered.php">Make Payment</a>

        </div>
        
    </div>

    <div class = "container">
        <h3 style = "justify-content: center;">Book an appointment</h3>
        <form>
          <div class="form-group">
            <label for="formGroupExampleInput">Physician ID</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Patient ID</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Input">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Date</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Type</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Input">
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