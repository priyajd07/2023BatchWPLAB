<?php
$students=array("pra"=>"pranav","rin"=>"rinu","rah"=>"rahul","adi"=>"adithya","fid"=>"fida");
echo"<h1>student name sorting</h1>";
print_r($students);
echo "</br>";
echo "Array sorted using a sort:<br/>";
asort($students);
print_r($students);
echo "<br/>";
echo "Array sorting using a sort:<br/>";
arsort($students);
print_r($students);
