<html>
<body bgcolor="Silver ">
<?php
$students = array("minnu"=>"Sreeshna","ponnu"=>"Gopika", "unnimol"=>"Shabana","unnimol"=>"Shamla","safu"=>"Safa");
echo "<h1>students name sorting</h1>";
print_r($students);
echo"<br>";
echo"array sorted using asort:<br>";
asort($students);
print_r($students);
echo"<br>";
echo"array sorted using arsort:<br>";
arsort($students);
print_r($students);

?>
