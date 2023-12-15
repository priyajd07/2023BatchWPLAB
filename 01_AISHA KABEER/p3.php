<?php 
$student=array("sum"=>"sumina","ham"=>"hamna","the"=>"theertha","bis"=>"bishara","jil"=>"jilsina","sin"=>"siniya");
echo "<h3>Student name string</h3>";
print_r($student);
echo "<br>";
echo "<h3>Sorted array by using asort:</h3><br>";
asort($student);
print_r($student);
echo "<br><br>";

echo "<h3>Sorted array by using arsort:</h3><br>";
arsort($student);
print_r($student);
echo "<br>";
?>