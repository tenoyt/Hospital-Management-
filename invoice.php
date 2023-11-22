<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="receptionist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>

<div class="dashboard-header">
    <h2>Dashboard</h2>
</div>

<div class="container">
    <div class="flex-container">
        <div class="sidebar">
            <div class="top-button">
                <i class="fas fa-user"></i> <p>Invoice</p>
            </div>
            
            <div id="main">
                <a href="homepage.php"><i class="fas fa-arrow-left"></i> Back</a>
            </div>
        </div>

        <div class="content">
            <div class="card-container">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Create Invoice</h5>
                        <p>Create a new invoice easily and efficiently.</p>
                        <button class="btn btn-success">Click here</button>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">View Invoice</h5>
                        <p>View and manage your existing invoices.</p>
                        <button class="btn btn-success">Click here</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
