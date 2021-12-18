<?php
function alert($msg) {
    echo "<script type='text/javascript'>alert('$msg');</script>";
}
$servername = "localhost";
$username = "id17945965_demo_user";

$password = "]K_yDA{E2g}g2!qK";
$dbname = "id17945965_demo";

$conn = new mysqli($servername, $username, $password, $dbname);
IF($conn)
{
$name = $_POST['hvt'];
$tel = $_POST['tel'];
$submitemail = $_POST['email'];
$email = filter_var($submitemail, FILTER_SANITIZE_EMAIL);
$khoahoc = $_POST['khoahoc'];
$register_date = date("Y-m-d H:i:s");
$sql = " INSERT INTO lienhe (name,tel, email,Khoahoc, register_date) VALUES ('$name','$tel', '$email', '$khoahoc','$register_date')";
if (mysqli_query($conn, $sql)) 
{
  header("Location: ../web/tuvan.php?success=1");
} else 
{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
?>