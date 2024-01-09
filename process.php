<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ice cream order summary</title>
</head>
<body>
<h1>Thank you for your order</h1>
<?php

//turn on error reporting
ini_set('display errors',1);
error_reporting(E_ALL);

//define constants
define('PRICE_PER_SCOOP', 2.50);
define("SALES_TAX_RATE", 0.11);


echo "<pre>";
var_dump($_POST);
echo"</pre>";

// get data from post array
// server side validation
if(!empty($scoops)){
    $scoops = $_POST['scoops'];
}else {
    echo"<p>Enter Scoops!</p>";
    return;
}

$flavors = $_POST['flavor'];
$flavorString = implode(",", $flavors);
$cone = $_POST['cone'];

//calculate the price for ice cream
$subtotal = PRICE_PER_SCOOP * $scoops;
$tax = $subtotal * SALES_TAX_RATE;
$total = $subtotal + $tax;



//print a summary
// print summary
echo "<p>$scoops scoops</p>";
echo "<p>Flavors: $flavorString</p>";
echo "<p> Cone: $cone</p>";
echo "<p> SubTotal: $subtotal</p>";
echo "<p> Tax: $tax</p>";
echo "<p> Total: $total</p>"


?>
</body>
</html>
