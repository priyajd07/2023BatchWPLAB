<?php
$students=array("pra"=>"pranav","rin"=>"rinu","rah"=>"rahul","adhi"=>"adhithya","fid"=>"fida");
echo "<h1>student name sorting</h1>";
print_r($students);
echo"</br>";
echo "array sorted using asort:<br/>";
asort($students);
print_r($students);
echo"</br>";
echo "array sorting using arsort:<br/>";
arsort($students);
print_r($students);
?>