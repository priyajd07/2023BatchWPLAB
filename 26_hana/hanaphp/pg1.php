<?php
$student = array("pra"=>"pranav","rin"=>"rinu","rah"=>"rahul");
echo"<h1>student name sorting</h1>";
print_r($student);
echo"</br>";
echo"array sorted using asort:<br/>";
asort($student);
print_r($student);
echo"<br/>";
echo"array sorting using asort:<br/>";
asort($student);
print_r($student);
?>