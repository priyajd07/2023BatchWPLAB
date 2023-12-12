<html>
<body>
<?php
$student = array("saf"=>"safa","sham"=> "shamla", "shab"=>"shabana","sreesh"=>"sreeshna","gop"=>"gopika","shan"=>"shamna");
echo "<h1>Student Name Sorting</h1>";
print_r($student);
echo "<br>";
echo "Array sorted Using asort:<br/>";
asort($student);
print_r($student);
echo "<br>";
echo "Array sorted Using arsort:<br/>";
arsort($student);
print_r($student);
echo "<br>";
?>