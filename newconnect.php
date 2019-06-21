<?php
session_start();

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

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $pass = $_POST['pass'];
    //$lname = $_POST['lname'];
    //$email = $_POST['email'];
    //$details = $_POST['details'];
    //$opt = $_POST['opt'];

    $query = "SELECT username, pass FROM login WHERE username='$username' AND pass='$pass'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result);
    if ($row) {
        if ($row['username' == $seruname]) {
            $COOKIE_name="username";
            $COOKIE_value="$username";
            setcookie($COOKIE_name,$COOKIE_value,  time() + (86400 * 30),"/");
            $_SESSION['username'] = '$username';
            header("location:/form.php", 301);
            
        
    } 
    }
    else {
        
        header("location:/index.php", 301);
}

    }
    
?>

