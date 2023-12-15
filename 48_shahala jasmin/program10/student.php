<?php
$student=array("pra"=>"pranav","sha"=>"shahala","nith"=>"nitha");
echo "<h1>Student Name Sorting</h1>";
echo"<h2>Main Array</h2>";
print_r($student);
echo "<br> <br>";
echo "<h2>Array sorted using asort:<br></h2>";
asort($student);
print_r($student);
echo"<br> <br>";
echo "<h2>Array sorting using arsort:<br></h2>";
arsort($student);
print_r($student);
?>
