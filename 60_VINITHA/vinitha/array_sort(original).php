<html>
<body>
<?php
$student=array("pi"=>"Pinky","ri"=>"Rinu","gil"=>"Gilcy","anj"=>"Anju","amm"=>"Ammu");
echo "<h1>Students name sorting</h1>";
print_r($student);
echo "<br>";
echo "Array sorted using asort <br/>";
asort($student);
print_r($student);
echo "<br>";
echo "Array sorted using arsort <br/>";
arsort($student);
print_r($student);