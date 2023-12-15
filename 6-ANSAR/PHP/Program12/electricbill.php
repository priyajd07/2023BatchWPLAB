<html>
<head>
    <title>Electricity Bill Calculator</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {   
    $unitsConsumed = $_POST["unitsConsumed"];
    $tariffPerUnit = 8;  
    $totalBill = $unitsConsumed * $tariffPerUnit;    
    echo "<h2>Your Electricity Bill</h2>";
    echo "<p>Units Consumed: $unitsConsumed</p>";
    echo "<p>Tariff per Unit:RS: $tariffPerUnit</p>";
    echo "<p>Total Bill: RS: $totalBill</p>";
} else {
    echo "<h2>Electricity Bill Calculator</h2>";
    echo "<form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
    echo "Enter Units Consumed: <input type='number' name='unitsConsumed' required>";
    echo "<input type='submit' value='Calculate'>";
    echo "</form>";
}
?>
</body>
</html>

