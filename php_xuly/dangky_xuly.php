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
if (mysqli_num_rows(mysqli_query($conn,"SELECT * FROM dangky WHERE username='$username'"))>0)
{
  header("Location: ../web/dangky.php?username_found=1");
}
else
{
if (mysqli_num_rows(mysqli_query($conn,"SELECT * FROM dangky WHERE email='$email'"))>0)
{
  header("Location: ../web/dangky.php?email_found=1");
}
else
{
  $sql = " INSERT INTO dangky (username,tel, email, password, register_date) VALUES ('$username','$tel', '$email', '$password','$register_date')";
  if (mysqli_query($conn, $sql)) 
  {
    header("Location: ../web/dangnky.php?success=1");
  } else 
  {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
}
}
}
?>