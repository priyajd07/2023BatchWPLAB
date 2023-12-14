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
	$data=array(array('1','sachin','tendulkar'),array('2','virat','kohli'),array('3','MS','Dhoni'));
	echo "<h1>Indian cricket players</h1>";
	echo "<table class=c>";
	echo "<tr class = c><th class=c>No.</th><th class=c>First Name</th><th class =c>Last Name</th></tr>";
	foreach($data as $a)
	{ 
	  echo"<tr class =c>";
	  foreach($a as $v)
	  {
	   echo"<td class=c>".$v."</td>";
	  }
	echo"</tr>";
	}
	echo"</table>";
	?>
	</body>
	</html>

		
