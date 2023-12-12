<html>
<body>
<?php
$fruits = array("orange", "grape", "apple");
echo "<b>Sorted array list is </b>";
 echo "<br>";
sort($fruits);
$length = count($fruits);
for($x = 0; $x < $length; $x++)
 {
  echo $fruits[$x];
  echo "<br>";
}
echo "<b>Reverse sorted array list is </b>";
 echo "<br>";
rsort($fruits);
for($x = 0; $x < $length; $x++) 
{
  echo $fruits[$x];
  echo "<br>";
}
echo "<br>";

$a=array("a"=>"Ammu","b"=>"Anju","c"=>"Kichu");
echo "<b>Sorted array list is </b>";
 echo "<br>";
print_r(($a));
 echo "<br>";
echo "<b>Reverse sorted array list is</b> ";
 echo "<br>";
print_r(array_reverse($a));
?>
</body>
</html>

