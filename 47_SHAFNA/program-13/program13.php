<?php
$nameError=$emailError=$phonenoError="";
$name=$email=$phoneno="";
if(isset($_POST['submit']))
{
if(empty($_POST["name"]))
{
$nameError="Name is required";
}
else
{
$name=test_input($_POST["name"]);
if(!preg_match("/^[a-zA-Z]*$/",$name))
{
$nameError="only letters and white space allowed";
}
}


if(empty($_POST["email"]))
{
$emailError="email is required";
}
else
{
$email=test_input($_POST["email"]);
if(!filter_var($email,FILTER_VALIDATE_EMAIL))
{
$emailError="invalid email format";
}
}


if(empty($_POST["phoneno"]))
{
$phonenoError="phoneno is required";
}
else
{
$phoneno=test_input($_POST["phoneno"]);
if(!preg_match("/^[0-9]{10}+$/",$phoneno))
{
$phonenoError="invalid phone number";
}
}
}







function test_input($data)
{
$data=trim($data);
$data=stripslashes($data);
$data=htmlspecialchars($data);
return $data;
}
?>

<html>
<head>
<title>form validation</title>
<style>
.error{
color:red}
.radio{
width:15px;
height:15px;
</style>
<body>
<h2 align="center">FORM VALIDATION WITH PHP</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>Registration Form</h2>
<span class="error">*required field</span><br>
<span class="error">*</span>
Name:
<input class="input" name="name" type="text" value="<?=$name?>"><br>
<span class="error"><?php echo $nameError;?></span><br><br>
<span class="error">*</span>

Email:
<input class="input" name="email" type="text" value="<?=$email?>"><br>
<span class="error"><?php echo $emailError;?></span><br><br>
<span class="error">*</span>

Phone:
<input class="input" name="phoneno" type="text" value="<?=$phoneno?>"><br>
<span class="error"><?php echo $phonenoError;?></span><br><br>
<span class="error">*</span>

<input name="submit" type="submit" value="submit">
</form>

<?php
echo"<h2>your input</h2>";
echo $name;
echo"<br>";
echo $email;
echo"<br>";
echo $phoneno;
echo"<br>";
?>
</body>
</html>












