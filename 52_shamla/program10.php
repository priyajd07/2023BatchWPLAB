<html>
<body>
<?php
$student=array("shalu"=>"shamla", "safu"=>"safa","sree"=> "sreeshna","gopi"=>"gopika");
echo "<h1>Student Name Sorting</h1>";
print_r($student);
echo "<br>";
echo "Array Sorted Using asort:<br>";
asort($student);
print_r($student);
echo "<br/>";
echo "Array Sorted Using arsort:<br>";
arsort($student);
print_r($student);
echo "<br>";
?>