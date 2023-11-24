<!DOCTYPE html>
    <html lang="en">
    <head>
        <title> Room Details </title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="room.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
    <form action="RRoom.php" method="post">
    <div class="dashboard-header">
            <h2> Add patient room information</h2>
        </div>
    
    <div class="sidebar">
        <!-- New non-clickable and static button in the navbar -->
        <div class="top-button">
            <i class="fas fa-user"></i>  
            <p>Receptionist</p>
        </div>
    
        
        <!-- Sidebar links -->
        <div id="main">
             <a href="receptionist.php"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
        
    </div>

    <div class = "container">
        <h3 style = "justify-content: center;">Room details</h3>
        <form>
          <div class="form-group">
            <label for="formGroupExampleInput">Room ID</label>
            <input type="text" name="RID" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Bed ID</label>
            <input type="text" name="BEDID" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Patient ID</label>
            <input type="text" name="PID" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Room Number</label>
            <input type="text" name="RNO" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Room Type</label>
            <input type="text" name="RTYPE" class="form-control">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Occupancy Status</label>
            <input type="text" name="STATUS" class="form-control">
          </div>
          
        </form>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    </body>
    </html>
