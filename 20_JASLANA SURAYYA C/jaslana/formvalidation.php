<?php
$nameError=$emailError=$genderError=$phonenoError="";
$name=$email=$gender=$phoneno=$comment="";
if(isset($_POST["name"])){
if(empty($_POST["name"])){
$nameError="Name is required";
}else{
$name=test_input($_POST["name"]);
if(!preg_match("/^[a-zA-Z]*$/",$name)){
$nameError="only letters and white space allowed";
}
}
if(empty($_POST["email"])){
$emailError="Email is required";
}else{
$email=test_input($_POST["email"]);
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
$emailError="invalid email format";
}
}
if(empty($_POST["phoneno"])){
$phoneno="phone is required";
}else{
$phoneno=test_input($_POST["phoneno"]);
if(!preg_match("/^[0-9]{10}+$/",$phoneno)){
$phonenoError="invalid phone number";
}
}
function test_input($data){
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
color:red
}
.radio{
width:15px;
height:15px;
border-radius:1px;
margin-top:10px;
padding:5px;
border:none;
margin-bottom:20px;
}
textarea{
width:250px;
height:60px;
border-radius:1px;

margin-top:10px;
padding:5px;
border:none;
}
.input{
width:300px;
height:25px;
border-radius:1px;
margin-top:10px;
padding:5px;
border:none;
margin-bottom:20px;
}
form{
margin:auto;
width:440px;
border:1px dashed #ccc;
padding:10px 30px 40px;
background-color:#a0f8ee;
}
</style>
</head>
<body>
<h2 align="center">Form validation with php</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>Registration Form</h2>
<span class="error">*required field</span><br>
<span class="error">*</span>
Name:
<input class="input" name="name" type="text" value="<?=$name?>"><br>
<!--if value="<?=$name?>"is given it will retain the previously entered values-->
<span class="error"><?php echo $nameError;?></span><br><br>
<span class="error">*</span>
E-mail:
<input class="input" name="email" type="text" value="<?=$email?>"><br>
<span class="error"><?php echo $emailError;?>></span><br><br>
<span class="error">*</span>
<input name="submit" type="submit" value="Submit">
</form>
<?php
echo "<h2>your input:</h2>"
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $phoneno;
echo "<br>";
?>
</body>
</html>