<html>
<body>
<?php
$student=array("shalu"=>"shamla", "safu"=>"safa","sree"=> "sreeshna","gopi"=>"gopika");
echo "<h1>Student Name Sorting</h1>";
print_r($student);
echo "<br>";
echo "<h2>Array Sorted Using asort:</h2><br>";
asort($student);
print_r($student);
echo "<br/>";
echo "<h2>Array Sorted Using arsort:</h2><br>";
arsort($student);
print_r($student);
echo "<br>";
?>
