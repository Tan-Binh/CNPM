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
    <title>Đăng nhập</title>
    <script>
        $(document).ready(function() 
        {
        $("#login").click(function() 
        {
        var name = $("#username").val();
        var password = $("#pwd").val();
        if (name == '' || password == '') 
        {
        alert("Mời bạn nhập đầy đủ thông tin");
        $('#formID').attr('onSubmit','return false');
        } ;
        });
        });
    </script> 
</head>
<body>
    <header>
        <a class="logo_header" href="../index.html">
            <img src="../images/header/logoHeader.png" alt="">
        </a>
        <nav class="content_list">
            <ul>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Khóa học</a></li>
                <li><a href="../web/vanHoaNhatBan.html">Văn hóa Nhật Bản</a></li>
                <li><a href="#">Tư vấn</a></li>
                <li><a href="#">Tài liệu</a></li>
                <li><a href="#">Thi thử</a></li>
            </ul>
        </nav>
        <nav class="login">
            <ul>
                <li><a href="dangnhap.html">Đăng nhập</a></li>
                <li><a href="dangky.php">Đăng kí</a></li>
            </ul>
        </nav>
    
    </header>
    
    <section id="dangnhap">
        <div class="dangnhap_form">
            <form class="dangnhap_for"  id="formID" action="../php_xuly/dangnhap_xuly.php" method="Post">
                <h3 class="dangnhap_inline" style="color: #318FB5;">Đăng nhập<hr class="dangnhap_hr"></h3>
                <nav class="dangnhap_inline1"><h3 ><a class="dangnhap_anchor" href="dangky.php">Tạo tài khoản</a><hr class="dangnhap_hr"></h3></nav>
                <br><div class="dangnhap_khung"><i class="fas fa-user fa-2x icon_khung"></i><div class="vl"></div>
                <input type="text" class="dangnhap_input" id="username" name="username" placeholder="Nhập tên đăng nhập hoặc email"></div>
                <br><div class="dangnhap_khung"><i class="fas fa-key fa-2x icon_khung"></i><div class="vl"></div>
                <input type="password" class="dangnhap_input" name="pwd" id ="pwd" placeholder="Nhập mật khẩu "> </div>
                <div class="remember">
                    <input type="checkbox"  name="Ghi nhớ đăng nhập"  id="remember" value="1" >
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