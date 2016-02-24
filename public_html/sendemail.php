<?php
$name       = @trim(stripslashes($_POST['name']));
$from       = @trim(stripslashes($_POST['email']));
$subject    = @trim(stripslashes($_POST['subject']));
$message    = @trim(stripslashes($_POST['message']));

$to   		 = "rlin@rlin.codes";
$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $subject, $message, $headers);

die;

?>



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
