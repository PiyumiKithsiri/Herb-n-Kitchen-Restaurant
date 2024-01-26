<?php
require_once("connection.php");

if (isset($_POST['del'])) {
    $delname = mysqli_real_escape_string($conn, $_POST['delname']);
    $delphone = mysqli_real_escape_string($conn, $_POST['delphone']);
    $deladdress = mysqli_real_escape_string($conn, $_POST['deladdress']);
    $delcity = mysqli_real_escape_string($conn, $_POST['delcity']);

    // Insert data into the 'delivery' table
    $query = "INSERT INTO `delivery` (`name`, `phone_number`, `del_address`, `del_city`, `del_date`, `del_time`)
              VALUES ('$delname', '$delphone', '$deladdress', '$delcity', NOW(), NOW())";

    if (mysqli_query($conn, $query)) {
        // Data insertion successful
        echo "
        <script>
            alert('Details Received.');
            window.location.href='newcart.php'; // Redirect to the next page
        </script>
        ";
    } else {
        // Data insertion failed
        echo "
        <script>
            alert('Cannot Run Query.');
            window.location.href='payment.php'; // Redirect back to the form page
        </script>
        ";
    }
}
?>
