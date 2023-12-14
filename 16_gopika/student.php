<html>
<body bgcolor="thistle">
<?php 
$student=array("Safu"=>"safa", "Shal"=>"shamla", "Sree"=>"sreeshna", "Gopz"=>"gopika", "Shab"=>"shabana", "Sham"=>"shamna");
echo "<h1>Students Name Sort</h1>";
print_r($student);
echo "<br><br>";
echo "array sorted using asort:<br>";
asort($student);
print_r($student);
echo "<br><br>";
echo "array sorted using arsort:<br>";
arsort($student);
print_r($student);
echo "<br>";

?>
</body>
</html>