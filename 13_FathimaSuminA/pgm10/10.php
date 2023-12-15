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
	$data=array(array('1','Sachin','Tendulkar'),array('2','MS','Dhoni'),array('3','Virat','Kohli'));
	echo " <h1> Indian Criketers </H1> ";
	echo " <table class=c> " ;
	echo "<tr class=c> <th class=c> No.</TH><th class=c>first name</th><th class=c>last name</th> </tr>";
	foreach($data as $a)
	{
		echo "<tr class=c>";
		foreach($a as $v)
		{
			echo " <td class=c> " .$v. " </td> ";
		}
		echo " </TR> ";
		}
		echo" </TABLE> ";
?>
		</body>
		</html>
		














