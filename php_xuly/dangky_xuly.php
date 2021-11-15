<?php
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
$servername = "localhost";
$username = "root";

$password = "100201";
$dbname = "DEMO";

$conn = new mysqli($servername, $username, $password, $dbname);

IF($conn)
{

$username = $_POST['username'];
$tel = $_POST['tel'];
$submitemail = $_POST['email'];
	// Remove all illegal characters from email
$email = filter_var($submitemail, FILTER_SANITIZE_EMAIL);
$password = md5($_POST['pwd']);
$register_date = date("Y-m-d H:i:s");
if (mysqli_num_rows(mysqli_query($conn,"SELECT * FROM dangky WHERE email='$email'"))>0)
{
echo "Đã tồn tại email";
}
else
{
if (mysqli_num_rows(mysqli_query($conn,"SELECT * FROM dangky WHERE username='$username'"))>0)
{
echo "Đã tồn tại tài khoản";
}
else
{
  $sql = " INSERT INTO dangky (username,tel, email, password, register_date) VALUES ('$username','$tel', '$email', '$password','$register_date')";
  if (mysqli_query($conn, $sql)) 
  {
    echo "New record created successfully";
  } else 
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
}
}
?>