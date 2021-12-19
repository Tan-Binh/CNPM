<?php
session_start();
$username="";
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/footer.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../css/giaovien.css">
    <link rel="icon" href="../images/title/titleLogo.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <title>Đội ngũ giáo viên</title>
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

    <main class="grid">
        <div class="giaovien-banner">
            <img src="../images/giaovien/banner.png" alt="banner giao vien">
        </div>
        <p class="chamngon">
            “Nếu bạn không thể giải thích vấn đề một cách đơn giản, thì bạn không hiểu điều đó đủ kỹ càng”<br>- Albert Einstein -
        </p>
        <p>
            Đó cũng chính là <strong>Châm Ngôn Giảng Dạy </strong>của đội ngũ giảng viên/giáo viên tại <strong>Fuji</strong>.
        </p>
        <div class="list-gv">
            <div class="gv-items">
                <img src="../images/giaovien/giaovien1.png" alt="gv1">
                <p>
                    <strong>Quao sensei</strong><br> Trình độ tiếng Nhật N1 JLPT<br> email: quaofuji@gmai.com
                </p>
                <hr>
                <div class="sl-hv">
                    <img src="../images/giaovien/icon_hocvien.png" alt='icon hv'>
                    <p>3456+ Học viên tham gia </p>
                </div>
                <hr>
                <ul>
                    <li>Cử nhân Luật Đại học Aomori Chuo.</li>
                    <li>Học bổng toàn phần của Tập đoàn Tokyo Marine cho hệ thạc sĩ KHTT Đại học Quốc gia Nagoya.</li>
                    <li>Giám đốc dự án Yoshi EJU, PGD CTCP Fuji.</li>
                </ul>
            </div>
            
            <div class="gv-items">
                <img src="../images/giaovien/giaovien1.png" alt="gv1">
                <p>
                    <strong>Quao sensei</strong><br> Trình độ tiếng Nhật N1 JLPT <br>email: quaofuji@gmai.com
                </p>
                <hr>
                <div class="sl-hv">
                    <img src="../images/giaovien/icon_hocvien.png" alt='icon hv'>
                    <p>3456+ Học viên tham gia </p>
                </div>
                <hr>
                <ul>
                    <li>Cử nhân Luật Đại học Aomori Chuo.</li>
                    <li>Học bổng toàn phần của Tập đoàn Tokyo Marine cho hệ thạc sĩ KHTT Đại học Quốc gia Nagoya.</li>
                    <li>Giám đốc dự án Yoshi EJU, PGD CTCP Fuji.</li>
                </ul>
            </div>
    
            <div class="gv-items">
                <img src="../images/giaovien/giaovien1.png" alt="gv1">
                <p>
                    <strong>Quao sensei</strong><br> Trình độ tiếng Nhật N1 JLPT <br>email: quaofuji@gmai.com
                </p>
                <hr>
                <div class="sl-hv">
                    <img src="../images/giaovien/icon_hocvien.png" alt='icon hv'>
                    <p>3456+ Học viên tham gia </p>
                </div>
                <hr>
                <ul>
                    <li>Cử nhân Luật Đại học Aomori Chuo.</li>
                    <li>Học bổng toàn phần của Tập đoàn Tokyo Marine cho hệ thạc sĩ KHTT Đại học Quốc gia Nagoya.</li>
                    <li>Giám đốc dự án Yoshi EJU, PGD CTCP Fuji.</li>
                </ul>
            </div>
    
            <div class="gv-items">
                <img src="../images/giaovien/giaovien1.png" alt="gv1">
                <p>
                    <strong>Quao sensei</strong><br> Trình độ tiếng Nhật N1 JLPT <br>email: quaofuji@gmai.com
                </p>
                <hr>
                <div class="sl-hv">
                    <img src="../images/giaovien/icon_hocvien.png" alt='icon hv'>
                    <p>3456+ Học viên tham gia </p>
                </div>
                <hr>
                <ul>
                    <li>Cử nhân Luật Đại học Aomori Chuo.</li>
                    <li>Học bổng toàn phần của Tập đoàn Tokyo Marine cho hệ thạc sĩ KHTT Đại học Quốc gia Nagoya.</li>
                    <li>Giám đốc dự án Yoshi EJU, PGD CTCP Fuji.</li>
                </ul>
            </div>
        </div>
    </main>

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