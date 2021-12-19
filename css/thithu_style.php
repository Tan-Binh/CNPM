<?php
header("Content-type: text/css");
$font_family = 'Roboto, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>
* {
    font-family: 'Roboto','sans-serif';
    margin: 0;
    padding: 0;
}
@font-face {
    font-family: WorkSans;
    src: url(../fonts/WorkSans.ttf);
  }
html {
    font-family: WorkSans;
}
#space {
    margin-top: 120px;
}
.khoa_hoc {
    margin-bottom: 30px;
}
.khoa_hoc .tieu_de {
    padding: 50px 0;
    display: flex;
}
.khoa_hoc .tieu_de hr {
    width: 300px;
    padding: 15px 0;
    background: black;
    background-clip: content-box;
    border: none;
}
.khoa_hoc .tieu_de p {
    color: #1C71AD;
    font-size: 30px;
    font-weight: bold;
}
.khoa_hoc .content {
    height: 367px;
    background: url(../images/khoa_hoc/nen_khoa_hoc.png) center top no-repeat;
    display: flex;
}
.khoa_hoc .content .select {
    width: 20%;
    margin: 100px 0;
    background: #1C71AD;
    border-top-right-radius: 20px;
    border-bottom-right-radius: 20px;
    box-sizing: border-box;
    text-align: right;
    display: flex;
    flex-direction: column;
    justify-content: center;
}
.khoa_hoc .content .select p {
    margin: 5px 0px 5px 20% ;
    padding: 7px;
    background: white;
    border-top-left-radius: 30px;
    border-bottom-left-radius: 30px;
    box-sizing: border-box;
    color: #1C71AD;
    font-size: 27px;
    font-weight: bold;
    text-align: center;
    cursor: pointer;
}
.khoa_hoc .content .list {
    width: 65%;
    margin-top: 60px;
    padding: 5px 5%;
    display: flex;
}
.khoa_hoc .content .list .element {
    top: 30%;
    right: 30%;
    margin: 0px 20px ;
    padding: 0px 7px ;
    background: white;
    box-shadow: 0px 2px 5px gray;
    box-sizing: border-box;
    color: #666666;
    font-size: 25px;
}
.khoa_hoc .content .list .element .level {
    padding: 15px 0px;
    text-align: center;
    font-weight: bold;
}
.khoa_hoc .content .list .element .value {
    text-indent: 20px;
    color: #4382BC;
}
.khoa_hoc .content .list .element .btn_dang_ky {
    text-align: center;
    padding: 25px 0px 15px 0px;
    box-sizing: border-box;
}
.khoa_hoc .content .list .element .btn_dang_ky button {
    padding: 7px 15px;
    background: #4382BC;
    border: none;
    border-radius: 20px;
    color: white;
    font-size: 20px;
}
.khoa_hoc .content .list .element .btn_dang_ky button:hover {
    background: #0f385f;
}
.khoa_hoc .content .list .element .chi_tiet {
    text-align: center;
}
.khoa_hoc .content .list .element .chi_tiet a {
    font-size: 16px;
    text-decoration: none;
    color: #666666;
}
.khoa_hoc .content .list .element .chi_tiet a:hover {
    color: black;
    font-weight: bold;
} 
.slick-arrow {
    position: absolute;
    top: 42%;
    transform: translateY(-50%);
    width: 50px;
    height: 50px;
    background: white;
    border: none;
    border-radius: 50%;
    font-size: 30px;
    color: #1C71AD;
    z-index: 1;
}
.slick-arrow:hover {
    background: #1C71AD;
    color: white;
}
.slick-prev {
    left: 4%;
}
.slick-next {
    right: 4%;
}