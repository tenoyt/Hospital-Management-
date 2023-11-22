<!DOCTYPE html>
    <html lang="en">
    <head>
        <title> Create Invoice </title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="appointment.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
    <div class="dashboard-header">
            <h2>Invoice and Payment</h2>
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
        <h3 style = "justify-content: center;">Invoice form</h3>
        <form>
          <div class="form-group">
            <label for="formGroupExampleInput">Invoice ID</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Patient ID</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Input">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Invoice Date</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Input">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput2">Bill amount</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Input">
          </div>
          
        </form>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

    </body>
    </html>