<?php

// Initializing variables to null.

$nameError = $emailError = $genderError = $phonenoError =""; $name = $email = $gender = $phoneno = $comment = "";

// On submitting the form the following function will execute

if(isset($_POST['submit'])){

if (empty($_POST["name"])) {

$nameError = "Name is required";

} else {

$name = test_input($_POST["name"]);

// check IF name contains only letters and whitespace if (!preg_match("/^[a-zA-Z]*$/", $name)) {

}

preg match()

sea-

String for a

$nameError = "Only letters and white space allowed";

}

returns TRUE if the

exists and FALSE

}

if (empty($_POST["email"])) {

$emailError = "Email is required";

} else {

$email = test_input($_POST["email"]);

// check if e-mail address format is valid or not using built in function filter_var()

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { SemailError = "Invalid Email format";

}

}

if (empty($_POST["phoneno"])) { $phoneno = "Phone is required";

} else {

$phoneno = test_input($_POST["phoneno"]);

if(!preg_match("/^[0-9]{10}+$/", $phoneno)) { $phonenoError= "Invalid Phone Number";

}

} if (empty($_POST["comment"])) { $comment="";

} else {

$comment = test_input($_POST["comment"]);

} if (empty($_POST["gender"])) {

$genderError = "Gender is required";

} else {

}

$gender = test_input($_POST["gender"]);

function _input($data) {

$data = trim($data); //used to strip unnecessary characters (extra space, tab, newline) from

the user input data

$data = stripslashes($data); //used to remove backslashes (\) from the user input data

$data = htmlspecialchars($data); //converts special characters to HTML entities

return $data;

}

//php code ends here<html>

<head>

<title>Form Validation with PHP</title>

<style>

.error(

color:red

radio{

width:15px;

height:15px;

border-radius:1px;

margin-top:10px;

padding:5px;

border:none;

margin-bottom:20px

textarea

width:250px;

height:60px;

border-radius:1px;

margin-top:10px;

padding:5px;

border:none

input(

width:300px;

height:25px;

border-radius:1px;

margin-top:10px;

padding:5px;

border:none;

margin-bottom:20px

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

<h2 align="center">Form Validation with PHP</h2>

<h2>Registration Form</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"><span class="error">* required field</span><br>

<span class="error">*</span>

Name:

<input class="input" name="name" type="text" value="<?= $name ?>"><br> <!--if value="<?= $name ?>"is given it will retain the previously entered values-->

<span class="error"><?php echo $nameError;?></span><br><br>

<span class="error">*</span>

E-mail:

<input class="input" name="email" type="text" value="<?= $email ?>"><br>

<span class="error"><?php echo $emailError; ?></span><br><br>

<span class="error">*</span>

Phone:

<input class="input" name="phoneno" type="text" value="<?= $phoneno ?>"><br>

<span class="error"><?php echo $phonenoError;?></span><br><br>

<span class="error">*</span>

Gender:

<input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked";?> value="female">Female

<input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo

"checked";?> value="male">Male <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo

"checked";?> value="other">Other<br>

<span class="error"><?php echo $genderError;?></span><br><br>

Comment:

<textarea cols="40" name="comment" rows="5">

</textarea><br><br>

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

echo $gender;

echo "<br>";

echo $comment;

?>

</body>

</html>