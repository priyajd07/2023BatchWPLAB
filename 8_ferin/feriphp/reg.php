<?php
//INITIALIZING VARIABLE TO NULL
$nameError = $emailError = $phonenoError = "";
$name = $email = $phoneno = "";
//on submitting the form the following function will execute
if(isset($_POST["submit"]))
{
	if(empty($_POST["name"]))
	{
		$nameError = "Name is required";
	}
	else
	{
		$name = test_input($_POST["name"]);
		//check IF name contain only letters and whitespaces
		if(!preg_match("/^[a-zA-Z]*$/",$name))
		{
			$nameError = "Only letters and white spaces are allowed";
		}
	}
	if(empty($_POST["email"]))
	{
		$emailError = "Email is required";
	}
	else
	{
		$email = test_input($_POST["email"]);
		//cheching email is valid or not using built in function filter_var()
		if(!filter_var($email,FILTER_VALIDATE_EMAIL))
		{
			$emailError = "invalid email format";
		}
	}
	if(empty($_POST["phoneno"]))
	{
		$phonenoError = "phone number is reqired";
	}
	else
	{
		$phoneno = test_input($_POST["phoneno"]);
		if(!preg_match("/^[0-9]{10}+$/",$phoneno))
		{
			$phonenoError = "invalid phone number"; 
		}
	}
}
function test_input($data)
{
	$data = trim($data); //Used to strip unnecessary charecters from the user inputs
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
//php code done here
?>
<html>
<head>
<title> form validation with php</title>
<style>
.error {
		color : red;
	}
textarea {
		width: 250px;
		height 60px;
		border-radius: 1px;
		margin-top: 10px;
		padding: 5px;
		border: none;	
	}
.input  {
		width: 300px;
		height: 25px;
		border-radius: 1px;
		margin-top: 10px;
		padding: 5px;
		border: none;
		margin-bottom:20px;
	}
form    {
     		margin: auto;
		width: 440px;
		border: 1px dashed #ccc;
		padding: 10px 30px 40px;
		background-color: #a0f8ee;
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
