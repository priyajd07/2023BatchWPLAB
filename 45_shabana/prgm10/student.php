<html>
<body bgcolor="silver">
<?php
$students = array("minnu"=>"sreeshna", "ponnu"=>"gopika", "unnimol"=>"shabana","unnimol"=>"shamla","safu"=>"safa");
echo "<h1>students name sorting</h1>";
print_r($students);
echo"<br>";
echo"<h2>array sorted using asort:</h2><br>";
asort($students);
print_r($students);
echo"<br>";
echo"<h2>array sorted using arsort:</h2><br>";
arsort($students);
print_r($students);

?>
