<html>
<head>
</head>
<body>
  <center><h1><u> ELECTRICITY BILL CALCULATOR</u></h1>
<form method="post">
<input type="number" name="unit">
<input type="submit"  name="sub"  value="Calculate">
</form>
<?php
      $res="";
      if( isset( $_POST['sub'] )  )
      {
        $a=$_POST['unit'];
              if(!empty($a))
              {
                $res=cal($a);
                echo"
                      <h2>your bill is:  $res</h2>
                ";
              }
              else {
                echo"
                      <h2>PLEASE ENTER YOUR UNIT </h2>
                ";
              }
      }

      function cal($a)
      {
        if($a<=200)
        $res=$a*8;
        else {
              $temp=200*8;
              $a=$a-200;
              $res=$temp+($a*10);

        }

        return $res;
      }




?>
</body>
