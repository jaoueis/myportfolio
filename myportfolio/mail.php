<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mysql_host     = "localhost";
    $mysql_username = "root";
    $mysql_password = "root";
    $mysql_database = "db_visitors";
    $port           = "8889";

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

    print "Hello " . $name . "! I have received your message and email " . $email . ".";
    print " I will contact you very soon!";

    $mysqli = new mysqli($mysql_host, $mysql_username, $mysql_password, $mysql_database, $port);

    if ($mysqli->connect_error) {
        die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
    }

    $statement = $mysqli->prepare("INSERT INTO users_data (user_name, user_email, user_message) VALUES(?, ?, ?)");
    $statement->bind_param('sss', $name, $email, $message);

    if ($statement->execute()) {
        print " Hello " . $name . "! your message has been saved!";
    } else {
        print $mysqli->error;
    }
}