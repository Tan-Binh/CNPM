<?php
header("Content-type: text/css");
$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>
* {
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
/*banner begin*/
.banner {
    width: 100%;
    margin-top: 120px;
    padding: 20px 0px;
    text-align: center;
    background: white;
}
.banner img {
    width: 90%;
}
/*banner end*/

/*Khóa học begin*/
.khoa_hoc {
    margin-bottom: 50px;
}
.khoa_hoc .tieu_de {
    text-align: center;
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
/*Khóa học end*/

/*Sensei begin*/
.trangchu_sensei
{
    
    background-image: url(../images/sensei/Đội\ ngũ\ sensei\ \(1\).png);
    width: 100%;
    height: 30%;
    margin-top: 5%;
    margin-bottom: 5%;
}
.sensei_1
{
    box-shadow: 3px 4px 5px 1px rgba(67, 130, 188, 0.56), 
                 inset 3px 4px 5px 1px rgba(67, 130, 188, 0.56);
    border-radius: 10px;
    background-color: white;
    text-align: center;
    display: inline-block;
    width:18% ;
    margin-top: 12%;
    margin-left: 18%;
    padding: 1%;
}
.sensei_2
{
    background-color: white;
    box-shadow: 3px 4px 5px 1px rgba(67, 130, 188, 0.56), 
    inset 3px 4px 5px 1px rgba(67, 130, 188, 0.56);
    border-radius: 10px;
    text-align: center;
    display: inline-block;
    width:18%;
    margin-bottom: 5%;
    vertical-align: top;
    padding: 1%;
   
}
.gioithieu_sensei
{
    margin-left: 5%;
    margin-top: 7%;
    vertical-align: top;
    display: inline-block;
    width:30%;
    font-size: 150%;
}
.gioithieu_sensei_title
{
    text-align: center;
    color:#4382BC;

}
.gioithieu_sensei_content_btn
{
    margin-top: 8%;
    text-align: center;
    font-size: 120%;
    margin-left: 15%;
    width: 48%;
    height: 26%;
    background: #FFFFFF;
    border: 3px solid #1C71AD;
    box-sizing: border-box;
    box-shadow: 2px 4px 5px rgba(0, 0, 0, 0.25);
    border-radius: 30px;
}
.gioithieu_sensei_anchor
{
    text-decoration: none;
    font-style: none;
    color: #4382BC;
}
.gioithieu_sensei_content
{
    margin-top: 10%;
}
.grey_hr
{
width:80%;
border: solid grey 10%;
background-color: grey;
}
/*Sensei end*/

/*Văn hóa begin*/
.trangchu_vanhoa
{
    font-family: Geneva, Tahoma, sans-serif;
    font-size: 18px;
    text-align: center;
    background-repeat: no-repeat,no-repeat,no-repeat,no-repeat,no-repeat,no-repeat;
    background-size: 304px 304px,166px 313px,333px 105px,207px 149px, 103px 103px,80px 80px;
    background-position:top left,bottom right,center bottom,top right 50px,bottom left,top left 50px;
    height: 518px;
}
.img_vanhoa_1
{
    border-radius: 40px; 
    border:5px #4382BC solid;
    
}
.vanhoatradao
{
    display: inline-block;
    width: 20%;
    margin-left: 1%;
}
.kimono
{
    display: inline-block;
    width: 20%;
    margin-left: 1%;
}
.sumo
{
    display: inline-block;
    width: 20%;
    margin-left: 1%;
}
.anchor_1
{
    text-decoration: none;
    color: #4382BC;
    font-weight: bolder;
}
.anchor_1:visited
{
    color: #6d7f8f;
    font-weight: bolder;
}
.vanhoa_style
{
    color: rgb(67,130,188);
    font-weight: bold;
    font-size: 40px;
    margin-bottom: 20px;
}
/*Văn hóa end*/

/*Liên hệ begin*/
.lienhe
{
    font-size: 20px;
    background-image: url(../images/lien_he/image12.png);
    background-size: cover;
<<<<<<< Updated upstream
    padding: 20px 22% 40px 22%;
=======
    margin-top:25px;
    padding: 20px 22% 60px 26%;
    padding-right:26%;
>>>>>>> Stashed changes
}
.lienhe_content
{
    width: 100%;
    margin-top: 4%;
    padding: 10px 0px;
    background-color: rgba(255, 255, 255, 0.4);
}
.form_lienhe
{  
    margin: auto 0;
    box-sizing: border-box;
}
.form_lienhe h3,
.form_lienhe p
{  
    margin-left: 15%;
}
.form_lienhe .lienlac
{
    font-style: italic;
    font-size: 15px;
}
.form_lienhe .input_hvt
{
    margin-left:15%;
    border-radius: 5px;
    border: none;
    width: 70%;
    height: 40px;
    font-size: 20px;
}
.form_lienhe .input_tel,
.form_lienhe .input_email,
.form_lienhe .input_khoahoc
{
    border-radius: 5px;
    border: none;
    margin-left:15%;
    font-size: 20px;
    width: 70%;
    margin-top:50px;
    height: 40px;
}
.form_lienhe .input_khoahoc:invalid
{
    color: gray;
}
.form_lienhe .input_btn
{
    box-shadow: 3px 3px 1px 1px grey;
    font-size: 20px;
    color: white;
    border-radius: 30px;
    background-color: #59BCC2;
    margin-left: 20%;
    width: 40%;
    height: 50px;
    margin-top:15px;
    margin-left: 25%;
}
/*Liên hệ end*/