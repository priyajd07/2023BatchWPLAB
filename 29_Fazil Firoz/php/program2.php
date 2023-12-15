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
			$data = array(array('1','Fazil','Firoz'),array('2','Bagya','Lakshmi'),array('3','Nandan','p'),array('4','Shafna','Odiyan'));
			echo "<h1>MCA Students</h1>";
			echo "<table class=c>";
			echo "<tr class=c><th class=c>No.</th><th class=c>First Name</th><th class=c>Last Name</th></tr>";
			foreach($data as $a)
			{
				echo "<tr class=c>";	
				foreach($a as $b)
				{
					echo "<td class=c>".$b."</td>";
				}
				echo "</tr>"	;	
			}
			echo "<table>";
		?>
	</body>
</html>
