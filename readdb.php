<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sobiedb";

$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
    die('Could not connect: ' . mysqli_connect_error());
}

$result = mysqli_query($con, "SELECT * FROM student");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View Database</title>
    </head>
    <body>
        <!--<p>TODO: display student table here.</p>-->
        <?php
        echo "<h1>Results:</h1><hr><br>";
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "ID: " . $row["id"] . " | First Name: " . $row["fname"] . " | Last Name: " . $row["lname"] . " | Email: " . $row["email"] . "<br><br>";
            }
        } else {
            echo "No items found";
        }

        $con->close();
        ?>

        <a href="index.php">Main Menu</a>
    </body>
</html>
