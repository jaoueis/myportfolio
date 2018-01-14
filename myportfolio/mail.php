<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mysql_host     = "localhost";
    $mysql_username = "shanricy_admin";
    $mysql_password = "%S?MVb;1.D12";
    $mysql_database = "shanricy_db_visitors";
    $port           = "3306";

    $name    = $_POST['user_name'];
    $email   = $_POST['user_email'];
    $message = $_POST['user_message'];

    if (empty($name)) {
        die("Please enter your name");
    }
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Please enter valid email address");
    }

    if (empty($message)) {
        die("Please enter text");
    }

    $mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database, $port);

    if ($mysqli->connect_error) {
        die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    $statement = $mysqli->prepare("INSERT INTO users_data (user_name, user_email, user_message) VALUES(?, ?, ?)");
    $statement->bind_param('sss', $name, $email, $message);

    if ($statement->execute()) {
        print " Hello " . $name . "! Your message has been received! I will contact you very soon. " . "<a href='http://shanjiang.io'><button>Back to home page</button></a>";
    } else {
        print $mysqli->error;
    }
}