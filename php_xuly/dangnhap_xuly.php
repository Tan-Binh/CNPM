<?php
$servername = "localhost";
$username = "root";
$password = "100201";
$dbname = "DEMO";

$conn = new mysqli($servername, $username, $password, $dbname);

    if (isset($_POST['username'])){
	$username = $_POST['username'];
	$password = md5($_POST['pwd']);
    $result=mysqli_query($conn,"SELECT * FROM dangky where username='$username' and password = '$password'");
    if (mysqli_num_rows($result)==0)
    {
    echo "Nhập sai username hoặc mật khẩu";
    }
    else
    {
        if(!empty($_POST["remember"])) {
            setcookie ("member_login",$_POST["member_name"],time()+ 600,"/");
        }
        session_start();
				   $_SESSION['name'] = $user;
						// Redirect user to index.php
				   header("Location: ../index.html");
    }
}
?>