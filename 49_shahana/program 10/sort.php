<!DOCTYPE html>
<html>
<body>

<?php
$students = array("sha"=>"shahana","ham"=>"hamna", "shd"=>"shadhi", "sin"=>"siniya","amr"=>"amrin","frq"=>"farooq");
echo "<h1>Student Name Sorting</h1>";
print_r($students);
echo "<br>";
echo "Array sorted using asort:<br>";
asort($students);
print_r($students);
echo "<br>";
echo "Array sorted using arsort:<br>";
arsort($students);
print_r($students);
?>
</body>
</html>