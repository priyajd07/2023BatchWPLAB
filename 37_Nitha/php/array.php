<html>
<body bgcolor="#00f900">

<?php
echo "<h4><u>INDEXED ARRAY</u></h4>";
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
echo "<h4><u>ASSOCIATIVE ARRAY</u></h4>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>
</body>
</html>
