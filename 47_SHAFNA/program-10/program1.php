<?php

$stu = array("a"=>"abc","b"=>"bnm","n"=>"nml","f"=>"fghj");

echo "<h1>alphabet array using asort</h1>";
print_r($stu);
echo "<br>";

echo "<h1>alphabet array using asort</h1>";
asort($stu);
print_r($stu);
echo "<br>";

echo "<h1>alphabet array using arsort</h1>";
arsort($stu);
print_r($stu);
echo "<br>";


?>
