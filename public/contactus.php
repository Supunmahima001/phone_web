<?php
require_once 'dbconnect.php';
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "Get the post request from the client";
    $name = $_POST['name'];
    $contact_no = $_POST['contact_no'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}

addData($connect,contact,$name,$name,$contact_no,$email,$message);

?>