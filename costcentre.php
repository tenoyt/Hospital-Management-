<html>
<head>
    <title> Cost Centre </title>
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="costcentre.css">
</head>
<body>
    <div id="main">
        <p> Cost Centre </p>
</div>
    <table>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>DESCRIPTION</th>
            <th>COST</th>
        </tr>
        <?php
        $conn = mysqli_connect("localhost","root","1234","project");
        if ($conn-> connect_error) {
            die("Connection Failed:". $conn-> connect_error);
        }
        $sql = "select COST_CENTRE_ID, ITEM_NAME, ITEM_DESCRIPTION, ITEM_COST from COST_CENTRE";
        $result = $conn-> query($sql);
        if ($result-> num_rows > 0) {
            while ($row = $result-> fetch_assoc()) {
                echo "<tr><td>". $row["COST_CENTRE_ID"] ."</td><td>". $row["ITEM_NAME"] ."</td><td>". $row["ITEM_DESCRIPTION"] ."</td><td>" .$row["ITEM_COST"] ."</td></tr>";
            }
            echo "</table>";
        }
        else{
            echo "0 result";
        }
        $conn-> close();
        ?>
    </table>
    <div class="sidebar">
    <a href="homepage.php">Home</a>
    </div>
</body>
</html>
