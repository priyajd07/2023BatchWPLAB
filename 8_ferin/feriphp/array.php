<!DOCTYPE html>
<html>
<body bgcolor="#7FFF00">

<?php
echo "<u>INDEXED ARRAY<br><br></u>";
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br><br>";
echo "<u><b>ASSOCIATIVE ARRAY<br><br></b></u>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.<br><br>";
echo "<u><b>SORTED CARS:<br><br></b></u>";
sort($cars);

foreach ($cars as $car) {
    echo $car . " ";
  echo "<br>";
}

?>

</body>
</html>
