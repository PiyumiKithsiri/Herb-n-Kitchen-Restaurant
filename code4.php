<?php
require('connection.php');

if (isset($_POST['submit'])) {
    $name = $_POST['firstname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];
    $cname = $_POST['cardname'];
    $cnum = $_POST['cardnumber'];
    $exmon = $_POST['expmonth'];
    $exyear = $_POST['expyear'];
    $cvc = $_POST['cvc'];

    $query = "INSERT INTO `payment`(`name`, `email`, `address`, `city`, `state`, `zip`, `name_on_card`, `card_num`, `ex_month`, `ex_year`, `cvc`, `pay_date`, `pay_time`) VALUES ('$name','$email','$address','$city','$state','$zip','$cname','$cnum','$exmon','$exyear','$cvc', NOW(), NOW())";

    if ($result = mysqli_query($conn, $query)) {
        echo "
        <script>
        alert('Details Received.');
        window.location.href='newcart.php'; // Redirect to login page
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Cannot Run Query.');
            window.location.href='payment.php';
        </script>
        ";
    }
}
?>
