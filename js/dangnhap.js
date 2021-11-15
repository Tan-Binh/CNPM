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
alert("Please fill all fields...!!!!!!");
$('#formID').attr('onSubmit','return false');
} 
else if ((password.length) < 8) 
{
alert("Password should atleast 8 character in length...!!!!!!");
$('#formID').attr('onSubmit','return false');
} 
else if (!(password).match(cpassword)) 
{
alert("Your passwords don't match. Try again?");
$('#formID').attr('onSubmit','return false');
}
else {
$('#formID').attr('onSubmit','return true');
}
});
});
