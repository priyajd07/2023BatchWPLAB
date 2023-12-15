<?php
$numbers = array(100,1200,1242,454);
sort($numbers);
print_r($numbers);
echo "<br>";
rsort($numbers);
print_r($numbers);
echo "<br>";

$student = array("Peter"=>"45", "Ben"=>"50", "Joe"=>"70");
echo "asceding order of student  associative array uisng value ";
asort($student);
print_r($student);
echo "<br>";
arsort($student);
echo "desceding order of student  associative array using value ";
print_r($student);
echo "<br>";
ksort($student);
echo "asceding order of student  associative array using key ";
print_r($student);
echo "<br>";
krsort($student);
echo "desceding order of student  associative array using key ";
print_r($student);
echo "<br>";
?>