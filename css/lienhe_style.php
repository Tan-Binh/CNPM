<?php
header("Content-type: text/css");
$font_family = 'Roboto, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>
/*Liên hệ begin*/
.lienhe
{
    font-size: 120%;
    background-image: url(../images/lien_he/image12.png);
    background-size: cover;
    margin-top:25px;
    padding: 20px 22% 40px 26%;
    padding-right:26%;
}
.lienhe_content
{
    width: 100%;
    margin-top: 15%;
    padding: 10px 0px;
    background-color: rgba(255, 255, 255, 0.4);
}
.form_lienhe
{  
    margin: auto 0;
    margin-left:30px;
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
    padding-left:15px;
    margin-left:15%;
    border-radius: 5px;
    border: none;
    width: 60%;
    height: 60px;
    font-size: 20px;
}
.form_lienhe .input_tel,
.form_lienhe .input_email,
.form_lienhe .input_khoahoc
{
    border:none;
    padding-left:15px;
    border-radius: 5px;
    border: none;
    margin-left:15%;
    font-size: 20px;
    width: 60%;
    margin-top:20px;
    height: 60px;
}
.form_lienhe .input_khoahoc:invalid
{
    color: gray;
}
.form_lienhe .input_btn
{
    box-shadow: 3px 3px 1px 1px grey;
    font-size: 18px;
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