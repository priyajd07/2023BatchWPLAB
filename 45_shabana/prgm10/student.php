<html>
<head>
<?php
$students = array("minnu"=>"sreeshna", "ponnu"=>"gopika", "unnimol"=>"shabana","unnimol"=>"shamla","safu"=>"safa");
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