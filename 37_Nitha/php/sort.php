<html>
<body>
<?php
$students=array("pra"=>"pranav","fer"=>"feri","sel"=>"selva","adi"=>"adila","fid"=>"fida");
echo"<h1>Student Name Sorting</h1>";
print_r($students);
echo"<br/><br/>";
echo"<h4>Array Sorted Using asort:</h4><br/>";
asort($students);
print_r($students);
echo"<br/><br/>";
echo"<h4>Array Sorting Using arsort:</h4><br/>";
arsort($students);
print_r($students);
?>
</body>
</html>