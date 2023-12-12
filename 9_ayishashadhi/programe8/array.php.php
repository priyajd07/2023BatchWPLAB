<!DOCTYPE html>
<html>
<body>

<?php
echo "<h2> WELCOME TO PHP</h2>";

$students=array("sha"=>"shahana","ham"=>"hamna","dhi"=>"shadhi","sini"=>"siniya","amr"=>"amrin","far"=>"farooq");
echo "<h2>SORTED NAMES</h2>";
print_r($students);
echo "<br/>";
echo "<h2>NAMES SORTED USING ASORT:</h2><br/>";
echo "<br/>";
asort($students);
print_r($students);
echo "<br/>";
echo "<h2>NAMES SORTED USING ARSORT:</h2><br/>";
echo "<br/>";
arsort($students);
print_r($students);
?>

</body>
</html>
