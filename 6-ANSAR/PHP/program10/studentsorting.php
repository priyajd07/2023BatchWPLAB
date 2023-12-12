<?php
$a=array("Binshad"=>54,"Shamas"=>50,"Rishan"=>7,"Sara"=>8);
echo "<h1>Array before sorting </h1><br>";
print_r($a);
echo"<br>";
asort($a);
echo "<br> <h1> Array After Ascending sorting</h1> <br>";
print_r($a);
echo"<br>";
ksort($a);
echo "<br> <h1> Array After descending sorting</h1> <br>";
print_r($a);

?>
