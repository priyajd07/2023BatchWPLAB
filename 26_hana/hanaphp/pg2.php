<html>
<head>
<style>
.c
{
border:solid 1px;font-size:28px;padding:3;
}
</style>
</head>
<body>
<?php
	$data=array(array('1','sachin','tendular'),array('2','virat','kohli'),array('3','ms','dhoni'));
	echo "<h1>indian cricket players</h1>";
	echo "<table class=c>";
	echo "<tr class=c><th class=c>No.</th><th class=c>first name</th><th class=c>last name</th></tr>";
	foreach($data as $a)
	{
	echo "<tr class=c>";
	foreach($a as $v)
	{
	echo "<td class=c>".$v."</td>";
	}
echo "</tr>";
}
echo"</table>";
?>
</body>
</html>