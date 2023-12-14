<html>
<head>
<style>input{border:solid 2px;padding:5px;font-size:28px;}
</style>
</head>
<body>
<h1>Php-Calculate Elctricity Bill</h1>
<formmethod="post">
<input type="number" width="10px"name="units"placeholder="Please enter no.of Units"/>
<input type="submit"name="unit-submit"value="Submit"/>
</form>
</body>
<?php
$result_str=$result="";
if(isset($_POST['unit-submit'])){
$units=$_POST['units'];
if(!empty($units)){
$result=calculate_bill($units);
$rsult_str='<h2>Total amount of'.$units.'-.$result_str;
}
}
