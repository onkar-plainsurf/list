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

$sql = "delete FROM list WHERE id = '$_GET[id]'";

if(mysqli_query($conn, $sql)){
    header("refresh:1;url=list.php");
}

else{
    echo"not deleted";
}

?>

