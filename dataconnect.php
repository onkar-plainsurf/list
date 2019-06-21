<?php

$servername = "localhost";
$username = "root";
$password = "test123";
$dbname = "logindata";

//create connection
$conn = new mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection Failed" . $conn->connect_error);
}
echo 'connection Successfull ';

$pname = $_POST['pname'];
$mob = $_POST['mob'];
$wname = $_POST['wname'];




if (isset($_POST['submit'])) {

    
            $query = "INSERT INTO list(pname,mob,wname) VALUES('$pname','$mob','$wname')";

            if (mysqli_query($conn, $query)) {
                echo "records saved successfully";
            } else {
                echo 'not saved';
            }
            header("location:/form.php", 301);
}
?>