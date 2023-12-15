<html>
<?php
$student=array("Safa"=>"safu", "Shamla"=>"shalu", "Sreeshna"=>"shabu", "Gopika"=>"gopz", "Shabana", "Shamna"=>"shanu");
echo "<h1>Students name sort</h1>";
print_r($student);
echo "<br>";
echo "<h3>array sorted using asort:<br></h3>";
asort($student);
print_r($student);
echo "<br>";
echo "<h3>array sorted using arsort:<br></h3>";
asort($student);
print_r($student);
echo "<br>";
?>
</html>
