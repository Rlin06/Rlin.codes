<?php
    if (isset($_POST["submit"])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $from = $name;
        $to = 'rlin@rlin.codes';
        $subject = "[rlin.codes contact] $subject";
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    if (mail ($to, $subject, $body, $from)) {
        $result='<div class="alert alert-success">Thanks for reaching out!</div>';
    } else {
        $result='<div class="alert alert-danger">Sorry, there was an error. Please email me directly at rlin@rlin.codes</div>';
    }
    }
?>
