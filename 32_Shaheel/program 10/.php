<?php
$s=array(1=>"amir",2=>"nabeel",3=>"Jaseel",9=>"Faheem",5=>"Shaheel");
echo"<br><br>THE ARRAY ELEMENTS:<BR>";
print_r($s);
asort($s);
echo"<br><br>THE ARRAY ELEMENTS AFTER SORTED:<BR>";
print_r($s);
arsort($s);
echo"<br><br>THE ARRAY ELEMENTS AFTER REVERSE SORTED:<BR>";
print_r($s);
?>
