<?php
	$students = array("uma"=>"Umayya","han"=>"Hanoona","ish"=>"Ishrath","laf"=>"Lafis","saj"=>"Sajidha");
	echo "<h1> Student Name Sorting </h1>";
	print_r($students);
	echo"<br/><br/>";
	echo "<h3>Array Sorted Using asort : </h3><br/>";
	asort($students);
	print_r($students);
	echo "<br/><br/>";
	echo "<h3>Array Sorting using arsort: </h3><br/>";
	arsort($students);
	print_r($students);
?>