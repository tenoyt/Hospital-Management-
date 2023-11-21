<html>
<head>
    <title> homepage </title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
    <div class="sidebar">
            <div id="main">
                <a href="receptionist.php">Receptionist</a>
                <a href="eventOne.php">Physician</a>
                <a href="registered.php">Nurse</a>
            </div>
            <div id="bottom">
                <a href="costcentre.php">Cost Centre</a>
        </div>
    </div>
        <p id="datetime"></p>
        <script>
            var now = new Date();
            var datetime = now.toLocaleString();
            document.getElementById("datetime").innerHTML = datetime;
        </script>
    <div class='home'>
            <p>Sunshine Hospital</p>
    </div>
    <div id="announcement">
        <p>Announcements</p>
</div>
    <div class="content">
            <div class="contact-info">
                <div class="card">
                <i class="card-info far fa-envelope"></i>
                <div id="card1">
                    <ul>
                        <h1>Receptionist</h1>
                        <li> Meeting at 1:00 PM </li>
                        <li> Venue: Confrence Room </li>
                        <li> Date: November 27th, 2023 </li>
                    </ul>
                </div>
            </div>
    <div class="card">
            <i class="card-info far fa-envelope"></i>
            <div id="card2">
            <ul>
            <h1>Physician</h1>
                <li> Meeting at 3:00 PM </li>
                <li> Venue: Main Hall </li>
                <li> Date: November 26th, 2023 </li>
            </ul>
            </div>
        </div>
    <div class="card">
            <i class="card-info far fa-envelope"></i>
            <div id="card3">
            <ul>
            <h1>Nurse</h1>
                <li> Meeting at 10:00 AM </li>
                <li> Venue: Meeting Room 1 </li>
                <li> Date: November 25th, 2023 </li>
            </ul>
        </div>
    </div>
</div>
</div>
</body>
</html>