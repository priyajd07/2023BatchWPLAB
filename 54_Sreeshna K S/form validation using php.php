<html>
<body>
<?php
$nameError = $emailError = $genderError = $phonenoError ="";
$name = $email = $gender = $phoneno = "";
if(isset($_POST['submit']))
{
if (empty($_POST["name"]))
{
$nameError = "Name is required";
}
else
  {
$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z]*$/", $name))
{
$nameError = "Only letters and white space allowed";
}
}
}
if (empty($_POST["email"])) {
$emailError = "Email is required";
} else {
$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
$emailError = "Invalid Email format";
}
}
if (empty($_POST["phoneno"])) {
$phonenoError = "Phone is required";
} else {
$phoneno = test_input($_POST["phoneno"]);
if(!preg_match("/^[0-9]{10}+$/", $phoneno)) {
 $phonenoError= "Invalid Phone Number";
}
}
function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
?>
<html>
<head>
<title>Form Validation with PHP</title>
<style>

.error{
color:red
}
.radio{

width:15px;

height:15px;

border-radius:1px;

margin-top:10px;

padding:5px;

border:none;

margin-bottom:20px
}
textarea{

width:250px;

height:60px;

border-radius:1px;

margin-top:10px;

padding:5px;

border:none
}

.input{

width:300px;

height:25px;

border-radius:1px;

margin-top:10px;

padding:5px;

border:none;

margin-bottom:20px


}
.submit{
      color: white;
      background: #ee9a25;
      padding: 9px 25px;
      margin-right: 10px;
      border: none;
      border-radius: 5px;
    }
form{

margin:auto;

width:440px;

border:1px dashed #ccc;

padding:10px 30px 40px;

background-color:silver;

}
 

</style>
</head>
<body>

<h2 align="center">Form Validation with PHP</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2><center>Registration Form</center></h2>
Name:
<input class="input" name="name" type="text" value="<?= $name ?>"><br> <br>
<span class="error"><?php echo $nameError;?></span><br><br>
E-mail:

<input class="input" name="email" type="text" value="<?= $email ?>"><br>
<span class="error"><?php echo $emailError; ?></span><br><br>
Phone:

<input class="input" name="phoneno" type="text" value="<?= $phoneno ?>"><br>

<span class="error"><?php echo $phonenoError;?></span><br><br>

<center><input name="submit" type="submit" value="Submit"></center>

</form>

<?php

echo "<h2>Your Input:</h2>";

echo $name;

echo "<br>";

echo $email;

echo "<br>";

echo $phoneno;

echo "<br>";

?>

</body>

</html>

