<html>
<body bgcolor="Silver ">
<?php
$students = array("minnu"=>"Sreeshna","ponnu"=>"Gopika", "unnimol"=>"Shabana","unnimol"=>"Shamla","safu"=>"Safa");
echo "<h1>students name sorting</h1>";
print_r($students);
echo"<br><br>";
echo"<h2>array sorted using asort:</h2>";
asort($students);
print_r($students);
echo"<br><br>";
echo"<h2>array sorted using arsort:</h2>";
arsort($students);
print_r($students);

?>