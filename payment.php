<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>
<body>

    
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
<div class="payment-container">
    <h2>Payment Information</h2>
    <form action="#" method="post">
        <label for="cardNumber">Payment ID:</label>
        <input type="text" id="cardNumber" name="cardNumber" placeholder="Payment ID" required>

        <label for="cardNumber">Invoice ID:</label>
        <input type="text" id="cardNumber" name="cardNumber" placeholder="Invoice ID" required>

        <label for="expiryDate">Payment Date:</label>
        <input type="date" id="expiryDate" name="expiryDate" placeholder="MM/YYYY" required>

        <label for="cvv">Amount Due:</label>
        <input type="text" id="cvv" name="cvv" placeholder="CAD" required>

        <label for="cardHolder">Amount Paid:</label>
        <input type="text" id="cardHolder" name="cardHolder" placeholder="CAD" required>

        <label for="cardHolder">Payment Method:</label>
        <input type="text" id="cardHolder" name="cardHolder" placeholder="Payment Method" required>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
