<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Calculator</title>
</head>
<body>
<h1>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // User input
    $unitsConsumed = $_POST["unitsConsumed"];

    // Given tariff
    $tariffPerUnit = 8; 

    // Change this value based on your tariff

    // Calculate total bill
    $totalBill = $unitsConsumed * $tariffPerUnit;

    // Display the bill
    echo "<h2>Your Electricity Bill</h2>";
    echo "<p>Units Consumed: $unitsConsumed</p>";
    echo "<p>Tariff per Unit:RS: $tariffPerUnit</p>";
    echo "<p>Total Bill: RS: $totalBill</p>";

} 

else {


    // Display form for user input
    echo "<h2>Electricity Bill Calculator</h2>";
    echo "<form method='post' action='" . htmlspecialchars($_SERVER["PHP_SELF"]) . "'>";
    echo "Enter Units Consumed: <input type='number' name='unitsConsumed' required>";
    echo "<input type='submit' value='Calculate'>";
    echo "</form>";
}
?>


</body>
</html>
