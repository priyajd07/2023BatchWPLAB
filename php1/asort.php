
<html>
<body>

<?php
$students = array("amr"=>"amrin","far"=>"farook","sin"=>"siniya","sha"=>"shadi","ham"=>"hamna","ana"=>"shahana");

echo "<h1>student name sorting</h1>";
print_r ($students);
echo "<br/>";
echo"Array sorted using asort:</br>";
asort($students);
print_r($students);
echo "<br/>";
echo "Array sorting using asort:<br/>";
asort($students);
print_r($students);
?>


</body>
</html>

