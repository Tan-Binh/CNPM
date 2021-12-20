<?php
session_start();
$username=$_SESSION['username'] ;
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
$servername = "localhost";
$usrname = "root";

$password = "100201";
$dbname = "DEMO";
$conn = new mysqli($servername, $usrname, $password, $dbname);
$sql = "UPDATE dangky SET khoahoc='N4' WHERE username='$username'";

if (mysqli_query($conn, $sql)) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}
header("Location: ../web/thongtin.php?username=".$username);
?>