<html>
<head>
<style>
.c
{
border:solid 3px;font_size:48 px; padding:13;
}
</style>
</head>
<body>
<?php
$data=array(array('1','sachin','tendulkar'),array('2','virat','kohli'),array('3','MS','dhoni'),array('4','MS','dhoni'));
echo "<h1>Indian Cricket Players</h1>";
echo "<table  class=c>";
echo "<tr class=c><th class=c>No.</th><th class=c>First Name</th><th class=c>Last Name</th></tr>";
foreach($data as $a)
{
echo "<tr class=c>";
foreach($a as $v)
{
echo "<td class=c>".$v."</td>";
}
echo "</tr>";
}
echo "</table>";
?>
</body>
</html>
