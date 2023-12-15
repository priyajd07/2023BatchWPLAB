<html>
<head>
<style>
.c
{
	border :solid 1px;font-size:28px;padding:3;
}
</style>
</head>
<body>
<?php
	$data=array(array('1','Lionel','Messi'),array('2','Cristiano','Ronaldo'),array('3','Neymar','Junior'));
	echo"<h1>Top 3 Football Players</h1>";
	echo"<table class =c>" ;
	echo"<tr class=c><th class=c>No.</th><th class =c>First Name</th><th class=c>last name</th></tr>";
	foreach($data as $a)
	{
		echo "<tr class=c>";
		foreach($a as $v)
		{
			echo "<td class = c>" .$v. "</td>";
		}
		echo "<tr>";
	}
	echo "</table>";
?>
	</body>
	</html>
