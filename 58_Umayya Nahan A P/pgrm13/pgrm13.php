<?php
	$nameError=$emailError=$phonenoError=""; $name=$email=$phoneno="";
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
				$nameError="Only letters and white space allowed";
			} 
		}
		if(empty($_POST["email"])) 
		{ 
			$emailError="Email is required";
		} 
		else 
		{
			$email=test_input($_POST["email"]);
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)) 
			{
				$emailError="Invalid Email format";
			}
		}
		if(empty($_POST["phoneno"])) 
		{ 
			$phoneno="Phone is required";
		} 
		else 
		{ 
			$phoneno=test_input($_POST["phoneno"]); 
			if(!preg_match("/^[0-9]{10}+$/",$phoneno)) 
			{
				$phonenoError="Invalid Phone Number"; 
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
<!DOCTYPE html>
<head>
	<title>Form Validation with PHP</title>
	<style>
		.error{color:red}
		input{width:300px;
			height:25px;
			border-radius:1px;
			margin-top:10px;
			padding:5px;
			border:none;
			margin-bottom:20px;}
		form{margin:auto;
			width:440px;
			border:1px dashed #ccc;
			padding: 10px 30px 40px;
			background-color:#CACACA;}
	</style>
</head>
<body>
	<h2 align="center">Form Validation with PHP</h2>
	<h2>Registration Form</h2>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">	
		<span class="error">* required field</span><br>
		Name:
		<span class="error">*</span>
		<input class="input" name="name" type="text" value="<?=$name?>"><br>
		<span class="error"><?php echo $nameError;?></span><br><br>
		E-mail:
		<span class="error">*</span>
		<input class="input" name="email" type="text" value="<?=$email?>"><br>
		<span class="error"><?php echo $emailError;?></span><br><br>
		Phone:
		<span class="error">*</span>
		<input class="input" name="phoneno" type="text" value="<?=$phoneno?>"><br>
		<span class="error"><?php echo $phonenoError; ?></span><br><br>
		<input name="submit" type="submit" value="Submit">
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