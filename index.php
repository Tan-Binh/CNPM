<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$username="";
$username = $_SESSION['username'];
?>
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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/footer.css">
    
    <link rel="stylesheet" href="./css/trangChu_style.php">
    <link rel="stylesheet" type="text/css" href="./css/slick.css">
    <link rel="icon" href="./images/title/titleLogo.png" type="image/x-icon" />
    <title>Fuji Nihongo</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<header>
        <a class="logo_header" href="./index.php">
            <img src="./images/header/logoHeader.png" alt="">
        </a>
        <nav class="content_list">
            <ul>
                <li><a href="web/gioithieu.php">Giới thiệu</a></li>
                <li><a href="web/khoahoc.php">Khóa học</a></li>
                <li><a href="web/vanHoaNhatBan.php">Văn hóa Nhật Bản</a></li>
                <li><a href="web/tuvan.php">Tư vấn</a></li>
                <li><a href="web/giaovien.php">Giáo Viên</a></li>
                <li><a href="web/thithu.php">Thi thử</a></li>
            </ul>
        </nav>
        <?php 
        error_reporting(E_ERROR | E_PARSE);
        if ($username=="")
        echo '
        <nav class="login">
            <ul>
                <li><a href="web/dangnhap.php">Đăng nhập</a></li>
                <li><a href="web/dangky.php">Đăng ký</a></li>
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
            echo "<a href='web/thongtin.php?username=".$username."'>Thông tin cá nhân</a> ";
            echo'<a href="./php_xuly/logout.php">Đăng xuất</a> 
                    </div>                     
                </li>
            </ul>
             </nav>';
        }
        ?>
    </header>
    <section class="banner">
        <img src="./images/banner/banner.png" alt="">
    </section>

    <section class="khoa_hoc">
        <div class="tieu_de">
            <img src="./images/khoa_hoc/tieu_de_khoa_hoc.png" alt="">
        </div>
        <div class="content">
            <div class="select">
                <p>
                    Khóa lẻ
                </p>
            </div>
            <div class="list">
                <div class="element">
                    <p class="level">N5</p>
                    <hr>
                    <p>Học phí:</p>
                    <p class="value">1000000VND</p>
                    <p>Thời hạn:
                    <p>
                    <p class="value">6 tháng</p>
                    <p class="btn_dang_ky"><button class="btn-more-index">Đăng ký ngay</button></p>
                    <p class="chi_tiet"><a href="web/course-2.php">>>Xem chi tiết</a></p>
                </div>
                <div class="element">
                    <p class="level">N4</p>
                    <hr>
                    <p>Học phí:</p>
                    <p class="value">1000000VND</p>
                    <p>Thời hạn:
                    <p>
                    <p class="value">6 tháng</p>
                    <p class="btn_dang_ky"><button class="btn-more-index">Đăng ký ngay</button></p>
                    <p class="chi_tiet"><a href="#">>>Xem chi tiết</a></p>
                </div>
                <div class="element">
                    <p class="level">N3</p>
                    <hr>
                    <p>Học phí:</p>
                    <p class="value">1000000VND</p>
                    <p>Thời hạn:
                    <p>
                    <p class="value">6 tháng</p>
                    <p class="btn_dang_ky"><button class="btn-more-index">Đăng ký ngay</button></p>
                    <p class="chi_tiet"><a href="#">>>Xem chi tiết</a></p>
                </div>
                <div class="element">
                    <p class="level">N2</p>
                    <hr>
                    <p>Học phí:</p>
                    <p class="value">1000000VND</p>
                    <p>Thời hạn:
                    <p>
                    <p class="value">6 tháng</p>
                    <p class="btn_dang_ky"><button class="btn-more-index">Đăng ký ngay</button></p>
                    <p class="chi_tiet"><a href="#">>>Xem chi tiết</a></p>
                </div>
                <div class="element">
                    <p class="level">N1</p>
                    <hr>
                    <p>Học phí:</p>
                    <p class="value">1000000VND</p>
                    <p>Thời hạn:
                    <p>
                    <p class="value">6 tháng</p>
                    <p class="btn_dang_ky"><button class="btn-more-index">Đăng ký ngay</button></p>
                    <p class="chi_tiet"><a href="#">>>Xem chi tiết</a></p>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="select">
                <p>
                    Khóa combo
                </p>
            </div>
            <div class="list">
                <div class="element">
                    <p class="level">N5 + N4</p>
                    <hr>
                    <p>Học phí:</p>
                    <p class="value">1000000VND</p>
                    <p>Thời hạn:
                    <p>
                    <p class="value">6 tháng</p>
                    <p class="btn_dang_ky"><button><a href="./web/course-2.html">Đăng ký ngay</a></button></p>
                    <p class="chi_tiet"><a href="#">>>Xem chi tiết</a></p>
                </div>
                <div class="element">
                    <p class="level">N4 + N3</p>
                    <hr>
                    <p>Học phí:</p>
                    <p class="value">1000000VND</p>
                    <p>Thời hạn:
                    <p>
                    <p class="value">6 tháng</p>
                    <p class="btn_dang_ky"><button><a href="./web/course-2.html">Đăng ký ngay</a></button></p>
                    <p class="chi_tiet"><a href="#">>>Xem chi tiết</a></p>
                </div>
                <div class="element">
                    <p class="level">N3 + N2</p>
                    <hr>
                    <p>Học phí:</p>
                    <p class="value">1000000VND</p>
                    <p>Thời hạn:
                    <p>
                    <p class="value">6 tháng</p>
                    <p class="btn_dang_ky"><button><a href="./web/course-2.html">Đăng ký ngay</a></button></p>
                    <p class="chi_tiet"><a href="#">>>Xem chi tiết</a></p>
                </div>
                <div class="element">
                    <p class="level">N2 + N1</p>
                    <hr>
                    <p>Học phí:</p>
                    <p class="value">1000000VND</p>
                    <p>Thời hạn:
                    <p>
                    <p class="value">6 tháng</p>
                    <p class="btn_dang_ky"><button><a href="./web/course-2.html">Đăng ký ngay</a></button></p>
                    <p class="chi_tiet"><a href="#">>>Xem chi tiết</a></p>
                </div>
                <div class="element">
                    <p class="level">N1 + kaiwa</p>
                    <hr>
                    <p>Học phí:</p>
                    <p class="value">1000000VND</p>
                    <p>Thời hạn:
                    <p>
                    <p class="value">6 tháng</p>
                    <p class="btn_dang_ky"><button><a href="./web/course-2.html">Đăng ký ngay</a></button></p>
                    <p class="chi_tiet"><a href="#">>>Xem chi tiết</a></p>
                </div>
            </div>
        </div>
    </section>
      


    <section class="trangchu_sensei">
        <div class="sensei_1">
            <img src="images/sensei/Ellipse 2.png">
            <h4>[ten sensei]</h4>
            <p>Trình độ tiếng nhật N1 JLPT</p>
            <hr class="grey_hr">
            <img src="images/sensei/Vector.png">
            <h4>3456+</h4>
            <p>Học viện tham gia</p>
            <hr class="grey_hr">
            <p>- 4 năm kinh nghiệm giảng dạy tiếng Nhật
                <br>- Đã từng sản xất hơn 300 video dạy tiếng Nhật trên youtube và livestream chữa đề/giảng dạy trên facebook
            </p>
        </div>
        <div class="sensei_2">
            <img src="images/sensei/Ellipse 2.png">
            <h4>[ten sensei]</h4>
            <p>Trình độ tiếng nhật N1 JLPT</p>
            <hr class="grey_hr">
            <img src="images/sensei/Vector.png">
            <h4>3456+</h4>
            <p>Học viện tham gia</p>
            <hr class="grey_hr">
            <p>- 4 năm kinh nghiệm giảng dạy tiếng Nhật
                <br>- Đã từng sản xất hơn 300 video dạy tiếng Nhật trên youtube và livestream chữa đề/giảng dạy trên facebook
            </p>
        </div>
        <div class="gioithieu_sensei">
            <h2 class="gioithieu_sensei_title">Đội ngũ sensei tại Fuji Nihongo</h2>
            <p class="gioithieu_sensei_content">Đội ngũ giáo viên có trình độ N2-N1 và kinh nghiệm
                2 năm giảng dạy trở lên là một nhân tố quan trọng trong
                việc tạo nên sự thành công trong chất lượng đào tạo tại FujiFuji</p>
            <nav class="gioithieu_sensei_content_btn"><a href="web/giaovien.php" class="gioithieu_sensei_anchor">Đọc thêm...</a></nav>
        </div>

    </section>

    <section class="trangchu_vanhoa">
        <h3 class="vanhoa_style">Văn hóa Nhật Bản</h3>
        <div class="vanhoatradao">
            <div class="img_vanhoa">
                <a href="./web/traDao.php"><img src="images/van_hoa/tradao.png" class="img_vanhoa_1" width="226px" height="260px" class="img_vanhoa_1"></a>
                <br><a href="./web/traDao.php" class="anchor_1">Văn hóa trà đạo </a>
            </div>
        </div>
        <div class="kimono">
            <div class="img_vanhoa">
                <a href="./web/kimono.php"><img src="images/van_hoa/kimono.png" width="226px" height="280px" class="img_vanhoa_1"></a>
                <br><a href="./web/kimono.php" class="anchor_1">Trang phục truyền thống thống Kimono </a>
            </div>
        </div>
        <div class="sumo">
            <div class="img_vanhoa">
                <a href="./web/sumo.php"><img src="images/van_hoa/sumo.png" width="226px" height="260px" class="img_vanhoa_1"></a>
                <br> <a href="./web/sumo.php" class="anchor_1 anchor_1:active">Đấu Sumo</a>
            </div>
        </div>
    </section>

    <section class="lienhe">
        <div class="lienhe_content">
            <form class="form_lienhe" action="php_xuly/lienhe_xuly.php" method="POST" id="lienhe" name="lienhe">
                <h3>HÃY CÙNG CHINH PHỤC TIẾNG NHẬT</h3>
                <p class="lienlac">Hãy liên lạc với chúng tôi để nhận được tư vấn!</p>
                <br><input type="text" class="input_hvt" name="hvt" id="hvt" placeholder="Nhập họ và tên" required>
                <br><input type="tel" class="input_tel" name="tel" id="tel" placeholder="Nhập số điện thoại" required>
                <br><input type="email" class="input_email" name="email" id="email" placeholder="Nhập email" required>
                <br>
                <select id="khoahoc" name="khoahoc" class="input_khoahoc" required>
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
            <img src="./images/footer/logoFooter.png" alt="">
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
            <a href="https://www.facebook.com/"><img src="images/footer/facebook.png" width="60px" height="60px" class="images1"></a>
            <a href="https://www.youtube.com/"><img src="images/footer/youtube.png" width="60px" height="60px" class="images1"></a>
            <a href="https://www.tiktok.com/"><img src="images/footer/tiktok.png" width="60px" height="60px" class="images1"></a>
        </div>
        <hr class="hr_footer">
        <p class="footer_copyright">Copyright © 2021 FujiNihongo. All Rights Reserved.</p>
    </footer>

    <script type="text/javascript" src="./js/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="./js/slick.min.js"></script>
    <script type="text/javascript" src="./js/trangChu.js"></script>
</body>
</html>