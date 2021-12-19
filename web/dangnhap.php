
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/dangnhap_style.php">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <title>Đăng nhập</title>
    <script>
        $(document).ready(function() {
            $("#login").click(function() {
                var name = $("#username").val();
                var password = $("#pwd").val();
                if (name == '' || password == '') {
                    alert("Mời bạn nhập đầy đủ thông tin");
                    $('#formID').attr('onSubmit', 'return false');
                };
            });
        });
    </script>
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
    <section id="dangnhap">
        <div class="dangnhap_form">
            <form class="dangnhap_for" id="formID" action="../php_xuly/dangnhap_xuly.php" method="Post">
                <h3 class="dangnhap_inline" style="color: #318FB5;">Đăng nhập
                    <hr class="dangnhap_hr">
                </h3>
                <nav class="dangnhap_inline1">
                    <h3><a class="dangnhap_anchor" href="dangky.php">Tạo tài khoản</a>
                        <hr class="dangnhap_hr">
                    </h3>
                </nav>
                <br>
                <div class="dangnhap_khung"><i class="fas fa-user fa-2x icon_khung"></i>
                    <div class="vl"></div>
                    <input type="text" class="dangnhap_input" id="username" name="username" placeholder="Nhập tên đăng nhập hoặc email">
                </div>
                <br>
                <div class="dangnhap_khung"><i class="fas fa-key fa-2x icon_khung"></i>
                    <div class="vl"></div>
                    <input type="password" class="dangnhap_input" name="pwd" id="pwd" placeholder="Nhập mật khẩu ">
                    <br>
                    <?php if ($_GET['success']==2) echo '<p style="text-align: center;margin-top:5px;margin-left:120px;color:red; font-weight:bold"> Tài khoản hoặc mật khẩu sai *</p>' ;

                    ?>
                  
                </div>
                <br>
                    <br>
                <div class="remember">
                    <input type="checkbox" name="Ghi nhớ đăng nhập" id="remember" value="1">
                    <label class="dangnhap_ghinho">Ghi nhớ đăng nhập</label>
                    <a class="dangnhap_quenmatkhau" href="">Quên mật khẩu</a>
                    <input type="submit" class="dangnhap_btn" value="Đăng nhập" name="login" id="login">
                 
                </div>

            </form>
        </div>
    </section>

    <footer>
        <div class="logo_footer">
            <img src="../images/footer/logoFooter.png" alt="">
        </div>
        <div class="Thongtin" width="500px">
            <strong>
                <p class="title_1">THÔNG TIN LIÊN HỆ</p>
            </strong>
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
            <strong>
                <p class="title_1">KẾT NỐI VỚI CHÚNG TÔI</p>
            </strong>
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