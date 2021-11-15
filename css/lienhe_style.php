<?php
header("Content-type: text/css");
$font_family = 'Arial, Helvetica, sans-serif';
$font_size = '0.7em';
$border = '1px solid';
?>
/*Liên hệ begin*/
.lienhe
{
    font-size: 20px;
    background-image: url(../images/lien_he/image12.png);
    background-size: cover;
    padding: 20px 22% 40px 22%;
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