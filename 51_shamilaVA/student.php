<html>
<body>
<?php
$student=array("pi"=>"Pinky","ri"=>"Rinu","Anu"=>"Aneesha","anj"=>"Anjana","amm"=>"Ammu");
echo "<h1>Students name sorting</h1>";
print_r($student);
echo "<br>";
echo"<br>";
echo "<b>Array sorted using asort </b><br/>";
asort($student);
echo"<br>";
print_r($student);
echo "<br>";
echo"<br>";
echo "<b>Array sorted using arsort </b><br/>";
echo"<br>";
arsort($student);
print_r($student);