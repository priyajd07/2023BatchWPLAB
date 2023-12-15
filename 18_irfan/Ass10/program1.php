<?php

$stu = array("i"=>"Irfan","s"=>"Shafna","n"=>"Nandan","f"=>"Firoz");

echo "<h1>Student array using asort</h1>";
print_r($stu);
echo "<br>";

echo "<h1>Student array using asort</h1>";
asort($stu);
print_r($stu);
echo "<br>";

echo "<h1>Student array using arsort</h1>";
arsort($stu);
print_r($stu);
echo "<br>";


?>
