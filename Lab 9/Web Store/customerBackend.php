<?php 
echo "<link rel='stylesheet' type='text/css' href='style.css'>";

$user=$_POST["username"];
$pas=$_POST["password"];
$cookies=$_POST["cookies"];
$cookiePrice=$cookies*5;
$chocolates=$_POST["chocolates"];
$chocolatePrice=$chocolates*2;
$cake=$_POST["cake"];
$cakePrice=$cake*10;
$ship=$_POST["shipping"];

$total=$cookiePrice+$cakePrice+$chocolatePrice;

echo "<h1>Welcome!</h1><br>";
echo "<h1>Password: ".$pas."</h1><br>";
echo"<table border='1'>";

echo "<tr><th>Item</th><th>Quantity</th><th>Cost per Item</th><th>Sub Total</th></tr>";
echo "<tr><th>Cookies</th><td>".$cookies."</td><td>$5</td><td>".$cookiePrice."</td></tr>";
echo "<tr><th>Chocolates</th><td>".$chocolates."</td><td>$2</td><td>".$chocolatePrice."</td></tr>";
echo "<tr><th>Cake</th><td>".$cake."</td><td>$10</td><td>".$cakePrice."</td></tr>";

if($ship=="zero"){
echo "<tr><th>Shipping</th><td colspan=\"2\">Free 7 Days Shipping</td><td>0</td></tr>";
$total=$total+0;
}
if($ship=="five"){
echo "<tr><th>Shipping</th><td colspan=\"2\">Three Days Shipping</td><td>5</td></tr>";
$total=$total+5;
}
else if($ship=="fifty"){
echo "<tr><th>Shipping</th><td colspan=\"2\">Over Night Shipping</td><td>50</td></tr>";
$total=$total+50;
}
echo "<tr><th>Total Cost</th><td colspan=\"2\"><th></td>".$total."</th></tr>";
echo "</table>";

 ?>
