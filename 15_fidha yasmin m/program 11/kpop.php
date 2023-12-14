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
	$data=array(array('1','Hong','joshua'),array('2','s','coups'),array('4','joenghan','hani'),array('3','chew','vernon'));
	echo "<h1>KPop Singers</h1>";
	echo"<table class=c>";
	echo "<tr class=c><th class=c><th class=c>first name</th><th class=c>last name</th></tr>";
	foreach($data as $a)
	{
		echo "<tr class=c>";
		foreach($a as $v)
		{
			echo "<td class=c>".$v."</td>";
		}
		echo "</tr>";
		}
		echo"</tsble>";
		?>
		</body>
		</html>
		















>
	