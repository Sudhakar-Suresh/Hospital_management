<?php
include("../connection.php"); // Make sure this path is correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $appid = $_POST['appid'];
    $prescription = $_POST['prescription'];

    // Validate input
    if (empty($appid) || empty($prescription)) {
        die("App ID and Prescription are required.");
    }

    // Escape user input for security
    $appid = $database->real_escape_string($appid);
    $prescription = $database->real_escape_string($prescription);

    // Update the appointment with the prescription
    $sql = "UPDATE appointment SET prescription='$prescription' WHERE appoid='$appid'";

    if ($database->query($sql) === TRUE) {
        header("Location: appointment.php"); // Redirect to the appointment page after success
        exit();
    } else {
        echo "Error updating prescription: " . $database->error;
    }
} else {
    die("Invalid request method.");
}
?>