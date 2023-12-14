<html><head>
<style>
input
{
border:solid 2px;
padding:5px;
font-size:28px;
}
<body>
<h1>php-calculate electricity bill</h1>
<form method="post">
<input type="number" width="10px" name="units" placeholder="please enter no.of units"/>
<input type="submit" name="unit-submit" value="submit"/>
</form>
</body>
<?php
$result_str=$result=";
if(isset($_POST['ubit-submit'])){
$units=$_POST['units'];
if(!empty($units))
{
$result=calculate_bill($units);
$result_str='<h2>Total amount of'.$units.'-'.$result."</h2>";
echo $result_str;
}
}
function calculate_bill($units){
$unit_cost_first=3.50;
$unit_cost_second=4.00
