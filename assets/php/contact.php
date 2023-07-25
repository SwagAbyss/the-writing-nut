<?php error_reporting(0); ?>
<?php
$action = $_REQUEST['action'];
if ($action == "")    /* display the contact form */ {
?>

<?php
} else                /* send the submitted data */ {
    $con_name = $_REQUEST['con_name'];
    $con_email = $_REQUEST['con_email'];
    $con_phone = $_REQUEST['con_phone'];
    $con_subject = $_REQUEST['con_subject'];
    $con_message = $_REQUEST['con_message'];

    $from = "From: $con_name<$con_email>\r\nReturn-path: $con_email";
    $subject = "$con_subject - From nationaldiamondtools.in";
    $con_message = "Name : $con_name,| Phone : $con_phone, | Email : $con_email, Subject : $con_subject | Message : $con_message";
    mail("sathish8608855@gmail.com", $subject, $con_message, $from);
    echo "Your Message has been sent!";
}
?>