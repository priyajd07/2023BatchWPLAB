<?php
$students=array("pra"=>"pranav","rin"=>"rinu","rah"=>"rahul","adi"=>"adhil","fid"=>"fidha");
echo "<h1>student name sorting</h1>";
print_r($students);
echo "<br/>";
echo "Array sort using asort:<br/>";
asort($students);
print_r($students);
echo "<br/>";
echo "arayy sorting using arsort:<br/>";
arsort($students);
print_r($students);
?>