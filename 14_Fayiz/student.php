<?php
 $students=array("pra"=>"pranav","rin"=>"rinu","rah"=>"rahul","adi"=>"aditya","fid"=>"fida");
echo"<h1>student Name sorting</h1>";
print_r($students);
echo"<br>";
echo"Array sorted using asort:<br>";
asort($students);
print_r($students);
echo"<br>";
echo"Array sorting using arsort:<br/>";
arsort($students);
print_r($students);
?>