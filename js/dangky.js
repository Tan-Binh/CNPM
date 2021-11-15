$(document).ready(function() 
{
    $("#register").click(function() 
{
var name = $("#username").val();
var email = $("#email").val();
var password = $("#pwd").val();
var cpassword = $("#cnfpwd").val();
if (name == '' || email == '' || password == '' || cpassword == '') 
{
    alert("Bạn chưa nhập đủ thông tin");
    $('#formID').attr('onSubmit','return false');
} 
else if ((password.length) < 8) 
{
    alert("Mật khẩu cần phải hơn 8 kí tự");
    $('#formID').attr('onSubmit','return false');
} 
else if (!(password).match(cpassword)) 
{
    alert("Nhập lại mật khẩu không trùng vui lòng nhập lại");
    $('#formID').attr('onSubmit','return false');
}
else {
    $('#formID').attr('onSubmit','return true');
}
});
});
