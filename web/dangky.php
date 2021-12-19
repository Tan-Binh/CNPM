
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" type="text/css"  href="../css/dangky_style.php">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <script>
        $(document).ready(function() 
        {
        $("#register").click(function() 
        {
        var name = $("#username").val();
        var email = $("#email").val();
        var password = $("#pwd").val();
        var cpassword = $("#cnfpwd").val();
        var tel= $("#tel").val();
        if (name == '' || email == '' || password == '' || cpassword == '' ||tel  == '') 
        {
        alert("Mời bạn nhập đầy đủ thông tin");
        $('#formID').attr('onSubmit','return false');
        } 
        else if ((password.length) < 8) 
        {
        alert("Mật khẩu phải từ 8 kí tự trở lên");
        $('#formID').attr('onSubmit','return false');
        } 
        else
        {
         if (password!=cpassword)
        {
            alert("Nhập lại mật khẩu không trùng");
            $('#formID').attr('onSubmit','return false');
        }
        else {
            $('#formID').attr('onSubmit','return true');   
        };
         }
        });
    });
    </script>
    <title>Đăng kí</title>
</head>
<body>
<header>
        <a class="logo_header" href="../index.php">
            <img src="../images/header/logoHeader.png" alt="">
        </a>
        <nav class="content_list">
            <ul>
                <li><a href="./gioithieu.php">Giới thiệu</a></li>
                <li><a href="khoahoc.php">Khóa học</a></li>
                <li><a href="./vanHoaNhatBan.php">Văn hóa Nhật Bản</a></li>
                <li><a href="tuvan.php">Tư vấn</a></li>
                <li><a href="giaovien.php">Giáo Viên</a></li>
                <li><a href="./thithu.php">Thi thử</a></li>
            </ul>
        </nav>
        <?php 
        error_reporting(E_ERROR | E_PARSE);
        if ($username=="")
        echo '
        <nav class="login">
            <ul>
                <li><a href="./dangnhap.php">Đăng nhập</a></li>
                <li><a href="./dangky.php">Đăng ký</a></li>
            </ul>
        </nav>';
        else
        {
           echo'
            <nav class="login">
            <ul>
            <li class="dropdown ">
                    <a href="#" class="dropbtn">
            ';
             echo $username;
             echo'<i class="fa fa-caret-down"></i></a>   
                    <div class="dropdown-content">';
            echo "<a href='thongtin.php?username=".$username."'>Thông tin cá nhân</a> ";
            echo'<a href="../php_xuly/logout.php">Đăng xuất</a> 
                    </div>                     
                </li>
            </ul>
             </nav>';
        }
        ?>
    </header>

    <section id="dangki">
        <div class="dangki_form">
            <form class="dangki_for"  id="formID" action="../php_xuly/dangky_xuly.php" method="Post">
                <h3 class="dangki_inline1" style="color: #318FB5;"><a class="dangki_anchor" href="dangnhap.php">Đăng nhập</a><hr class="dangnhap_hr"></h3>
                <nav class="dangki_inline"><h3 >Tạo tài khoản<hr class="dangki_hr"></h3></nav>
                <br><div class="dangki_khung"><i class="fas fa-user fa-2x icon_khung"></i><div class="vl"></div>
                    <input type="text" class="dangki_input" id="username" name="username" placeholder="Nhập tên đăng nhập " required> </div>
                    <?php if ($_GET['no']==2) echo '<p style="text-align: center;margin-top:5px;margin-left:120px;color:red; font-weight:bold"> Tài khoản đã tồn tại *</p>' ?>
                    <br><div class="dangki_khung"><i class="fas fa-envelope fa-2x icon_khung" ></i></i><div class="vl"></div>
                    <input type="email" class="dangki_input"id="username" name="email" placeholder="Nhập email " required> </div>
                    <?php if ($_GET['no']==1) echo '<p style="text-align: center;margin-top:5px;margin-left:120px;color:red; font-weight:bold"> Email đã tồn tại *</p>' ?>
                    <br><div class="dangki_khung"><i class="fas fa-phone-alt fa-2x icon_khung"></i><div class="vl"></div>
                    <input type="tel" class="dangki_input" id="tel" name="tel" placeholder="Nhập số điện thoại " required> </div>
                <br><div class="dangki_khung"><i class="fas fa-key fa-2x icon_khung"></i><div class="vl"></div>
                <input type="password" class="dangki_input"  name="pwd" id ="pwd" placeholder="Nhập mật khẩu " required> </div>
                <br><div class="dangki_khung"><i class="fas fa-key fa-2x icon_khung"></i><div class="vl"></div>
                <input type="password" class="dangki_input" id="cnfpwd"  name="confirmpwd" placeholder="Nhập lại mật khẩu " required> </div>
                <?php if ($_GET['success']==1) echo '<p style="text-align: center;margin-top:5px;margin-left:120px;color:red; font-weight:bold"> Đăng ký thành công </p>' ?>

               
                <input type="submit" value="Đăng ký" name="register" id="register" class="dangki_btn" >
                </div>
            </form>
        </div>
    </section>

    <footer>
        <div class="logo_footer">
            <img src="../images/footer/logoFooter.png" alt="">
        </div>
        <div class="Thongtin" width="500px">
            <strong><p class="title_1">THÔNG TIN LIÊN HỆ</p></strong>
            <hr class="hr_white">
            <hr class="hr_blue">
            <p> 
                <i class="far fa-envelope icon1"></i>&nbsp;<a href="mailto:fujinihongo@gmail.com" class="anchor1">fujinihongo@gmail.com</a>
                <br><br><i class="fas fa-phone-alt icon1"></i> 0382468820
                <br><br><i class="far fa-calendar-check icon1"></i> Thứ 2- Thứ 7: 8h - 15h
                <br><br><i class="fas fa-map-marker-alt icon1"></i> 720A Điện Biên Phủ, q.22, p.Bình Thạnh, TP. Hồ Chí Minh
            </p>
        </div>
        <div class="Ketnoi">
            <strong><p class="title_1">KẾT NỐI VỚI CHÚNG TÔI</p></strong>
            <hr class="hr_white">
            <hr class="hr_blue">
            <br>
            <a href="https://www.facebook.com/"><img src="../images/footer/facebook.png" width="60px" height="60px" class="images1"></a>
            <a href="https://www.youtube.com/"><img src="../images/footer/youtube.png" width="60px" height="60px" class="images1"></a>
            <a href="https://www.tiktok.com/"><img src="../images/footer/tiktok.png" width="60px" height="60px" class="images1"></a>
        </div>
        <hr class="hr_footer">
        <p class="footer_copyright">Copyright © 2021 FujiNihongo. All Rights Reserved.</p>
    </footer>
</body>
</html>