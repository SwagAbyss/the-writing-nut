<?php
$con_name=$_REQUEST['con_name'];
$con_email=$_REQUEST['con_email'];
$con_phone=$_REQUEST['con_phone'];
$con_message=$_REQUEST['con_message'];


$from="From: $con_name<$con_email>\r\nReturn-path: $con_email";
$subject="Message sent using your contact form of Writing Nut";
$con_message="Name : $con_name,| Phone : $con_phone, | Email : $con_email,| Message : $con_message";
mail("sathish8608855@gmail.com,jeffrinjen10@gmail.com", $subject, $con_message, $from);
echo "Your Message has been sent!";
?>