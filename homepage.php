<!DOCTYPE html>
<html lang="en">

<head>
    <title>Homepage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <a class="weatherwidget-io" href="https://forecast7.com/en/43d90n78d87/oshawa/" data-label_1="OSHAWA"
        data-label_2="WEATHER" data-icons="Climacons Animated" data-mode="Current" data-days="3" data-theme="kiwi">OSHAWA
        WEATHER</a>
    <script>
        !function (d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (!d.getElementById(id)) { js = d.createElement(s); js.id = id; js.src = 'https://weatherwidget.io/js/widget.min.js'; fjs.parentNode.insertBefore(js, fjs); } }(document, 'script', 'weatherwidget-io-js');
    </script>

    <div class="content">
        <div class="flex-container">
            <div class="sidebar">
                <div class="top-button">
                    <i class="fas fa-user"></i> <p> Users </p>
                </div>
                <div id="main">
                    <a href="receptionist.php"> Receptionist</a>
                    <a href="physician.php"> Physician</a>
                    <a href="nurse.php"> Nurse </a>
                    <a href="costcentre.php"> Cost Centre </a>
                </div>
            </div>
            <div class="main">
                <p class="aesthetic-text">Welcome to the Sunshine Hospital !</p>
                <p class="sub-text">Efficiently managing healthcare services with our state-of-the-art system.</p>
            </div>
        </div>
    </div>

</body>

</html>
