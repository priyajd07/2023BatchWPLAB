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
	$data = array(array('1','USA','UK'),array('2','RUSSIA','NEWZEALAND'),array('3','SWITZERLAND','CANADA'));
	echo "<h1>developed countries</h1>";
	echo "<table class = c>";
	echo "<tr class=c><th class= c>NO.</th><th class = c>first name</th><th class = c>last name</th></tr>";
	foreach($data as $a)
	{ 
	  echo "<tr class = c>";
	  foreach($a as $v)
	  {
		echo "<td class = c>".$v."</td>";
	  }
	echo "</tr>";
	}
	echo "</table>";
	?>
	</body>
	</html>
	 
	
