<?php
$students= array("Pra"=>"Pranav", "ri"=>"rinku", "adhi"=>"adhithya","am"=>"ammu", "li"=>"linsha");
echo "<h1><center>Students name sorting</center></h1>";
print_r($students);
echo "<br/>";
echo "<br/>";
echo "Array sorted using a sort<br/>";
asort($students);
print_r($students);
echo "<br/>";
echo "<br/>";
echo "Array sorted using arsort<br/>";
arsort($students);
print_r($students);
