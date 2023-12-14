<html>
<head>sort</head>
<body bgcolor="#00BFFF">
<?php
$students=array("pra"=>"pranav","fer"=>"feri","sel"=>"selva","sob"=>"sobahi");
echo"<h1>student name sorting:</h1>";
print_r($students);
echo"<br/><br>";
echo "<b><u>Array sorted using asort:<br><br></u></b>";
asort($students);
print_r($students);
echo"<br>";
echo "<b><u>Array sorting using arsort:<br><br></u></b>";
arsort($students);
print_r($students)
?>
</body>
</html>
