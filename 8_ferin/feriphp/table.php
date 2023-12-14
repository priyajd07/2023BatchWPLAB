<html>
<head><style>
.c
{
border:solid 1px;font-size:28px;padding:3;
}
</style></head>
<body>
<?php 
$data=array(array('1','sachin','tendulkar'),array('2','lional','messi'),array('3','umman','chandi'));
echo "<h1> INDIAN CRICKET PLAYERS</h1>";
echo "<table class=c>";
echo "<tr class=c><th class=c>NO.</th><th class=c>First Name</th><th class=c>Last Name</th></tr>";
foreach($data as $a)
{
	echo "<tr class=c>";
	foreach($a as $v)
	{
		echo"<td class=c>".$v."</td>";
	}
	echo "</tr>";
}
echo"</table>";
?>
</body>
</html>
