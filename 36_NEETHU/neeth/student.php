<html>
<body>
<?php
$students = array("pra"=>"pranav","rin"=>"rinu","rah"=>"rahul","adi"=>"adithya","fid"=>"fida");
echo "<h1> Student Name Sorting </h1>";
print_r($students);
echo"<br/>";
echo "Array Sorted Using asort : <br/>";
asort($students);
print_r($students);
echo "<br/>";
echo "Array Sorting using arsort: <br/>";
arsort($students);
print_r($students);
?>
</body>
</html>