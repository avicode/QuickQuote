<?php

/* Include prices file */
include('prices.php');

$selected_website_type = $_POST['web_type'];
$selected_databases = $_POST['databases'];
$selected_password = $_POST['password'];
$selected_payment = $_POST['payment'];

$website_type_cost = 0;
$website_database_cost = 0;
$website_password_cost = 0;
$website_payment_cost = 0;

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

echo "<b>".$total_cost."</b>";

?>