<?php
$students=array("pra"=>"pranav","adi"=>"adithya","fid"=>"fida","rah"=>"rahul");
echo"<h1>Student name sorting</h1>";
print_r($students);
echo"<br/>";
echo"Array sorted using asort:<br/>";
asort($students);
print_r($students);
echo"<br/>";
echo"Array sorting using arsort:<br/>";
arsort($students);
print_r($students);