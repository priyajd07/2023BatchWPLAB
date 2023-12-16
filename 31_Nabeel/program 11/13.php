<html>
<head>
<style>
    input{
        border: solid green 2px;
        font-size: 28px;
        padding: 5;
    }
</style>
</head>
<body>
<form method="POST">
<center>
    <h1><u>Electricity Bill Calculator</u></h1>
    <input type="number" name="unit" placeholder="Enter the unit">
    <input type="submit" name="us" value="Calculate">

</form>


<?php
    $res="";
    if(isset($_POST['us']))
    {
        $u=$_POST['unit'];
        if(!empty($u))
        {
            $res=cal($u);
            echo"<br><h2>Bill Amount is: ",$res;
        }

    }
    function cal($u)
    {
        if($u<=100)
        $res=3.5*$u;
        else
        {
            $temp=100*3.5;
            $res=(($u-100)*4.8)+$temp;
        }
        return number_format((float)$res,2,'.',"");
        
    }
?>
</center>

</body>
</html>