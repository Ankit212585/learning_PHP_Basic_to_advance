<?php
// Get form data
$origin = $_GET['origin'];
$destination = $_GET['Destination'];
$depart_date = $_GET['Depart_Date'];
$return_date = $_GET['Return_Date'];
$passengers = $_GET['Passengers'];
$email = $_GET['email'];

// Prepare data to be stored in a CSV format
$data = "$origin, $destination, $depart_date, $return_date, $passengers, $email\n";

// Save data to a local file (appending to the file)
file_put_contents('submissions.txt', $data, FILE_APPEND);

// Redirect to a confirmation page
header("Location: confirmation.php");
exit();
?>