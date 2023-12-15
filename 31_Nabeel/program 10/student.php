<?php
echo"<h1><u>STUDENT NAME SORTING</u></h1><h3>";
$s=array(1=>"Nabeel",2=>"Amir",3=>"Jaseel",9=>"Faheem",5=>"Shaheel");
echo"THE ARRAY ELEMENTS:<BR>";
print_r($s);
asort($s);
echo"<br><br>THE ARRAY ELEMENTS AFTER SORTED:<BR>";
print_r($s);
arsort($s);
echo"<br><br>THE ARRAY ELEMENTS AFTER REVERSE SORTED:<BR>";
print_r($s);
?>
