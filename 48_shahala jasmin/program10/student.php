<?php
$student=array("pra"=>"pranav","sha"=>"shahala","nith"=>"nitha");
echo "<h1>Student Name Sorting</h1>";
print_r($student);
echo "<br>";
echo "Array sorted using asort:<br>";
asort($student);
print_r($student);
echo"<br>";
echo "Array sorting using arsort:<br>";
arsort($student);
print_r($student);
?>