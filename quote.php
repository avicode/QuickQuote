<?php

/* Include prices file */
include('prices.php');

$selected_website_type = $_POST["web_type"];
$selected_databases = $_POST["databases"];
$selected_password = $_POST["password"];
$selected_payment = $_POST["payment"];


$total_cost = 500;

if ($selected_website_type == "Standard") {
	$website_type_cost = $standard_website;
} else {
	$website_type_cost = $flash_website;
}

$website_database_cost = $databases * $selected_databases;

if ($selected_password == "on") {
	$website_password_cost = $passwords;
} else {
	$website_password_cost = 0;
}

if ($selected_payment == "on") {
	$website_payment_cost = $payment;
} else {
	$website_payment_cost = 0;
}

$total_cost = $total_cost += $website_database_cost += $website_password_cost += $website_type_cost += $website_payment_cost;



?>

<?php 

echo "<b>".$website_database_cost."</b><br>";
echo "<b>".$website_password_cost."</b><br>";
echo "<b>".$website_type_cost."</b><br>";
echo "<b>".$website_payment_cost."</b>";
echo "<b>".$selected_databases."</b><br>";
echo "<b>".$selected_password."</b><br>";
echo "<b>".$selected_payment."</b><br>";
echo "<b>".$selected_website_type."</b>";
echo "<b>".$passwords."</b><br>";
echo "<b>".$databases."</b><br>";
echo "<b>".$flash_website."</b><br>";
echo "<b>".$standard_website."</b><br>";
echo "<b>".$payment."</b><br>";
echo "<b>".$total_cost."</b><br>";

?>