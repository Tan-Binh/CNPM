<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../css/lienhe_style.php">
    <link rel="stylesheet" type="text/css" href="./css/slick.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="./images/title/titleLogo.png" type="image/x-icon" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>fuji nihongo</title>
    <script>
         $(document).ready(function() 
        {
        $("#tuvan").click(function() 
        {
        var name = $("#hvt").val();
        var email = $("#email").val();
        var tel= $("#tel").val();
        var e = document.getElementById("khoahoc");
        var khoahoc=e.value;
        if (name == '' || tel  == ''||email == ''||  khoahoc == "1") 
        {
        alert("Mời bạn nhập đầy đủ thông tin");
        $('#lienhe').attr('onSubmit','return false');
        } 
        else
        {
            $('#lienhe').attr('onSubmit','return true')}
        })
        $('#lienhe').attr('onSubmit','return false');
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
            <li><a href="./gioithieu.html">Giới thiệu</a></li>
            <li><a href="khoahoc.html">Khóa học</a></li>
            <li><a href="./vanHoaNhatBan.html">Văn hóa Nhật Bản</a></li>
            <li><a href="tuvan.php">Tư vấn</a></li>
            <li><a href="giaovien.html">Giáo Viên</a></li>
            <li><a href="./thithu.html">Thi thử</a></li>
        </ul>
    </nav>
    <nav class="login">
        <ul>
            <li><a href="./dangnhap.php">Đăng nhập</a></li>
            <li><a href="./dangky.php">Đăng ký</a></li>
        </ul>
    </nav>
</header>


    <section class="lienhe">
        <div class="lienhe_content">
            <form class="form_lienhe" action="../php_xuly/lienhe_xuly.php" method="POST" id="lienhe" name="lienhe">
                <h3>HÃY CÙNG CHINH PHỤC TIẾNG NHẬT</h3>
                <p class="lienlac">Hãy liên lạc với chúng tôi để nhận được tư vấn!</p>
                <br><input type="text" class="input_hvt" name="hvt" id="hvt" placeholder="Nhập họ và tên">
                <br><input type="tel" class="input_tel" name="tel" id="tel" placeholder="Nhập số điện thoại">
                <br><input type="email" class="input_email" name="email" id="email" placeholder="Nhập email">
                <br>
                <select id="khoahoc" name="khoahoc" class="input_khoahoc">
                    <option value="1" disabled selected>Chọn khóa học muốn được tư vấn</option>
                    <option value="N5">N5</option>
                    <option value="N4">N4</option>
                    <option value="N3">N3</option>
                    <option value="N2">N2</option>
                    <option value="N1">N1</option>
                </select>
                
                <br><input type="submit" value="ĐĂNG KÝ NHẬN TƯ VẤN" class="input_btn" id="tuvan" name="tuvan">
                <div id = "result" >
    <?PHP
                    $thongbao="";
                  if ( isset($_GET['success']) && $_GET['success'] == 1 )
                  {
                     $thongbao="Cảm ơn bạn đã liên hệ";
                  }
                  echo '<span style="color: #F52000; font-weight:bold;
                  padding-left:35%;font-size:20px;">'.$thongbao.'</span>';
    ?>
    
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
        <div class="dialog_overlay" id="dialog_overlay">
            <div class="dialog-body">
                <h3 id="dialog_title"></h3>
                <p id="dialog_content"></p>
            </div>
        </div>
    </footer>

</body>
</html>